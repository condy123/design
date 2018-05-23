<?php
class Math extends L{
    private $price = 900;
    public function cost(Lession $_lession)
    {
        return $this->price*$_lession->_num;
    }

    public function type()
    {
        return '您购买的是数学课程';
    }
}