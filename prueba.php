<?php

$dsn="mysql:dbname=proyectoCafe;host=127.0.0.1;port=3306";
$usuario='root';
$pass='';

$db= new PDO($dsn,$usuario,$pass);

try {
    $conex = new PDO('mysql:host=localhost;dbname=proyectocafe', 'root', '');
    // set the PDO error mode to exception
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT into Productos (nombreProducto,descripcion,precio,stock,categoria,foto) VALUES ('Descaffeinato','dfaeddd',123,1234,'descafeinado','foto')";
$conex->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


 ?>
