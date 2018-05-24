<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:14
 */

/**
 * 策略接口
 */
interface OutputStrategy
{
    public function render($array);
}