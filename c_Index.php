<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */

namespace App\Controllers;

use App\Views\View;
use App\Models\File;

class Index
{

    public function action()
    {

        File::prepareData();
        $view = new View();
        //$view->assign('files',\App\Models\File::findAll());
        $view ->files = File::findAll();
        $view->display( dirname(dirname(dirname(__FILE__))) . '/Templates/index.php');
    }
}