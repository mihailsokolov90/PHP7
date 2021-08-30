<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 08.06.2021
 * Time: 14:52
 */

$headers = getallheaders();

header("Content-type: text/plain");

print_r($headers);