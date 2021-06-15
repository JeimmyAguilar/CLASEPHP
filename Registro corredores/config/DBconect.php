<?php 

    class Database{

        public $db; //controladores db
        private static $dns = "mysql:host=localhost;dbname=mcqueencars"; //url de la BD
        private static $user = "root"; //usuario de la conexión
        private static $pass = ""; //contraseña del usuario
        private static $instance; //instancia de la conexion

        public function __construct(){
            $this->db = new PDO(self::$dns, self::$user, self::$pass);
        }
        
        public static function getInstance(){
            if(!isset(self::$instance)){
                $object = __CLASS__;
                self::$instance = new $object;
            }
            return self::$instance;
        }

        public function insertar($nombres, $apellidos, $edad, $categoria, $marcaCoche, $modelo, $numeroCompetidor){

            try{
                $conexion = Database::getInstance(); //obtiene la instancia de la clase
                $query = $conexion->db->prepare("INSERT INTO usuarios(nombres, apellidos, edad, categoria, marcaCoche, modelo, numeroCompetidor) VALUES (:nombres, :apellidos, :edad, :categoria, :marcaCoche, :modelo, :numeroCompetidor)");
                $query->execute(
                    array(
                        ':nombres' => $nombres,
                        ':apellidos' => $apellidos,
                        ':edad' => $edad,
                        ':categoria' => $categoria,
                        ':marcaCoche' => $marcaCoche,
                        ':modelo' => $modelo,
                        ':numeroCompetidor' => $numeroCompetidor
                    )
                    ); 

                return 1; //retorna 1 si fue exitoso

            }catch(PDOException $error){
                return 0; //retorna 0 si falla

            }

        }


    }

?>