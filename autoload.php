<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
function __autoload($class)
{

    require   dirname(dirname(__FILE__)) . '/' . str_replace('\\','/',$class) . '.php';

}
