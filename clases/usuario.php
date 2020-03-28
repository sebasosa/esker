<?php
public interface Usuario {
  //Atributos
  private $nombre;
  private $id;
  private $apellido;
  private $contraseña;
  private $email;
  // Metodos
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function setId($id){
    $this->id= $id;

  }
  public function setContraseña($pass){
    $this->contraseña = $pass;
  }
  public function setEmail($email){
    $this->email=$email;
  }
}
 ?>
