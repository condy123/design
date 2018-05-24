<?php
class English extends L
{
    private $price = 200;
    public function cost(Lession $_lession)
    {
        return $this->price*$_lession->_num;
    }

    public function type()
    {
        return '您购买的是英语课程';
    }
}