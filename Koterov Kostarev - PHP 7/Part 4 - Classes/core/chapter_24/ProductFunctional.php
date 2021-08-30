<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 09.02.2021
 * Time: 16:10
 */

namespace chapter_24\product
{
    trait ProductFunctional
    {
        protected $_price;
        protected $_date;

        /**
         * @param mixed $price
         */
        public function setPrice(float $price): void
        {
            $this->_price = $price;
        }

        /**
         * @return mixed
         */
        public function getPrice(): float
        {
            return $this->_price;
        }

        /**
         * @return mixed
         */
        public function getDate()
        {
            return $this->_date;
        }


    }
}

namespace chapter_24\book
{
    class BookFunctional
    {
        protected $_bookName;
        protected $_bookAuthor;
        protected $_ISBN;

        /**
         * @return mixed
         */
        public function getBookAuthor()
        {
            return $this->_bookAuthor;
        }

        /**
         * @return mixed
         */
        public function getBookName()
        {
            return $this->_bookName;
        }

        /**
         * @return mixed
         */
        public function getISBN()
        {
            return $this->_ISBN;
        }
    }

}



