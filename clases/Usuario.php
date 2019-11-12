<?php
 abstract class Usuario
{
  private $nombre;
  private $email;
  private $password;
  private $avatar;
  private $esadmin;

  public function _contruct(string $nombre, string $email, string $password, string $avatar, booleans $esadmin){

   $this->setNombre($nombre);
   $this->setEmail($email);
   $this->setPassword($password);
   $this->setAvatar($avatar);
   $this->setEsadmin($esadmin);

  }
  public function setNombre(string $nombre){
    $this->nombre=$nombre;
  }
  public function setEmail(string $email){
    $this->email=$email;
  }
  public function setPassword(string $password){
    $this->password=$password;
  }
  public function setAvatar(string $avatar){
    $this->avatar=$avatar;
  }



  public function getnombre(){
    return $this->nombre;
  }
  public function getemail(){
    return $this->email;
  }
  public function getpassword(){
    return $this->password;
  }
  public function getavatar(){
    return $this->avatar;
  }
}
 ?>
