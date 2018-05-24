<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:54
 */

require 'PayAdapter.php';
require 'AlipayAdapter.php';

// 客户端代码
$alipay = new AlipayAdapter();
// 用pay()方法实现支付
$alipay->pay();

require 'WechatPayAdapter.php';
// 客户端代码
$wechat = new WechatPayAdapter();
// 也是用pay()方法实现支付
$wechat->pay();