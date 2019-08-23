<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aerosoles</title>
        <link rel="stylesheet" href="../css/bulma.min.css">
    </head>
    <body>
        <!-- NAVEGADOR SUPERIOR-->
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                <img src="../media/saphirus-logo.png" width="112" height="28">
                </a>

                <!-- NAVEGADOR RESPONSIVE -->

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Inicio
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Productos
                        </a>

                        <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Aerosoles
                        </a>
                        <a class="navbar-item">
                            Difusores
                        </a>
                        <a class="navbar-item">
                            Textiles
                        </a>
                        <a class="navbar-item">
                            Mini
                        </a>
                        <a class="navbar-item">
                            Route 66
                        </a>
                        <a class="navbar-item">
                            Difusores Premium
                        </a>
                        <a class="navbar-item">
                            Sensaciones
                        </a>
                        <a class="navbar-item">
                            Aceites
                        </a>
                        <!--<hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>-->
                        </div>
                    </div>

                    <a class="navbar-item">
                        Contacto
                    </a>
                    
                </div>
            
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- TABLA -->

        <table class="table">
            <thead>
                <tr>
                    <th><abbr title="id"></abbr>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                
                <!-- CONEXION A LA BASE PARA MOSTRAR LOS DETALLES DE LOS PRODUCTOS Y SU STOCK -->
                <?php 
                    require_once "dbconexion.php";
                    
                    $query = "SELECT * FROM aceite ";
                    $result = mysqli_query($link, $query);

                    while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                ?>

                <tr>
                    <th><?php echo $reg['idaceite'];?></th>
                    <td><?php echo $reg['nombreaceite'];?></td>
                    <td><?php echo $reg['descripcionaceite'];?></td>
                    <td><?php echo $reg['cantidadaceite'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>