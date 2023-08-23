<?php
include('../../conexion/conexion.php');
//crear las vaariables de los datos recibidos

if(isset($_POST['nombre']))$requestData['nombre']=$_POST['nombre'];
if(isset($_REQUEST['apellido']))$requestData['apellido']=$_REQUEST['apellido'];
if(isset($_REQUEST['edad']))$requestData['edad']=$_REQUEST['edad'];
if(isset($_REQUEST['genero']))$requestData['genero']=$_REQUEST['genero'];
if(isset($_REQUEST['ciudad']))$requestData['ciudad']=$_REQUEST['ciudad'];
$accion=$_REQUEST['btnEnviar'];
//=============ACCIONES===============
    switch($accion){
        case 'Guardar':
            
                store($requestData,$conn);
            break;
        case 'Eliminar':
                $id=$_REQUEST['id'];
                destroy($id,$conn);
        break;
        case 'Editar':
            $id=$_REQUEST['id'];
            edit($id,$conn);
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

//============================
function destroy($id,$conn){
    $sql=" DELETE from personas WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header('Location: ./index.php');
    }else{
        echo "Error ".$sql." <br>".mysqli_error($conn);
    }
}

function edit($id,$conn){
    $sql="SELECT * FROM personas WHERE id=$id";
   
}


?>