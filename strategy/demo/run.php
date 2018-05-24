<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:17
 */
require 'OutputStrategy.php';
require 'Output.php';
require 'ArrayStrategy.php';
require 'SerializeStrategy.php';
require 'JsonStrategy.php';

/**
 * 客户端代码
 */
$test = ['a', 'b', 'c'];

// 需要返回数组
$output = new Output(new ArrayStrategy());
$data = $output->renderOutput($test);
print_r($data);

// 需要返回JSON
$output = new Output(new JsonStrategy());
$data = $output->renderOutput($test);
print_r($data);

// 序列化返回

$output = new Output(new SerializeStrategy());
$data = $output->renderOutput($test);
print_r($data);