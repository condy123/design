<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午4:00
 */

require 'Database.php';

$config = array(
    'db_name' => 'hll',
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => ''
);

$db1 = Database::getInstance($config);
var_dump($db1);
$db2 = Database::getInstance($config);
var_dump($db2);
$db3 = Database::getInstance($config);
var_dump($db3);
