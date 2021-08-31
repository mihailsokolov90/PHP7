<?php


namespace core;

require_once ("ApplicationBase.php");
require_once ("chapter_33/mailx.php");


class ApplicationChapter_33 extends ApplicationBase
{
    public static function getInstance(): ApplicationChapter_33
    {
        return parent::getInstance();
    }

    public static function Title()
    {
        return "Chapter 33 - Email Functions";
    }

    public function exec()
    {
        self::EmailEncodingTest();
    }

    public function RunEmailTest()
    {
        self::WriteHeader("Simple Mail Test");

        $lorem = <<<TEXT
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias amet assumenda beatae ea illum qui reprehenderit! Accusantium aliquid, aut commodi, deserunt est necessitatibus nisi quis quos repellendus ullam unde.
TEXT;

        $test = mailx("./core/chapter_33/mail_template.eml", "m.sokolov.kompas@gmail.com", $lorem);

        self::WriteArray($test);
    }

    public function EmailEncodingTest()
    {
        self::WriteHeader("Email Encoding Test");

        $eml_template_path = "./core/chapter_33/mail_template.eml";

        $content = <<<TEXT
Задача организации, в особенности же реализация намеченных плановых заданий в значительной степени 
обуславливает создание направлений прогрессивного развития. Равным образом постоянное 
информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает 
создание модели развития. Не следует, однако забывать, что рамки и место обучения кадров влечет за собой 
процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.

Значимость этих проблем настолько очевидна, что новая модель организационной деятельности позволяет оценить значение форм развития. 
Товарищи! сложившаяся структура организации представляет собой интересный эксперимент проверки соответствующий условий активизации. 
Таким образом новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании дальнейших 
направлений развития. Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности играет важную роль 
в формировании новых предложений. Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности играет важную роль 
в формировании модели развития. Значимость этих проблем настолько очевидна, что консультация с широким активом влечет за собой процесс 
внедрения и модернизации соответствующий условий активизации.
TEXT;
        if( !file_exists($eml_template_path) )
        {
            self::WriteError("Eml file template $eml_template_path does not exists");
            return;
        }

        $eml_template = file_get_contents($eml_template_path);
        $tos = "Mikle <m.sokolov.kompas@gmail.com>";

        $mail_content = strtr( $eml_template, [ "{TO}" => $tos, "{BODY}" => $content ] );

        $mail_content_enc = $this->mailenc($mail_content);

        $this->mailx($mail_content_enc);
    }

    public function activeTemplateMail()
    {
        self::WriteHeader("Active template mail");

        $tos = "Mikhail"
    }

    public function mailxf(string $to, string $body, string $eml_path)
    {
        $headers = "";
        $content = "";

        if( !file_exists($eml_path) )
        {
            self::WriteError("Wrong file path: $eml_path");
        }

        list($headers, $content) = preg_split('/\r?\n\r?\n/s', file_get_contents($eml_path), 2);

        $content = strtr($content, ["{TO}" => $to, "{BODY}" => $body]);

        $to_header = "";
        if( preg_match('{ ^To: \s*([^\r\n]+)\s*[\r\n]+ }muxi', $headers, $to_header) )
        {
            str_replace($headers, $to_header[0], "");
        }

        $subject_header = "";
        if( preg_match('{ ^Subject: \s*([^\r\n]+)\s*[\r\n]+ }muxi', $headers, $subject_header) )
        {
            str_replace($headers, $subject_header[0], "");
        }

        mail($to, $subject_header[1], $content, $headers);
    }

    public function mailx(string $mail)
    {
        $headers = "";
        $content = "";
        list($headers, $content) = preg_split('/\r?\n\r?\n/s', $mail, 2);

        $to_header = "";
        if( preg_match('{ ^To: \s*([^\r\n]+)\s*[\r\n]+ }muxi', $headers, $to_header) )
        {
            str_replace($headers, $to_header[0], "");
        }

        $subject_header = "";
        if( preg_match('{ ^Subject: \s*([^\r\n]+)\s*[\r\n]+ }muxi', $headers, $subject_header) )
        {
            str_replace($headers, $subject_header[0], "");
        }

        mail($to_header[1], $subject_header[1], $content, $headers);

        self::WriteLine("Send mail to: ".htmlentities($to_header[1]) );
        self::WriteLine("Subject: ".$subject_header[1]);
        self::WritePreData($content);
    }

    public function mailenc(string $content)
    {
        list($header, $body) = preg_split('{\r?\n\r?\n}sux', $content, 2);

        $res = preg_match('{^Content-type:\s*\S+\s*;\s*charset\s*=\s*(\S+)\s*}mux', $header, $charset_match);

        if( !$res )
        {
            self::WriteError("Can\'t find charset");
            return false;
        }
        else
        {
            self::WriteLine("Find charset: ".$charset_match[1]);
        }

        $encheaders = "";
        foreach (preg_split('/\r?\n/suix', $header) as $hr)
        {
            self::WriteLine("Find header: $hr");

            $enc= $this->mailenc_header($hr, $charset_match[1]);
            $encheaders .= "$enc\r\n";

            self::WritePreData("Encoded: $enc");
            self::WriteLine("-------------------------------------------------");
        }

        return( "$encheaders.\r\n.$body" );
    }

    public function mailenc_header($header, $charset): string
    {
        return preg_replace_callback('/[\x7f-\xff][^<>\r\n]*/sux',
                function($replace) use($charset)
                {
                    preg_match('/(.*?)+(\s*)/sux', $replace[0], $v);
                    $enc = base64_encode($v[1]);

                    return "=?$charset?B?$enc?=".$v[2];
                }, $header);
    }
}