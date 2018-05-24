<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 上午10:48
 */

/**
 * 工厂方法模式
 **/
interface userProperties {
    function getUsername();
    function getGender();
    function getJob();
}

interface createUser
{
    function create($properties);
}

class User implements userProperties
{
    private $username;
    private $gender;
    private $job;
    public function __construct($username, $gender, $job)
    {
        $this->username = $username;
        $this->gender = $gender;
        $this->job = $job;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getJob()
    {
        return $this->job;
    }
}

class userFactory
{
    private $user;
    public function __construct($properties = [])
    {
        $this->user =  new User($properties['username'], $properties['gender'], $properties['job']);
    }

    public function getUser()
    {
        return $this->user;
    }
}

class FactoryMan implements createUser
{
    function create($properties) {
        return new userFactory($properties);
    }
}

class FactoryWoman implements createUser
{
    function create($properties) {
        return new userFactory($properties);
    }
}

class clientUser
{
    static public function getClient($properties)
    {
        $fac = new FactoryMan;
        $man = $fac->create($properties);
        echo $man->getUser()->getUsername();
    }
}

$employers = [
    ['username' => 'Jack', 'gender' => 'male', 'job' => 'coder'],
    ['username' => 'Marry', 'gender' => 'female', 'job' => 'designer'],
];
$user = clientUser::getClient($employers[0]);