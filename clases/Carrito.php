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

   foreach($array as $elementKey => $element) {
       foreach($element as $valueKey => $value) {
           if($valueKey == 'id' && $value == 'searched_value'){
               unset($array[$elementKey]);
           }
       }


 }

 public function darProducto(){

    return $this->productos;
 }

public function getUsuario(){
     return $this->usuario

}






 ?>
