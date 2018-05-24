<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午3:35
 */

class VehicleFactory
{
    public static function build($className = null)
    {
        $className = ucfirst($className);
        if ($className && file_exists($className.'.php')) {
            require $className.'.php';
            return new $className();
        }
        return null;
    }
}