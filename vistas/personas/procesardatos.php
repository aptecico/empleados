<?php
include('../../conexion/conexion.php');
//crear las vaariables de los datos recibidos

$requestData['nombre']=$_POST['nombre'];
$requestData['apellido']=$_REQUEST['apellido'];
$requestData['edad']=$_REQUEST['edad'];
$requestData['genero']=$_REQUEST['genero'];
$requestData['ciudad']=$_REQUEST['ciudad'];
$requestData['accion']=$_REQUEST['btnEnviar'];

//=============ACCIONES===============
    switch($accion){
        case 'Guardar':
                store($request);
            break;
    }

//====================================
//función para guardar los datos en la base de datos
function store($request){
    //crear el script para guardar en la base de datos
    $sql="INSERT INTO personas(nombre,apellido,edad,genero,ciudad)
    VALUES ('$nombre','')
    ";

}



?>