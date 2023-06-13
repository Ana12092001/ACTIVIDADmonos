<?php
//archivo para conectar con sql
const DBHOST = "localhost";
const DBUSER = "root";
const PASSWORD = "";
const DB = "mytwiter";
function connect(){
    $conexion= mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
    return $conexion;
};
?>