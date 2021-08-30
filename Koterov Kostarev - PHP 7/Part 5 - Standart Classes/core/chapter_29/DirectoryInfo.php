<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 13.05.2021
 * Time: 11:04
 */

namespace fs;


use Traversable;

class DirectoryInfo implements \IteratorAggregate
{

    protected $_path = ".";

    public function __construct(string $path = ".")
    {
        $this->_path = $path;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new DirectoryInfoIterator($this);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->_path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->_path = $path;
    }

    public function getName(): string
    {
        return basename($this->_path);
    }
}


// -----------------------------------------------------------------------------------------------------
//                                 DirectoryInfo Iterator Class
// -----------------------------------------------------------------------------------------------------


class DirectoryInfoIterator implements \Iterator
{

    protected $_dir = null;

    protected $_currElement = false;

    protected $_parent = null;

    public function __construct(DirectoryInfo $parent)
    {
        $this->_parent = $parent;

        $this->_dir = opendir( $parent->getPath() );
        $this->rewind();
    }

    public function __toString()
    {
        return $this->_parent->getPath()."/".$this->_currElement;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        $cur = $this->_parent->getPath()."/".$this->_currElement;

        if( is_dir($cur) ) return new DirectoryInfo($cur);

        return $cur;
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->_currElement = readdir($this->_dir);
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->_currElement;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid(): bool
    {
        return ($this->_currElement !== false);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        rewinddir( $this->_dir );
        $this->_currElement = readdir($this->_dir);
    }
}