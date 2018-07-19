<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
require dirname(__FILE__) . '/autoload.php';

\App\Models\File::prepareData();
$files = \App\Models\File::findAll();
require dirname(__FILE__) . '/Templates/index.php';
?>