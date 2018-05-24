<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 上午10:21
 */

/**
 * 基本工厂模式
 * */
class User
{
    private $username;
    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getUser() {
        return $this->username;
    }
}

class userFactory
{
    static public function createUser()
    {
        return new User('MeeQi');
    }
}

echo (userFactory::createUser())->getUser();
