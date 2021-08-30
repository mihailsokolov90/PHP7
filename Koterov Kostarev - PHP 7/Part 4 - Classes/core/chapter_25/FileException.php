<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 18.02.2021
 * Time: 14:27
 */

namespace ch25;


use Throwable;

interface IFileException
{
    public function fileName(): string;

    public function filePath(): string;
}



class FileException extends \Exception
implements IFileException
{
    protected $_fileName;
    protected $_filePath;

    public function __construct(string $filePath, string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->_fileName = basename($filePath);
        $this->_filePath = realpath($filePath);
    }

    public function fileName(): string
    {
        return $this->_fileName;
    }

    public function filePath(): string
    {
        return $this->_filePath;
    }
}