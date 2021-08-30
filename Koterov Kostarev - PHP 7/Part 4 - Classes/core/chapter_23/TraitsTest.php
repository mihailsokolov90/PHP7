<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 29.01.2021
 * Time: 15:57
 */

namespace core\chapter23;


interface ITagsCommon
{
    public function GetCommonTags(): string;
}


trait BrowserPrinter
{
    public static function WriteLine($str, $newLines = 1)
    {
        echo $str." ";
        for (;$newLines > 0; --$newLines) echo "<br/>";
        echo "\n";
    }

    public static function WriteHeader($header, $level = 4)
    {
        echo "<h".$level."> $header </h".$level.">\n";
    }
}


trait Tags
{
    public $tag = "Some tag";

    public function Tag()
    {
        return $this->tag;
    }

    public function Author()
    {
        return "Tags::author";
    }

    public function GetCommonTags(): string
    {
        return "#authors #goods #prices #discount";
    }

    public abstract function OriginalTag(): string;
}


trait Autors
{
    protected $author = "Some author";

    public function Tag()
    {
        return "Authors::tag";
    }

    public function Author()
    {
        return $this->author;
    }

    protected function GetAuthorID()
    {
        $uid = "";
        $c = "";

        mt_srand( time() );
        for( $i = 0; $i < 16; ++$i )
        {
            $c = sprintf("%02X", mt_rand(0x00, 0xFF));
            $uid .= "$c ";
        }

        return $uid;
    }

}



class TraitsTest implements ITagsCommon
{
    use Tags, Autors, BrowserPrinter {
        Tags::Author insteadof Autors;
        Tags::Tag insteadof Autors;
        Autors::GetAuthorID as public;
        Autors::Tag as authorTag;
        Autors::Author as authorBase;
    }

    public function Tag()
    {
        return "Base::tag";
    }

    public function Author()
    {
        return "Base::author";
    }

    public function OriginalTag(): string
    {
        return "This is my original tag with autor id: \n<pre>".$this->GetAuthorID()."</pre>\n";
    }

    public static function CreateInstance(): TraitsTest
    {
        return new static;
    }

    public function RunTest()
    {
        self::WriteHeader("Default Functions:", 6);

        self::WriteLine("Tag: ".$this->Tag());
        self::WriteLine("Author: ".$this->Author());

        self::WriteHeader("Pseudonames Functions:", 6);

        self::WriteLine("Tag: ".$this->authorTag());
        self::WriteLine("Author: ".$this->authorBase());

        self::WriteHeader("Abstract Functions:", 6);

        self::WriteLine( $this->OriginalTag(), 0 );
    }
}