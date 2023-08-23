<?php

namespace Digi\Keha\KERNEL;

use Digi\Keha\Configuration\Config;
use PDO;
use PDOException;


class Model extends PDO{

    private static $instance = null;
    public static $className;



    private function __construct(){
        $dsn = 'mysql:dbname='. Config::DBNAME.';host='.CONFIG::DBHOST;

        try{
            parent::__construct($dsn, CONFIG::DBUSER, CONFIG::DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        } catch (PDOException $e) {
            $e = sprintf("[%s] : %s ligne %s", $e->getMessage(), $e->getFile(), $e->getLine()) . PHP_EOL;
            // $this->createlogger('Error : ' . $e);
            echo 'Oups !!! Une erreur est survenue';
            die();
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private static function getEntityName()
    {
        $classname = static::class;
        $tab = explode('\\', $classname);
        $entity = $tab[count($tab) - 1];
        return $entity;
    }

    private static function getClassName()
    {
        return static::class;
    }

    private static function Execute($sql)
    {
        $pdostatement = self::getInstance()->query($sql);
        return $pdostatement->fetchAll(\PDO::FETCH_CLASS, self::getClassName());
    }


    public static function getAll()
    {
        $sql = "select * from " . self::getEntityName();
        return self::Execute($sql);
    }



    public static function getById(int $id)
    {
        $sql = "select * from " . self::getEntityName() . " where id=$id";
        return self::Execute($sql);
    }



    public static function findNotesByUser()
    {
        $sql = "SELECT notes.id, users.id as users
            FROM notes
            LEFT JOIN users
            on user_id= users.id
            
        " ;
        // var_dump($sql);
        return self::Execute($sql);
    }



    public static function insert(array $datas)
    {
        $sql = "insert into " . self::getEntityName() . " values (NULL,";
        $count = count($datas);
        $i = 1;
        foreach ($datas as $data) {
            if ($i < $count) {
                $sql .= "'$data',";
            } else {
                $sql .= "'$data'";
            }
            $i++;
        }
        $sql .= ")";
        return self::getInstance()->exec($sql);
    }



    public static function delete(int $id)
    {
        $sql = "delete from " . self::getEntityName() . " where id=$id";
        return self::getInstance()->exec($sql);
    }



    public static function update(int $id, array $datas)
    {
        $sql = "update " . self::getEntityName() . " set ";
        $count = count($datas);
        $i = 1;
        foreach ($datas as $key => $value) {
            if ($i < $count) {
                $sql .= "$key='$value',";
            } else {
                $sql .= "$key='$value'";
            }
            $i++;
        }
        $sql .= " where id=$id";
        return self::getInstance()->exec($sql);
    }


// private function createlogger(string $message): void
    // {
    //     if (!is_dir('src/Kernel/Logger')) {
    //         mkdir('src/Kernel/Logger', 0777, true);
    //     }
    //     file_put_contents('src/Kernel/Logger/' . date('Y-d-m') . '.log', $message . PHP_EOL, FILE_APPEND);
    // }
    

    
}
