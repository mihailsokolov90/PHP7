<?php


function mailx(string $path, string $to, string $body)
{
    $EOS = "\n\r";

    $data = file_get_contents($path);

    if( empty($data) ) return null;

    list($headers, $content) = preg_split('/\r?\n\r?\n/s', $data, 2, PREG_SPLIT_NO_EMPTY);

    $content = strtr( $content, [ '{TO}' => $to , '{BODY}' => $body ] );

    $to_header = "";
    preg_match('{ ^To:\s*([^\r\n]+)[\r\n]*}muix', $headers, $to_header);
    $headers = str_replace($to_header[0], "", $headers);

    $subject_header = "";
    preg_match('{ ^Subject:\s*([^\r\n]+)[\r\n]*}mux', $headers, $subject_header);
    $headers = str_replace($subject_header[0], "", $headers);

    mail($to, $subject_header[1], $content, $headers);

    return [$headers, $content];
}