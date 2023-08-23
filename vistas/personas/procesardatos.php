<?php
include('../../conexion/conexion.php');
//crear las vaariables de los datos recibidos

$requestData['nombre']=$_POST['nombre'];
$requestData['apellido']=$_REQUEST['apellido'];
$requestData['edad']=$_REQUEST['edad'];
$requestData['genero']=$_REQUEST['genero'];
$requestData['ciudad']=$_REQUEST['ciudad'];
$accion=$_REQUEST['btnEnviar'];

//=============ACCIONES===============
    switch($accion){
        case 'Guardar':
            print_r($requestData);
                store($requestData,$conn);
            break;

    }

//====================================
//función para guardar los datos en la base de datos
function store($requestData,$conn){
    $nombre=$requestData['nombre'];
    $apellido=$requestData['apellido'];
    $edad=$requestData['edad'];
    $genero=$requestData['genero'];
    $ciudad=$requestData['ciudad'];
   print_r($requestData);
    //crear el script para guardar en la base de datos
    $sql="INSERT INTO personas(nombre,apellido,edad,genero,ciudad)
    VALUES ('$nombre','$apellido','$edad','$genero','$ciudad');
    ";
     echo $sql;

    if(mysqli_query($conn,$sql)){
        header('Location: ./index.php');
    }else{
        echo "Error ".$sql." <br>".mysqli_error($conn);
    }

}



?>