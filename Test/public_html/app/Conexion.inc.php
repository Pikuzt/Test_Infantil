<?php

class Conexion {

    private static $conexion;

    public static function AbrirConexion() {
        if (!isset(self::$conexion)) {
            try {
                include_once 'config.inc.php';
                self::$conexion = new PDO("mysql:host = $NombreServidor; dbname=$NombreBD", $NombreUsuario, $password);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion->exec("SET CHARACTER SET utf8");

                print 'Conexion abierta';
            } catch (PDOException $ex) {
                print 'ERROR:' . $ex->getMessege() ."<br>";
                die();
            }
        }
    }

    public static function CerrarConexion() {
        if (isset(self::$conexion)) {
            self::$conexion = null;
            print 'Conexion cerrada';
        }
    }

    public static function ObtenerConexion() {
        return self::$conexion;
    }

}
