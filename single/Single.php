<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 上午9:26
 */

class Single
{
    // 私有静态成员属性
    private static  $_instance = null;

    // 私有构造函数
    private function __construct(){}

    /**
     * Author: MeeQi
     * Date: 2018/5/24 上午10:13
     * @return object
     */
    static public function getInstance()
    {
        $info = '我没有实例化';
        if(!(self::$_instance instanceof self)){
            $info = '我实例化了一次';
            self::$_instance = new self;
        }
        echo $info."\n";
        return self::$_instance;
    }
}