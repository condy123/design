<?php
//策略模式
//课程类
class Lession{
    //课程购买人数
    private $_num;
    //策略属性,保存具体策略角色对象的引用，例如ENGLISH或者MATH
    private $_stragety;

    //构造方法初始化
    public function __construct($_num,$_stragety)
    {
        $this->_num = $_num;
        $this->_stragety = $_stragety;
    }

    //拦截器
    public function __get($key)
    {
        return $this->$key;
    }

    //返回具体策略角色课程所需要费用
    public function cost(){
        //$this->_stragety保存了english对象的引用
        //$this 表示lession类传递给english类
        return $this->_stragety->cost($this);
    }

    //返回购买的课程
    public function type(){
        return $this->_stragety->type();
    }
}