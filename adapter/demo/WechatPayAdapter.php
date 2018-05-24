<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:58
 */

/**
 * 微信支付适配器
 */
class WechatPayAdapter implements PayAdapter
{
    public function pay()
    {
        // 实例化WechatPay类，并用WechatPay的方法实现支付。
        // 注意，微信支付的方式和支付宝的支付方式不一样，但是
        // 适配之后，他们都能用pay()来实现支付功能。
//        $wechatPay = new WechatPay();
//        $wechatPay->scan();
//        $wechatPay->doPay();
        echo '假设我实例化了微信支付';
    }
}
