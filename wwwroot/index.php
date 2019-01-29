<?php

function d($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}

;

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}

;

function init()
{
    //dd(get_loaded_extensions());
    //phpinfo();
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    register_shutdown_function(function () {
        //var_dump(error_get_last());
    });
}

init();

try {

    // mysql connect
//    $conn = mysql_connect('mysql:3306', 'root', '');
//    mysql_query('set names utf8');
//    mysql_query('use test');
//    $r = mysql_query('select * from love');
//    var_dump($r);
//    $d = mysql_fetch_array($r);
//    var_dump($d);

    // pdo socket connect
//    $pdo = new PDO('mysql:host=172.20.0.2;dbname=test', 'root', '');
//    $pdo = new PDO('mysql:host=mysql;dbname=test', 'root', '');

    $pdo = new PDO('mysql:unix_socket=/run/mysqld/mysqld.sock;dbname=test', 'root', '');
    $stm = $pdo->query('select * from love');
    $data = $stm->fetchAll();
    d($data);
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}