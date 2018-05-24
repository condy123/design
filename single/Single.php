<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 上午9:26
 */

/**
 *
 *  单例模式就是让类的一个对象成为系统中的唯一实例，避免大量的 new 操作消耗的资源
 *
 *  1、一个private的__construct是必须的，单例类不能在其它类中实例化，只能被自身实例化；
 *  2、拥有一个保存类的实例的静态成员变量;
 *  3、一个静态的公共方法用于实例化这个类，并访问这个类的实例;
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