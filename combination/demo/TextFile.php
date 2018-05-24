<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:14
 */

/**
 * 独立对象：文本文件类
 */
class TextFile extends Filesystem
{
    public function getName()
    {
        return '文本文件：' . $this->name;
    }

    public function getSize()
    {
        return 10;
    }
}

