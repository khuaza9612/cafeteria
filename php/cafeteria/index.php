<?php

include './conexion/conf.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
        $query="select * from cafeteria where id=".$_GET['id'];
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
    }else{
        $query="select * from cafeteria";
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetchAll()); 
    }
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='POST'){
    unset($_POST['METHOD']);
    
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];
    $query="insert into cafeteria(nombre, referencia, precio, peso, categoria, stock, fecha ) values 
    ('$nombre', '$referencia', '$precio', '$peso', '$categoria', '$stock', '$fecha')";
    $queryAutoIncrement="select MAX(id) as id from cafeteria";
    $resultado=metodoPost($query, $queryAutoIncrement);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='PUT'){
    unset($_POST['METHOD']);
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];
    $query="UPDATE cafeteria SET nombre='$nombre', referencia='$referencia', precio='$peso',precio='$peso',categoria='$categoria',stock='$stock',fecha='$fecha' WHERE id='$id'";
    $resultado=metodoPut($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='DELETE'){
    unset($_POST['METHOD']);
    $id=$_GET['id'];
    $query="DELETE FROM cafeteria WHERE id='$id'";
    $resultado=metodoDelete($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='POSTT'){
    unset($_POST['METHOD']);
    
    $nombre=$_POST['nombre'];
    $fecha=$_POST['cantidad'];
    $query="insert into venta (nombre, cantidad ) values 
    ('$nombre', '$cantidad')";
    $queryAutoIncrement="select MAX(id) as id from venta";
    $resultado=metodoPost($query, $queryAutoIncrement);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}


?>



if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
        $query="select * from cafeteria where id=".$_GET['id'];
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
    }else{
        $query="select * from cafeteria";
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetchAll()); 
    }
    header("HTTP/1.1 200 OK");
    exit();
}


if($_POST['METHOD']=='POST'){
    unset($_POST['METHOD']);
   
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];
    $query="insert into cafeteria(nombre, referencia, precio, peso, categoria, stock, fecha ) values 
    ('$nombre', '$referencia', '$precio', '$peso', '$categoria', '$stock', '$fecha')";
    $queryAutoIncrement="select MAX(id) as id from cafeteria";
    $resultado=metodoPost($query, $queryAutoIncrement);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='PUT'){
    unset($_POST['METHOD']);
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];
    $query="UPDATE cafeteria SET 
    nombre='$nombre', referencia='$referencia', precio='$precio',peso='$peso', 
    categoria='$categoria',stock='$stock',fecha='$fecha'
    WHERE id='$id'";
    $resultado=metodoPut($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='DELETE'){
    unset($_POST['METHOD']);
    $id=$_GET['id'];
    $query="DELETE FROM cafeteria WHERE id='$id'";
    $resultado=metodoDelete($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

header("HTTP/1.1 400 Bad Request");


?>