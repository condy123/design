<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:30
 */

/**
 * 观察者4：系统消息
 */
class Alert implements Observer
{
    public function update(Observable $observable)
    {
        echo '系统消息：您的订单有更新了~~~';
    }
}