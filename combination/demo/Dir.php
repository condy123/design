<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:13
 */

/**
 * 目录类
 */
class Dir extends Filesystem
{
    private $filesystems = [];

    // 组合对象必须实现添加方法。因为传入参数规定为Filesystem类型，
    // 所以目录和文件都能添加
    public function add(Filesystem $filesystem)
    {
        $key = array_search($filesystem, $this->filesystems);
        if ($key === false) {
            $this->filesystems[] = $filesystem;
        }
    }

    // 组合对象必须实现移除方法
    public function remove(Filesystem $filesystem)
    {
        $key = array_search($filesystem, $this->filesystems);
        if ($key !== false) {
            unset($this->filesystems[$key]);
        }
    }

    public function getName()
    {
        return '目录：' . $this->name;
    }

    public function getSize()
    {
        $size = 0;
        foreach ($this->filesystems as $filesystem) {
            $size += $filesystem->getSize();
        }

        return $size;
    }
}