<?php 
    include_once("BDconect.php");
    $datos = isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['edad']) && isset($_POST['categoria']) && isset($_POST['marcaCoche']) && isset($_POST['modelo']) && isset($_POST['numeroCompetidor']);
    
    $noVacios= $_POST['nombres'] !== "" && $_POST['apellidos'] !== "" && $_POST['edad'] !== "" && $_POST['categoria'] !== "" && $_POST['marcaCoche'] !== "" && $_POST['modelo'] !== "" && $_POST['numeroCompetidor'] !== "";
    
    switch($datos && $noVacios){
    case true:
                $nombres = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];
                $edad = $_POST['edad'];
                $categoria = $_POST['categoria'];
                $marcaCoche = $_POST['marcaCoche'];
                $modelo = $_POST['modelo'];
                $numeroCompetidor = $_POST['numeroCompetidor'];
        
                $conexion = new Database;
                $repetido = $conexion->db->query("SELECT id FROM usuarios WHERE numeroCompetidor=$numeroCompetidor");
                $numeroDeFilas = $repetido->rowCount();
                if ($numeroDeFilas <= 0) {
                $confirm = $conexion->insertar($nombres, $apellidos, $edad, $categoria, $marcaCoche, $modelo, $numeroCompetidor);
        
            }
            else {
                $confirm = 3;
            }     
            break;
    case false:
        $confirm = 2; //uno o mas campos estan vacios	
    }

    

    header('location: ../index.php?confirm='.$confirm)
?>