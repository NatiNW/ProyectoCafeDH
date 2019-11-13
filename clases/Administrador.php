<?php

class Administrador {
  private $nombre;
  private $email;
  private $password;
  private $avatar;


  public function __construct($nombre,$email){
    $this->nombre=$nombre;
    $this->email=$email;

  }

  public function getNombre(){
    return $this->nombre;
    }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }


  public function getEmail(){
    return $this->email;
    }

  public function setEmail($email){
    $this->email=$email;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password=$password;
  }

  public function getAvatar(){
    return $this->avatar;
  }

  public function setAvatar($avatar){
    $this->avatar=$avatar;
  }



  public function altaDeProducto($producto){

      $conex = new PDO('mysql:host=localhost;dbname=proyectoCafe', 'root', '');

    $nombreProducto = $producto->getNombreProducto();
    $descripcion = $producto->getDescripcion();
    $precio = $producto->getPrecio();
    $stock = $producto->getStock();
    $foto = $producto->getFoto();
    $categoria= $producto->getCategoria();

    $sql = 'INSERT into Productos (nombreProducto,descripcion,precio,stock,foto,categoria) VALUES (:nombreProducto, :descripcion,:precio,:stock,:foto,:categoria)';
    $sentencia = $conex->prepare($sql);
    $sentencia->bindValue(':nombreProducto', $nombreProducto);
    $sentencia->bindValue(':descripcion', $descripcion);
    $sentencia->bindValue(':precio', $precio);
    $sentencia->bindValue(':stock', $stock);
    $sentencia->bindValue(':foto', $foto);
    $sentencia->bindValue(':categoria', $categoria);
    $sentencia->execute();

}

public function bajaDeProducto($productos){
  $conex = new PDO('mysql:host=localhost;dbname=proyectoCafe', 'root', '');

$id = $producto->getId();
$sql = 'DELETE from Productos  WHERE id = :id';
$sentencia = $conex->prepare($sql);
$sentencia->bindValue(':id', $id);
$sentencia->execute();

}

}



 ?>
