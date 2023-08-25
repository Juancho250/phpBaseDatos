<?php

//Variables: $nombrevariable;
//Para la conexion nesecitamos 4 parametros: servidor, usuario, contraseña, nombrede la Base de datos

$servidor="localhost";
$user="root";//root es un usuario por defecto
$password="";
$basedatos="crudphp";

$conexion=new mysqli($servidor, $user, $password, $basedatos);//Ya la conexion esta lista

//Comprobar si existe algun error de conexion
if($conexion->connect_errno)//connect_errno verifica un error de conectividad
{
    echo "Nuestra conexion presenta fallas";
    exit();
}

?>