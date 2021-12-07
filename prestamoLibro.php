<?php
    session_start();
    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location: login.html");
    }
?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/prestamos.css">

    <title>Biblioteca Bicentenario</title>
 </head>
 <body>
    <!-- Navigation - Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">  
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="prestamoLibro.php">Prestamo
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CRUDalumnos.html">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CRUDlibros.html">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="controlL.html">Control de Libros</a>
                    </li>
                    <?php
                        echo "<li class='nav-item'><a class='nav-link' href='php/salir.php'> Salir </a> </li>";
                    ?>
                </ul>
            </div>
        </div>
    </nav>
            
    <!-- Page Content -->
            <div class="container">
            <?php
            echo "<center><h1>BIENVENIDO AL CONTROL DE PRESTAMO DE LIBROS $usuario</h1></center>"; ?> 
                <center><p>Este es el apartado de registro de prestamo de libros :D.</p></center>
            </div>

            <div class="container">
                <div class="row justify-content-center pt-5 mt-5 m-1">
                    <div class="col-sm-8 col-md-6 col-xl-4 col-lg-5 formulario">
                        <!-- FORMULARIO -->
                        <form action="php/RegistrarLibroP.php" method="POST" name="registerLPform">
                            <div class="form-group text-center pt-3">
                                <h1 class="text-dark">REGISTRO</h1>
                            </div>
                            <div class="form group mx-sm-4 pt-3">
                                <input type="text-dark" class="form-control" name="fechaP" id="fechaP" placeholder="Fecha de Prestamo Año-Mes-Dia">
                            </div>
                            <div class="form group mx-sm-4 pt-3">
                                <input type="text-dark" class="form-control" name="fechaE" id="fechaE" placeholder="Fecha de Entrega Año-Mes-Dia">
                            </div>
                            <div class="form group mx-sm-4 pt-3">
                                <!--<input type="password" class="form-control" name="nCtrlAlu" id="nCtrlAlu" placeholder="Seleccionar Numero de Control de Alumno"> -->
                                <select class="form-control" name="numConA" id="numConA"> 
                                    <option value="0"class="text-white bg-dark" >Seleccione la Matricula del Alumno:</option>
                                    <?php
                                        $conexion=mysqli_connect("localhost","root","");
                                        mysqli_select_db($conexion,"dbbiblioteca") or die(mysqli_error());
                                        $query = $conexion -> query ("SELECT * FROM alumnos");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[numCon].'">'.$valores[numCon].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form group mx-sm-4 pt-3">
                                <!-- <input type="text" class="form-control" name="book" id="book" placeholder="Seleccionar Libro"> -->
                                <select class="form-control" name="nomL" id="nomL"> 
                                    <option value="0" class="text-white bg-dark" >Seleccione el Nombre del Libro:</option>
                                    <?php
                                        $conexion=mysqli_connect("localhost","root","");
                                        mysqli_select_db($conexion,"dbbiblioteca") or die(mysqli_error());
                                        $query = $conexion -> query ("SELECT * FROM libros");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[idL].'">'.$valores[titulo].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form group mx-sm-4 pt-3">
                                <button  type="submit" class="btn btn-block registrar" name="REGISTRAR">REGISTRAR</button> 
                            </div>
                            <!--
                            <div class="form-group text-center">
                                <span class=""><a href="#" class="registrar"></a>REGISTRARSE</a></span>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>

            <!-- JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- /.container -->
 </body>
 </html>   