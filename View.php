<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
namespace  App\Views;

class View
{

    protected $data=[];

    /*public function assign($name, $value)
    {
        $this->data[$name]= $value;//in template $this->data["files"]
    }*/

    public function __get($name)
    {
        return $this->data[$name];//in template $this->files
    }

    public function __set($name, $value)
    {
        //in index.php we can use only property of class
        $this->data[$name]=$value;
    }

    public function display($tempalte)
    {
        include $tempalte;
    }

}