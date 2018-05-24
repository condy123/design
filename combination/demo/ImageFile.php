<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:14
 */

/**
 * 独立对象2：图片文件类
 */
class ImageFile extends Filesystem
{
    public function getName()
    {
        return '图片：' . $this->name;
    }

    public function getSize()
    {
        return 100;
    }
}