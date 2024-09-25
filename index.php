<?php

$host="localhost";
$user="root";
$password="";
$bd="api";


$connection = new mysqli($host,$user,$password,$bd);

if($connection->connect_error){
    die("Conexión no establecida!".$connection->connect_error);
}

header("Content-Type: application/json");
$method= $_SERVER['REQUEST_METHOD'];
//print_r($method);

$path= isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
$searchId = explode('/',$path);
$id= ($path !=='/') ? end($searchId):null;

switch($method){
    case 'GET':
        search($connection,$id);
        break;
    case 'POST':
        insert($connection);
        break;

    case 'PUT':
        update($connection, $id);
        break;

    case 'DELETE':
        delete($connection,$id);
        break;
    default:
        echo 'Método no permitido';
        break;

}

function search($connection,$id){
    $sql ="SELECT * FROM USUARIOS";
    $sql =($id ==null) ? "SELECT * FROM USUARIOS":"SELECT * FROM USUARIOS WHERE id=$id";
    $result = $connection->query($sql);

    if($result){
        $data=array();
        while($row= $result->fetch_assoc()){
            $data[]= $row;
        }

        echo json_encode($data);
    }

}

function insert($connection){
    $dato= json_decode(file_get_contents('php://input'),true);

    $name=$dato['name'];

    $sql ="INSERT INTO USUARIOS(NOMBRE) VALUES ('$name')";
    $result = $connection->query($sql);

    if($result){
        $dato['id']=$connection->insert_id;
       echo json_encode($dato);
    }else{
        echo json_encode(array('error'=>'Error al crear el Usuario'));
    }

}

function delete($connection, $id){
    $sql ="DELETE FROM USUARIOS WHERE id=$id";
    $result = $connection->query($sql);

    if($result){
        echo json_encode(array('mensaje'=>'Usuario Eliminado!'));
    }else{
        echo json_encode(array('error'=>'Error al eliminar al Usuario'));
    }

}

function update($connection, $id){

    $dato= json_decode(file_get_contents('php://input'),true);
    $name=$dato['name'];

    $sql ="UPDATE USUARIOS SET NOMBRE='$name' WHERE id=$id";
    $result = $connection->query($sql);

    if($result){
        echo json_encode(array('mensaje'=>'Usuario Actualizado!'));
    }else{
        echo json_encode(array('error'=>'Error al actualizar el Usuario'));
    }

}



?>