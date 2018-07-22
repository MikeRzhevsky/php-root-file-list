<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
require dirname(__FILE__) . '/public/autoload.php';

/*move to controllers \App\Models\File::prepareData();
$view = new \App\Views\View();
//$view->assign('files',\App\Models\File::findAll());
$view ->files = App\Models\File::findAll();
$view->display( dirname(__FILE__) . '/Templates/index.php');
*/
$controller = new \App\Controllers\Index();
$controller->action();
?>