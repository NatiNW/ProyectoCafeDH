<?php

require_once("prueba.php");
function conectarse(){

  try {
      //Primer paso conectarnos a MYSQL
      $db = new PDO('mysql:host=localhost;dbname=proyectocafe', 'root', '',
      //esto muestra los errores con nombres de tablas y campos
      [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //esto codifica para que no tenga errores de acentos
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
          );
  } catch (PDOException $e) {
      echo 'No se pudo conectar a la BD';
  }
  return $db;
}

 ?>
