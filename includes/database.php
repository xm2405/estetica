<?php
header('Access-Control-Allow-Origin: *');
$db = mysqli_connect(
    'localhost',
    'root',
    '',
    'salon' 
);
$db->set_charset('utf8');

if(!$db){
    echo "ERROR EN LA CONEXION";
    exit;
}     

//echo "CONEXION CORRECTA";

