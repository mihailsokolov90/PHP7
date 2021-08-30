<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 13.01.2021
 * Time: 13:27
 */

namespace core\chapter23;

require_once "Page.php";


abstract  class CachedPage extends Page
{
    protected $_memcached = null;
    protected $_persistent_id = "chapter_23_memcached";

    public function __construct($title = '', $content = '')
    {
        $this->_memcached = new \Memcached($this->_persistent_id);
        $this->_memcached->addServer("127.0.0.1", "11211", 100);

        parent::__construct($title, $content);

        $this->_memcached->add($this->id('title'), $title);
        $this->_memcached->add($this->id('content'), $content);
    }

    public function isCached($id)
    {
        return (bool)$this->_memcached->get($id);
    }

    public function getData($id)
    {
        return $this->_memcached->get($id);
    }

    public function setData($id, $value, $expiration = 0)
    {
        $this->_memcached->set($id, $value, $expiration);
    }

    public function ClearCache()
    {
        $keys = $this->_memcached->getAllKeys();
        $this->_memcached->deleteMulti($keys);
    }

    public final function Title()
    {
        if( $this->isCached( $this->id('title') ) === true )
        {
            return $this->getData( $this->id('title') );
        }
        else
        {
            $this->_memcached->set( $this->id('title'), $this->_title );
        }

        return parent::Title();
    }

    public final function Content()
    {
        if( $this->isCached( $this->id('content') ) === true )
        {
            return $this->getData( $this->id('content') );
        }
        else
        {
            $this->_memcached->set( $this->id('content'), $this->_content );
        }

        return parent::Content();
    }

    public abstract function id($name);
}