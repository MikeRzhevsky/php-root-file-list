<?php
/*
@MikeRzhevsky miker.ru@gmail.com
 */
namespace App;

class Db
{

    protected $dbh;
    public function __construct()
    {
        $congif = (include dirname(dirname(__FILE__) ).'/congif.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host='.$congif['host'] . ';dbname=' . $congif['dbname'],
            $congif['user'],
            $congif['password']
        );

    }
    public function query($sql, $data=[])
    {
        $sth = $this-> dbh ->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll();
    }
    public function execute($sql, $data=[])
    {
        $sth = $this-> dbh ->prepare($sql);
        return $sth->execute($data);
    }
    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}