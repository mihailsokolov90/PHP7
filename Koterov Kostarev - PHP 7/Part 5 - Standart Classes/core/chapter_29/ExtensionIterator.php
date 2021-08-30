<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 17.05.2021
 * Time: 16:25
 */

namespace fs;


use Iterator;

class ExtensionIterator extends \FilterIterator
{
    protected $_it = null;
    protected $_ext = "";

    public function __construct(\DirectoryIterator $iterator, string $extension)
    {
        parent::__construct($iterator);

        $this->_ext = $extension;
        $this->_it = $iterator;
    }

    /**
     * Check whether the current element of the iterator is acceptable
     * @link http://php.net/manual/en/filteriterator.accept.php
     * @return bool true if the current element is acceptable, otherwise false.
     * @since 5.1.0
     */
    public function accept()
    {
        if( !$this->_it->isDir() )
        {
            $ext = pathinfo( $this->current(), PATHINFO_EXTENSION );
            return $ext == $this->_ext;
        }

        return false;
    }
}