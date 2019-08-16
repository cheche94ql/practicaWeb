<?php
class Usuario{
//atributos de la clase 
 private $id;
 private $nombre;
 private $email;
 private $password;
 private $fecha_registro;
 private $activo;

 public function __construct($id,$nombre,$email,$password,$fecha_registro,$activo){
     $this->id = $id;
     $this->nombre = $nombre;
     $this->email = $email;
     $this->password = $password;
     $this->fecha_registro = $fecha_registro;
     $this->activo = $activo;
}

 
function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setNombre($nombre) { $this->nombre = $nombre; }
function getNombre() { return $this->nombre; }
function setEmail($email) { $this->email = $email; }
function getEmail() { return $this->email; }
function setPassword($password) { $this->password = $password; }
function getPassword() { return $this->password; }
function setFecha_registro($fecha_registro) { $this->fecha_registro = $fecha_registro; }
function getFecha_registro() { return $this->fecha_registro; }
function setActivo($activo) { $this->activo = $activo; }
function getActivo() { return $this->activo; }






}// fin de la clase usuario
?>