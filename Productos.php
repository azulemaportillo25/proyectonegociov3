<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

    echo <<<_UNO
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Página de Artesanías en Madera</title>
            <link rel="stylesheet" href="colors.css">
            <script src='node_modules/jquery/dist/jquery.min.js'></script>
            <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
            <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
            <script src='javascript.js'></script>
        </head>
        <body class='colorpagina'>
_UNO;
 echo <<<_DOS
            <div data-role='header' id="encabezado">
                <div class="columns">
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-6">
                                <figure class="image is-128x128"><img src="imagenes/imagen24.jpg" class="imagen"></figure>
                            </div>
                         </div>
                    </div>
                    <div class="column letra">
                        <p class=" has-background-danger-dark title is-1 has-text-link is-italic has-text-centered">Artesanías en Madera</p>
                    </div>
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-4 is-offset-1">
                                <figure class="image is-128x128"><img src="imagenes/imagen29.jpg" class="imagen"></figure>
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
                        <li><a class="has-text-primarys has-text-dark" href="Secciones.php">Secciones Artesanías en Madera</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="Tamanoproducto.php">Nombre del Tamaños de los Producto</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="Direccioncliente.php">Dirección</a></li>
                    </ul>
                </nav>
            </div>
            <br>
_DOS;
    echo <<<_FORM
            <!--Card--> 
            <div class="centrado centrarCar">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8 centrarCar">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                               <article class="tile is-child notification is-primary">
                                    <p class="title centrado">"Ingrese el Nombre de su Producto de Artesanías en Madera que le guste"</p>
                                    <br>
        
                                    <form method="post" action="insertarproducto.php">
                                        <div class="centrado">
                                            <label class="label" for="nombre_producto">Nombre del Producto</label>
                                           <input class="input is-rounded" type="text" placeholder="Rounded input" id="nombre_producto" name="nombre_producto">
                                        </div><br>
                                        <div class="centrado">
                                            <label class="label" for="nombre_producto2">Nombre del Producto</label>
                                           <input class="input is-rounded" type="text" placeholder="Rounded input" id="nombre_producto2" name="nombre_producto2">
                                        </div><br>
                                        <div class="centrado">
                                            <label class="label" for="nombre_producto3">Nombre del Producto</label>
                                           <input class="input is-rounded" type="text" placeholder="Rounded input" id="nombre_producto3" name="nombre_producto3">
                                        </div><br>
                                         <button type="submit"class="button is-danger is-outlined">Guardar datos</button>
                                        <button type="button" class="button is-link is-outlined"><a href="Tamanoproducto.php">Tamaños de los Productos</a></button>
                                    </form>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <br><br>

_FORM;

    echo <<<_TRES
            <h5 class="letra centrado subtitle is-3 has-text-white has-background-primary-dark">Secciones de los Nombres Artesanía en Madera</h5>
            <br>
            
            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Objetos</p>
            <br>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen1.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span>Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Lámpara de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                       <img src="imagenes/imagen7.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                       <p>Floreros de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen29.jpg" class="img-fluid imagen2" alt="Responsive image">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                <p>Barco de lámpara brillante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen8.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Sillas mesedora de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
           
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen16.jpg" class="imagen3">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span>Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cucharas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen28.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Mesedora de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen40.jpg" class="img-fluid imagen2" alt="Responsive image">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                               <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Cofre de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen37.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                               <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Taza de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen18.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Casa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Animales</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen21.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Garzas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen32.jpg" class="imagen4">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Caballo de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen5.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Porta cervilletas de un defín de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen9.jpg" class="imagen2">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Tucán de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen23.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Pez espada de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen36.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Colibrí de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagens11.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Elefante de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen41.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Búho de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen42.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p class="mb-0">Conejo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            
            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía Talladas</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen17.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Obrero de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen38.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Estatua de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen39.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Señor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagens6.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Flor talla de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen43.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Adorno de pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen44.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Adorno de una rosa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen45.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Flor de alcatraz tallada de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen46.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tigre de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen47.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Esfera de una flor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Juguetes</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen50.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Muñeca de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen13.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camión de carga de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen14.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camioneta de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen15.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camión de carga de polvo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen33.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Muñeco de cascanueces de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen34.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Robot de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen48.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Carrito con valero de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen49.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Oso de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            
            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Jardinería</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen31.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Troncos para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen27.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cajas para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen2.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tronco de madera para velas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen4.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Pozo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen51.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Casa para pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen24.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Triciclo de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen35.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Jarrón de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen52.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cajas de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
_TRES;

    echo <<<_CUATRO
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
_CUATRO;
    echo <<<_CINCO
        </body>
    </html>
_CINCO;

?>