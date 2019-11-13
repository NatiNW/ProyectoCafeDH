<?php

class Producto{
  private $nombreProducto;
  private $descripcion;
  private $precio;
  private $stock;
  private $foto;
  private $categoria;



  public function __construct($nombreProducto,$descripcion,$precio,$stock,$foto,$categoria){
    $this->nombreProducto=$nombreProducto;
    $this->descripcion=$descripcion;
    $this->precio=$precio;
    $this->stock=$stock;
    $this->foto=$foto;
    $this->categoria=$categoria;
  }

  public function getNombreProducto(){
    return $this->nombreProducto;
    }

  public function setNombreProducto(){
    $this->nombreProducto=$nombreProducto;
  }

  public function getDescripcion(){
    return $this->descripcion;
  }

  public function setDescripcion(){
    $this->descripcion=$descripcion;
  }

  public function getPrecio(){
    return $this->precio;
  }

  public function setPrecio(){
    $this->precio=$precio;
  }
  public function getStock(){
    return $this->stock;
  }

  public function setStock(){
    $this->stock=$stock;
  }
  public function getFoto(){
    return $this->foto;
  }

  public function setFoto(){
    $this->foto=$foto;
  }

  public function getCategoria(){
    return $this->categoria;
  }

  public function setCategoria(){
    $this->categoria=$categoria;
  }

}
 ?>