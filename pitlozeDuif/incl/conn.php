<?php

function db_connect()
{
    //Define static to avoid connecting more than once
    static $connection;

    //Check the connection
    if (!isset($connection)){
        $config     = parse_ini_file('./db/config.ini');
        $connection = mysqli_connect($config['localhost'],$config['username'],$config['password'],$config['dbname']);
    }

    //for everything else that goes wrong
    if ($connection == false){
        return mysqli_connect_error();
    }

    return $connection;
}

function db_query($query)
{
    $connection = db_connect();
    $result     = mysqli_query($connection, $query);

    return $result;
}

function db_error()
{
    $connection = db_connect();
    return mysqli_error($connection);
}

function db_select($query){
    $rows   = array();
    $result = db_query($query);

    if($result === false){
        return false;
    }

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

/**
 * @param $value
 * @return string
 * usage: $name = db_quote($POST['username']);
 * $result = db_query("INSERT INTO `users` (`name`,`email`) VALUES (" . $name . "," . $email . ")");
 */
function db_quote($value)
{
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection, $value) . "'";


}



?>
