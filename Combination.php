<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午3:08
 */

// 组合

class Head
{
    public $name = '头部';
}

class Body
{
    public $name = '身体';
}

class Human
{
    public $head;
    public $body;

    public function setHead(Head $head)
    {
        $this->head = $head;
    }

    public function setBody(Body $body)
    {
        $this->body = $body;
    }

    public function display()
    {
        return sprintf('人由%s和%s组成', $this->head->name, $this->body->name);
    }
}

// 客户端代码
$man = new Human();
$man->setHead(new Head());
$man->setBody(new Body());
echo $man->display();