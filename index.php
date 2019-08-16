<?php
include_once 'assets/app/conexion.php';
include_once 'assets/app/dbUsuario.php';

Conexion :: abrir_conexion();

$usuarios = dbUsuario :: obtenerTodos(Conexion :: obtener_conexion());
echo count($usuarios);
Conexion :: cerrar_conexion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- <a href="#" class="btn btn-primary"> botoon</a> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
            <!-- <div class="container"> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                        </ul>        
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Iniciar secion <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Registro</a>
                                </li>
                                
                        </ul>        
                </div>
            <!-- </div> -->
    </nav>  
    <div class="container">
        
        <div class="jumbotron my-2">
            <h1> esta es la pagina web </h1>
            <p>este es la parte del parrafo</p>
        </div>
        
    </div> 
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-search"></i> Busqueda</div>
                            <div class="card-body">
                                
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" id="a" aria-describedby="emailHelp" placeholder="cual es tu Busqueda">
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                </div>
                                <div class="form-group">
                                         <button type="submit" class="btn btn-secondary">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-search"></i> filtro</div>
                            <div class="card-body">
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                        <div class="col-md-12">
                            <div class="card" >
                                <div class="card-header">
                                    <i class="fas fa-search"></i> archivo</div>
                                <div class="card-body">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-clock"></i> Ultimas entradas</div>
                    
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>todavia no hay entradas</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Footer -->
    
    <!-- <footer class="page-footer font-small" style="background-color: blue">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
    </footer> -->
         
          
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>