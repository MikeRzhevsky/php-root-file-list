<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
require dirname(dirname(__FILE__)) . '/autoload.php';

\App\Models\File::deleteData();
\App\Models\File::prepareData();
header("Location: {$_SERVER['HTTP_REFERER']}");
exit

?>