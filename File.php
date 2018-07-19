<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
namespace App\Models;

use App\Db;

class File
{

    const TABLE= 'fileStructure';
    const CREATETABLE='    CREATE TABLE IF NOT EXISTS fileStructure (
      id INT NOT NULL AUTO_INCREMENT,
      filename varchar(200) NOT NULL,
      filesize varchar(5) ,
      filetype varchar(5) ,
      moddate Date ,
      PRIMARY KEY (id)
    ) ;';
    public $id;
    public $fileName;
    public $filesize;
    public $filetype;
    public $moddate;


    public static function prepareData()
    {
        $db = new Db();

        $db->execute(self::CREATETABLE,self::class);
        $existsREcords = $db->query(
            'SELECT * FROM ' . self::TABLE,
            [],
            self::class);
        if(empty($existsREcords)){
            self::getfiles();
        }

    }
    public static function deleteData()
    {
        $db = new Db();

        return $db->query(
            'DELETE  FROM ' . self::TABLE,
            [],
            self::class);

    }
    public static function getfiles()
    {
        if(  ( $dh = opendir($_SERVER['DOCUMENT_ROOT']) ) !== null  ) {
            $dataArray = array();
            $ind = 0;
            while (($file = readdir($dh)) !== false) {
                $filename = $file;
                $filesize = (string)filesize($file);
                if (!$filesize)
                    $filesize = '0';
                $filetype = pathinfo($file, PATHINFO_EXTENSION);
                if (!$filetype)
                    $filetype = 'DIR';
                $moddate = date("Y-m-d", filemtime($file));//Date('Y-m-d H:i:s')
                $arr = array('filename' => $filename, 'filesize' => $filesize,
                    'filetype' => $filetype, 'moddate' => $moddate);
                $ind++;
                $file = new File();
                $file->fileName = $filename;
                $file->filetype = $filetype;
                $file->filesize = $filesize;
                $file->moddate = $moddate ;
                $file->insert();
            }
        }
    }
    public static function findAll()
    {
        $db = new Db();

        return $db->query(
            'SELECT * FROM ' . self::TABLE,
            [],
            self::class);
    }
    public function insert()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach($fields as $name => $value)
        {
            if($name=='id'){
                continue;
            }
            $cols[]=$name;
            $data[':' . $name]= $value;
        }
        $sql = 'INSERT INTO ' .self::TABLE. '
            (' .implode(',',$cols) .')
             VALUES
            (' .implode(',',array_keys($data)) . ')';
        $db= new Db();
        $db->execute($sql,$data);
        $db->getLastId();
    }
}