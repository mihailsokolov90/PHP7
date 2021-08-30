<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 09.02.2021
 * Time: 16:08
 */

namespace chapter_24;

require_once "ProductFunctional.php";

use chapter_24\book as book_f;
use chapter_24\product as prod_f;


class BookProduct
{
    use book_f, prod_f;

    public function __construct()
    {
        \strlen("some string");
    }
}