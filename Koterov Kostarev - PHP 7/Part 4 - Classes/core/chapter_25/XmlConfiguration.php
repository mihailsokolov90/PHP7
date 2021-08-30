<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 18.02.2021
 * Time: 14:00
 */

namespace ch25;

require_once "XmlException.php";
require_once "FileException.php";


class XmlConfiguration
{
    // DATA ----------------------------------------------------------------------------------
    protected $_file = "";
    protected $_xml = null;
    protected $_conf = null;

    // INIT ----------------------------------------------------------------------------------

    public function __construct(string $file = "")
    {
        $path = 'D:/Application Projects/PHP/Koterov Kostarev - PHP 7/Part 4 - Classes';
        $this->_file = realpath( $path."/tmp/$file" );

        if( !file_exists($this->_file) )
        {
            throw new FileException($this->_file, "File $file not exists");
        }

        if( !is_writable($this->_file) || !is_readable($this->_file) )
        {
            throw new FileException($this->_file, "File $file is not accessable");
        }

        $this->_xml = simplexml_load_file($this->_file, "SimpleXMLElement", LIBXML_NOERROR);

        if( $this->_xml == null )
        {
            throw new XmlException("Can't load $file settings. Xml error...");
        }

        $this->_conf = $this->_xml->xpath('/Configuration/Option');
    }

    // PROPERTIES ----------------------------------------------------------------------------------

    /**
     * @return bool|string
     */
    public function getFile(): string
    {
        return $this->_file;
    }

    /**
     * @return null|\SimpleXMLElement[]
     */
    public function getConf(): ?array
    {
        return $this->_conf;
    }

    // METHODS ----------------------------------------------------------------------------------

    public function save()
    {
        if( $this->_conf === null || $this->_xml === null )
        {
            throw new \Exception("Xml Configuration is not ready");
        }

        file_put_contents($this->_file, $this->_xml->asXML() );
    }

    public function get($param)
    {
        if( $this->_conf === null || $this->_xml === null )
        {
            throw new \Exception("Xml Configuration is not ready");
        }

        $res = $this->_xml->xpath("/Configuration/Option[@key=\"$param\"]");

        if( count($res) > 0 )
        {
            return $res[0];
        }

        return null;
    }

    public function contains($param = ""): bool
    {
        if( $this->_conf === null || $this->_xml === null )
        {
            throw new \Exception("Xml Configuration is not ready");
        }

        $res = $this->_xml->xpath("/Configuration/Option[@key=\"$param\"]");

        return count($res) > 0;
    }
}