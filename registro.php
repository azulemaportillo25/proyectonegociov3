<?php
    echo <<<_UNO
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Página de Artesanías en Madera</title>
                <script src='node_modules/jquery/dist/jquery.min.js'></script>
                <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
                <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
                <script src='javascript.js'></script>
                <link rel="stylesheet" href="colors.css">
           </head>
           <body class='colorpagina'>
_UNO;
    echo <<<_DOS
                <div data-role='header' id="encabezado">
                    <div class="columns">
                        <div class="column">
                            <div class="columns is-mobile">
                                <div class="column is-11 is-offset-6">
                                    <figure class="image is-128x128"> <img src="imagenes/imagen24.jpg" class="imagen"></figure>
                                </div>
                            </div>
                        </div>
                        <div class="column letra">
                            <p class=" has-background-danger-dark title is-1 has-text-link is-italic has-text-centered">Artesanías en Madera</p>
                        </div>
                        <div class="column">
                            <div class="columns is-mobile">
                                <div class="column is-4 is-offset-1">
                                    <figure class="image is-128x128"> <img src="imagenes/imagen29.jpg" class="imagen"> </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <!--menu-->
                <div class="notification is-danger">
                   <nav class="breadcrumb is-medium is-centered" aria-label="breadcrumbs">
                      <ul>
                         <li><a class="has-text-primarys has-text-dark" href="#">Artesanías en Madera:</a></li>
                         <li><a class="has-text-primarys has-text-dark" href="paginainicial.php">Inicio</a></li>
                      </ul>
                   </nav>
                </div>
                <br>

                <h3 class="subtitle is-3 has-text-black letra">Registrate en:</h3>

                <!--formulario para registrarse-->
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8 centrarCar">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child notification is-primary centrado">
                                    <form action="login.php" method="post">
                                        <label class="has-text-black" for="usuario">Nombre de Usuario:</label>
                                        <input id="usuario" class="input is-rounded is-danger" type="text" name="usuario">
                                        <br>
                                        <br>
                                        <label class="has-text-black" for="password">Contraseña:</label>
                                        <input class="input is-rounded is-danger" type="text" id="password" name="password">
                                        <br>
                                        <br>
                                        <div class="centrado">
                                            <button  type="submit" class="button is-link is-outlined">Guardar datos</button>
                                        </div>
                                    </form>
                                    <br>

                                    <h4 class="subtitle is-4 has-text-black letra  is-italic has-text-link">Tipos de usuario:</h4>

                                    <div class="content">
                                       <h6>Clientes: cliente2020 </h6>
                                       <h6>Administrador</h6>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div> 

_DOS;
    echo <<<_TRES
                <!--Pie de pagina-->
                <footer class="footer" id="piepag">
                    <div class="content has-text-centered">
                        <div class="columns is-gapless is-multiline is-mobile has-text-black">
                            <div class="column">Se brinda información de:</div>
                        </div>
                        <div class="columns is-mobile">
                            <div class="column is-1 is-offset-3 has-text-black">
                                <img src="imagenes/contacto.png" class="icon">
                                <p>Contacto:</p>
                            </div>
                            <div class="column is-4 is-offset-3 has-text-black">
                                <p>Azulema Portillo Laparra</p>
                            </div>
                        </div>
                        <div class="columns is-mobile">
                            <div class="column is-1 is-offset-3 has-text-black">
                                <img src="imagenes/telefono.jpg" class="icon">
                                <p>Telefono:</p>
                            </div>
                            <div class="column is-4 is-offset-3 has-text-black">
                                <p>983-211-1951</p>
                            </div>
                        </div>
                        <div class="columns is-mobile">
                            <div class="column is-1 is-offset-3 has-text-black">
                                <img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon img-fluid" alt="Responsive image">
                                <p>Correo:</p>
                            </div>
                            <div class="column is-4 is-offset-3 has-text-black">
                                <p>portilloazulema@gmail.com</p>
                           </div>
                        </div>
                        <div class="columns is-gapless is-multiline is-mobile">
                            <div class="column has-text-black">Hecho en México.</div>
                        </div>
                        <div class="columns is-gapless is-multiline is-mobile">
                            <div class="column has-text-black">Carrera de Programación en la Preparatoria Centro de Bachillerato Tecnológico Industrial y de Servicios no.253 "Miguel Hidalgo y Costilla".</div>
                        </div>
                    </div>
                </footer>

                <!--Pie de pagina 2-->
                <footer class="footer" id="piepag2">
                    <div class="columns is-gapless is-multiline is-mobile">
                        <div class="column has-text-black">
                            <!--link de facebook-->
                            <a href="https://m.facebook.com/"><img src="imagenes/facebook.png" class="icon2"></a>
                        </div>
                        <div class="column has-text-black">
                            <!--link de Gmail-->
                           <a href="https://www.google.com/intl/es/gmail/about/"><img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon2"></a>
                        </div>
                        <div class="column has-text-black">
                            <!--link de Instagram-->
                            <a href="https://www.instagram.com/"><img src="imagenes/logotipo-instagram_1045-436.jpg" class="icon2"></a>    
                        </div>
                        <div class="column has-text-black">
                            <!--link de Twitter-->
                            <a href="https://twitter.com/login?lang=es"><img src="imagenes/twitter.png" class="icon2"></a>
                        </div>
                        <div class="column has-text-black">
                            <!--link de spotify-->
                            <a href="https://www.spotify.com/pe/"><img src="imagenes/spot.png" class="icon2"></a>
                        </div>
                        <div class="column has-text-black">
                            <!--link de youtube-->
                            <a href="https://www.youtube.com/"><img src="imagenes/youtube.png" class="icon2"></a>
                        </div>
                    </div>
                </footer>
_TRES;

   echo <<<_CUATRO
            </body>
        </html>
_CUATRO;
?>

?>