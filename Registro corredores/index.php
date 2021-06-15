<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro corredores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center">
        <div class="card col-md-7">
            <div class="card-header">
                inscripcion carrera
            <div>
            </div class="card-body">
                <?php 
                    if (isset($_GET['confirm'])){

                        if ($_GET['confirm'] === "0"){
                            echo '<div class="alert alert-danger" role="alert">Dato no ingresado</div>';
                        }
                        if ($_GET['confirm'] === "1"){
                            echo '<div class="alert alert-success" role="alert">Qshao</div>';
                        }
                        if ($_GET['confirm'] === "2"){
                            echo '<div class="alert alert-danger" role="alert">Uno o mas campos vacios</div>';
                        }
                             if ($_GET['confirm'] === "3"){
                                echo '<div class="alert alert-danger" role="alert">El numero de competidor ya esta registrado</div>';
                            }
                             //if ($_GET['confirm'] === "0")
                         
              }
                ?>
                <form action="./config/registro.php" method="POST">
                    <!--nombres-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                    </div>
                     <!--apellidos-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                    </div>
                     <!--edad-->
                    <div class="form-group">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
                    </div>
                     <!--categoria-->
                    <div class="form-group">
                        
                    <select class="form-control" id="categoria" name="categoria">
                    <option value="">Categoria</option>
                    <option class="texto_opcion" value="Amateur">Amateur</option>
                    <option class="texto_opcion" value="SemiSenior">SemiSenior</option>
                    <option class="texto_opcion" value="Senior">Senior</option>
                    </select>

                    </div>
                     <!--marcaCoche-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="marcaCoche" name="marcaCoche" placeholder="marcaCoche">
                    </div>
                     <!--modelo-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo">
                    </div>
                     <!--numeroCompetidor-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="numeroCompetidor" name="numeroCompetidor" placeholder="numeroCompetidor">
                    </div>
                     <!--boton-->
                    <button class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>