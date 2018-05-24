<?php

//策略模式
require "Lession.php";
require "L.class.php";
require "English.php";
require "Math.php";
//通过不同的参数来改变不同课程的行为，这种方式实现了类的切换  多态
$_lession = new Lession(5,new English());


echo $_lession->type().' '.$_lession->cost();//您购买的是英语课程 900

echo "\n";

//通过不同的参数来改变不同课程的行为，这种方式实现了类的切换  多态
$_lession = new Lession(5,new Math());

echo $_lession->type().' '.$_lession->cost();//您购买的是英语课程 900

