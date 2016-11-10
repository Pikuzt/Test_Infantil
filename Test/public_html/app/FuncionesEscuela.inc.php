<?php

class FuncionesEscuela{
    public static function Mostrar ($conexion){
        
        $POOEscuela = array();
        if (isset($conexion)){
            try {
                include_once 'POOEscuela.inc.php';
                
                $sql = "SELECT Escuela.nombreEsc,Domicilio.calleEsc,Domicilio.colEsc,Domicilio.numero, Escuela.director,Escuela.zona, Escuela.claveEsc,Escuela.sector 
                       FROM Domicilio
                       INNER JOIN Escuela
                       ON Domicilio.idEscuela = Escuela.idEscuela";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia ->fetchAll();
                
                if (count($resultado)){
                    foreach ($resultado as $fila){
                        $POOEscuela = new POOEscuela(
                                $fila ['nombreEsc'],
                                $fila ['calleEsc'],
                                $fila ['colEsc'],
                                $fila ['numero'],
                                $fila ['director'],
                                $fila ['zona'],
                                $fila ['claveEsc'],
                                $fila ['sector']);
                        
                    }
                }else {
                    print 'No hay  Registros de escuela.';

                }
                
                
                
            } catch (PDOException $ex) {
                
            }
        }
        return $POOEscuela;
    }
    
    public static function InsertarEntrada($conexion, $Escuela){
        $insertada = false;
        if (isset($conexion)){
            try {
                $sql=" INSERT INTO Escuela ()";
                
                
            } catch (PDOException $ex) {
                
            }
            
        }
    }
}
