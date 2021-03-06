<?php


final class db
{
    private $pdo;
    private $sQuery;
    private $bConnected = false;
    private $parametrs;

    public function __construct($hostname = "127.0.0.1", $database = "film_information", $username = "root", $password = "")
    {
        $this->Connect($hostname, $database, $username, $password);
        $this->parametrs = array();
    }



    private function Connect($hostname, $database, $username, $password)
    {
        $dsn = 'mysql:host='. $database.';host='.$hostname.';charset=utf8';
        try {
            $this->pdo = new PDO($dsn,$username,$password);

            $this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8; SET CHARACTER SET utf8; SET SESSION collation_connection = utf8_general_ci;');

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,true);

            $this->bConnected = true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

    }

    public function CloseConnection()
    {
        $this->pdo = null;
    }

    private function Init($query,$parameters="")
    {
        if (!$this->bConnected) { $this->Connect();}

        try {
            $this->sQuery = $this->pdo->prepare($query);

            $this->bindMore($parameters);

            if (!empty($this->parametrs)) {
                foreach($this->parametrs as $param)
                {
                    $parameters = explode("\x7F",$param);
                    $this->sQuery->bindParam($parameters[0],$parameters[1]);
                }
            }

            $this->success = $this->sQuery->execute();
        } catch (PDOException $e) {
            echo $e->getMessage()."<br>$query";
        }

        $this->parametrs = array();
    }

    public function bind($para, $value)
    {
        $this->parametrs[sizeof($this->parametrs)] = ":" . $para . "\x7F" . $value;
    }

    public function bindMore($parray)
    {
        if (empty($this->parametrs) && is_array($parray)) {
            $columns = array_keys($parray);
            foreach($columns as $i => $column)
                $this->bind($column,$parray[$column]);
        }
    }


    public function query($query,$params = null, $fetchmode = PDO::FETCH_ASSOC)
    {
        $query = trim($query);

        $this->Init($query, $params);

        $rawStatement = explode(" ", $query);

        $statement = strtolower($rawStatement[0]);

        if ($statement === 'select' || $statement === 'show') {
            return $this->sQuery->fetchAll($fetchmode);
        } elseif ($statement === 'insert' || $statement === 'update' || $statement === 'delete') {
            return $this->sQuery->rowCount();
        } else {
            return NULL;
        }
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}


