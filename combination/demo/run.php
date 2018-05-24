<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午5:15
 */

require 'Filesystem.php';
require 'Dir.php';
require 'TextFile.php';
require 'ImageFile.php';
require 'VideoFile.php';


// 创建home目录，并加入三个文件
$dir = new Dir('home');
$dir->add(new TextFile('text1.txt'));
$dir->add(new ImageFile('bg1.png'));
$dir->add(new VideoFile('film1.mp4'));

// 在home下创建子目录source
$subDir = new Dir('source');
$dir->add($subDir);

// 创建一个text2.txt，并放到子目录source中
$text2 = new TextFile('text2.txt');
$subDir->add($text2);

// 打印信息
echo $text2->getName(), '-->', $text2->getSize();
echo '<br />';
echo $subDir->getName(), ' --> ',$subDir->getSize();
echo '<br />';
echo $dir->getName(), ' --> ', $dir->getSize();