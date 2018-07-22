<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */

require dirname(dirname(__FILE__)) . '/public/autoload.php';
use \App\Models\File;

File::deleteData();
File::prepareData();

header("Location: {$_SERVER['HTTP_REFERER']}");
exit

?>