<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:15
 */



/**
 * 独立对象：视频文件类
 */
class VideoFile extends Filesystem
{
    public function getName()
    {
        return '视频：'. $this->name;
    }

    public function getSize()
    {
        return 200;
    }
}