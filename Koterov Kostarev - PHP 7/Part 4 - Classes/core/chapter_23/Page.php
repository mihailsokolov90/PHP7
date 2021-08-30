<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 12.01.2021
 * Time: 16:51
 */

namespace core\chapter23;


abstract class Page
{
    public function __construct($title, $content)
    {
        $this->_content = $content;
        $this->_title = $title;
    }

    public function Title()
    {
        return $this->_title;
    }

    public function Content()
    {
        return $this->_content;
    }

    public function Render()
    {
        echo "<h4>".htmlspecialchars($this->_title)."</h4>";

        echo nl2br( htmlspecialchars( $this->_content ) );
    }

    protected $_title;
    protected $_content;
}