<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:27
 */

require 'Observer.php';
require 'Observable.php';
require 'Order.php';
require 'Email.php';
require 'Message.php';
require 'Log.php';
require 'Alert.php';

// 创建观察者对象
$email = new Email();
$message = new Message();
$log = new Log();
// 创建订单对象
$order = new Order();

// 向订单对象中注册3个观察者：发送邮件、短信通知、记录日志
$order->attach($email);
$order->attach($message);
$order->attach($log);
// 添加订单，添加时会自动发送通知给观察者
$order->addOrder();

// 创建“系统消息”观察者
$alert = new Alert();
// 注册观察者到订单对象中
$order->attach($alert);

echo '<br />';

// 删除记录日志观察者
$order->detach($log);
// 添加另一个订单，会再次发送通知给观察着
$order->addOrder();