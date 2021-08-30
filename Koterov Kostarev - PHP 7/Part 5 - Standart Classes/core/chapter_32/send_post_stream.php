<?php

$query = 'name=SomeUserName&passwd=Hsdf93mfd';

$opts = [
    'http' => [
        'method' => 'POST',
        'user-agent' => 'Mozilla/6.0',
        'header' => "Content-type: application/x-www-form-urlencoded\r\n".
                     "Content-Length: ".mb_strlen($query),
        'content' => $query
    ]
];

echo file_get_contents('http://localhost/process_file.php',
        false, stream_context_create($opts));

