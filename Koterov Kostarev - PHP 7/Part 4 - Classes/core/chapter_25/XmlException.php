<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 18.02.2021
 * Time: 14:01
 */

namespace ch25;

use Throwable;

interface IXmlException
{
    public function getXmlError(): \LibXMLError;
}

class XmlException extends \Exception
implements IXmlException
{
    # DATA -------------------------------------------------------------------------

    protected $_xmlError = null;

    # INIT -------------------------------------------------------------------------

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->_xmlError = libxml_get_last_error();
        $message .= "; XML Error: ".$this->_xmlError->message;

        parent::__construct($message, $code, $previous);
    }

    # INTERFACE -------------------------------------------------------------------------

    public function getXmlError(): \LibXMLError
    {
        return $this->_xmlError;
    }
}