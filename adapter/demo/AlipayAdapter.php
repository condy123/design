<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:54
 */

/**
 * 支付宝适配器
 */

class AlipayAdapter implements PayAdapter
{
    public function pay()
    {
        // 实例化Alipay类，并用Alipay的方法实现支付
        // $alipay = new Alipay();
        // $alipay->sendPayment();
        echo '假设我实例化了alipay';
    }
}