<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
function __autoload($class)
{
    require  dirname(__FILE__) . '/' . str_replace('\\','/',$class) . '.php';

}
