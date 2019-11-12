<?php
class Carrito{
  private $productos;
  private $usuario;



   public function __construct($usuario,$producto){

     $this->setUsuario($usuario)


   }
 public function agregarProducto(Producto $producto){

     $this->productos[]=$productos;
 }

 public function quitarProducto(Producto $producto){


 }

 public function darProducto(){

    return $this->productos;
 }

public function getUsuario(){
     return $this->usuario

}









 ?>
