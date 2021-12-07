<?php
    require 'consultas.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/alumnos.css">

    <title>Biblioteca Bicentenario</title>
 </head>
 <body>
    <!-- Navigation - Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">  
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../prestamoLibro.php">Prestamo</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../CRUDalumnos.html">Alumnos</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../CRUDlibros.html">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controlL.html">Control de Libros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
            
    <!-- Page Content -->
            <div class="container">
                <center><h1 class="mt-4" >Consulta de Alumnos</h1></center>
                <center><p>Alumnos registrados en el sistema :D.</p></center>
            </div>
            <!-- TABLA DONDE SE MUESTRAN LOS ALUMNOS REGISTRADOS-->
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Numero de Control</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Grado</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Telefono</th>
                </tr>
                </thead>
                <tbody id="datos">
                    <?php
                        foreach ($consulta as $row){?>
                    <tr>
                        <td><?php echo $row['numCon']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apeMat']; ?></td>
                        <td><?php echo $row['apePat']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['grado']; ?></td>
                        <td><?php echo $row['grupo']; ?></td>
                        <td><?php echo $row['telAlu']; ?></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>

    <!-- /.container -->
 </body>
 </html>   