<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 上午10:42
 */

/**
 *简单工厂模式
 * */
interface userProperties
{
    function getUsername();
    function getGender();
    function getJob();
}

class User implements userProperties
{
    private $username;
    private $gender;
    private $job;
    public function __construct($username, $gender, $job) {
        $this->username = $username;
        $this->gender = $gender;
        $this->job = $job;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getJob() {
        return $this->job;
    }
}

class userFactory
{
    static public function createUser($properties = []) {
        return new User($properties['username'], $properties['gender'], $properties['job']);
    }
}

$employers = [
    ['username' => 'Jack', 'gender' => 'male', 'job' => 'coder'],
    ['username' => 'Marry', 'gender' => 'female', 'job' => 'designer'],
];
$user = userFactory::createUser($employers[0]);
echo $user->getUsername();