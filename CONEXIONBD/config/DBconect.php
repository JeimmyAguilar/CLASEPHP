<?php

class Database
{

    public $db; //contraladores db 
    private static $dns = "mysql:host=localhost;dbname=prueba"; //url de la BD
    private static $user = "root"; //usuario de la conexión 
    private static $pass = "";  //contraseña del usuario 
    private static $instance; //instancia de la conexión

    public function __construct()
    {
        $this->db = new PDO(self::$dns, self::$user, self::$pass);
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
    public function insertar($nombre, $apellido, $edad, $email)
    {
        try {
            $conexion = Database::getInstance(); //obtiene la instancia de la Clase
            $query = $conexion->db->prepare("INSERT INTO persona (nombre, apellido, email, edad) VALUES (:nombre, :apellido, :email, :edad)");
            $query->execute(
                array(
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':email' => $email,
                    ':edad' => $edad
                )
            );

            return 1; //retorna 1 si fue exitoso

        } catch (PDOException $error) {
            return 0; // retporna 0 si falla
        }
    }
}
