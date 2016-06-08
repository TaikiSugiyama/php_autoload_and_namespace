<?php

require_once("./ClassLoader.php");


$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/');//hogehogeはクラスを置いているディレクトリを指定
$loader->register();//オートロードに登録
