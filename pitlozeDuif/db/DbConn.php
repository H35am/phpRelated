<?php

class DbConn
{

    //Define static to avoid connecting more than once
    /**
     * @var
     * protected
     */
    protected static $connection;

    /**
     * @return bool|mysqli
     */
    public function connect(){
        //Check the connection
        if (!isset(self::$connection)) {
            $config =  parse_ini_file('config.ini');
            self::$connection = new mysqli($config['localhost'],$config['username'],$config['password'],$config['dbname']);
        }

        //for everything else that goes wrong
        if (self::$connection === false) {
            return false;
        }

        return self::$connection;
    }

    /**
     * @param $query
     * @return bool|mysqli_result
     */
    public function query($query){
        //connect to database
        $connection = $this -> connect();

        //query the database
        $result = $connection -> query($query);

        return $result;
    }

    /**
     * @param $query
     * @return array|bool
     */
    public function select($query){
        $rows = array();
        $result = $this -> query($query);

        if ($result === false) {
            return false;
        }

        while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
        }
        return $rows;
    }

    /**
     * @return string
     */
    function error(){
        $connection = $this -> connect();
        return $connection -> error;
    }

    /**
     * @param $value
     * @return string
     *
     */
    function quote($value){
        $connection = $this -> connect();
        return "'" . $connection -> real_escape_string($value) . "'";
    }

}