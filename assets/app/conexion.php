<?php

class Conexion{

private static $conexion;

public static function abrir_conexion(){
    if(!isset(self::$conexion)){
        
        try{
            
            include_once('assets/app/config.php');
            self::$conexion = new PDO("mysql:host = $nombre_servidor; dbname = $nombre_base_datos;",$nombre_usuario,$password);
            self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexion -> exec("SET CHARACTER SET utf8");
            print "conexion abierta" . "<br>";
        }catch(PDOException $ex){
            print "ERROR: " . $ex-> getMessage() . "<br>";
            die();
        }

    }//fin del if 
}// fin del metodo abrir conexion

public static function cerrar_conexion(){
    if(isset(self::$conexion)){
        self::$conexion = null;
        print "conexion cerrada";
    }//fin del if 
}

public static function obtener_conexion(){
    if(isset(self::$conexion)){
        return self::$conexion;

    }//fin del if 
}

}//  fin de la clase

?>