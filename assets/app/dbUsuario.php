<?php
class dbUsuario{
public static function obtenerTodos($conexion){
    $usuarios = [];

    if(isset($conexion)){
        try{
            include_once('Usuario.php');
            $sql = "select * from blog.usuarios";
            $sentencia = $conexion -> prepare($sql);
            $sentencia ->execute();
            $resultado = $sentencia -> fetchAll();

            if(count($resultado)){
                foreach($resultado as $fila){
                $usuarios[] = new Usuario($fila['id'],$fila['nombre'],$fila['email'],$fila['password'],$fila['fecha_registro'],$fila['activo']);
                }
            }

        } catch(PDOException $ex){
            print "ERROR" . $ex -> getMessage();
        }

    }// fin del if

    return $usuarios;

}// fin del metodo

}// termina la clase dbUsuario

?>