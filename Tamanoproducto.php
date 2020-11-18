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
                        <li><a class="has-text-primarys has-text-dark" href="Productos.php">Nombre del Producto</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="Direccioncliente.php">Dirección</a></li>
                    </ul>
                </nav>
            </div>
            <br>
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
                                    <p class="title centrado">"Ingrese el Tamaño de su Producto de Artesanías en Madera que le guste"</p>
                                    <br>
        
                                    <form method="post" action="insertartamano.php">
                                        <div class="centrado">
                                            <label class="label" for="nombre_tamano">Nombre del Tamaño del Producto</label>
                                           <input class="input is-rounded" type="text" placeholder="Rounded input" id="nombre_tamano" name="nombre_tamano">
                                        </div><br>
                                       <button type="submit"class="button is-danger is-outlined">Guardar datos</button>
                                        <button type="button" class="button is-link is-outlined"><a href="Direccioncliente.php">Su Dirección</a></button>
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
            <h5 class="letra centrado subtitle is-3 has-text-white has-background-primary-dark">Secciones de Tamaños Artesanía en Madera</h5>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Objetos</p>
            <br>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen1.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$250</p>
                                    <p>Tamaño Mediano:</p><p>$160</p>
                                    <p>Tamaño pequeño:</p><p>$100</p>
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
                                    <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                       <p>Tamaño Grande:</p><p>$360</p>
                                       <p>Tamaño Mediano:</p><p>$250</p>
                                       <p>Tamaño pequeño:</p><p>$150</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                <p>Tamaño Grande:</p><p>$450</p>
                                <p>Tamaño Mediano:</p><p>$390</p>
                                <p>Tamaño pequeño:</p><p>$170</p>
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
                                    <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$260</p>
                                        <p>Tamaño Mediano:</p><p>$130</p>
                                        <p>Tamaño pequeño:</p><p>$100</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$460</p>
                                    <p>Tamaño Mediano:</p><p>$250</p>
                                    <p>Tamaño pequeño:</p><p>$130</p>
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
                                   <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$460</p>
                                        <p>Tamaño Mediano:</p><p>3250</p>
                                        <p>Tamaño pequeño:</p><p>$250</p>
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
                                    <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$330</p>
                                        <p>Tamaño Mediano:</p><p>$230</p>
                                        <p>Tamaño pequeño:</p><p>$110</p>
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
                                    <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                               <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$360</p>
                                        <p>Tamaño Mediano:</p><p>$250</p>
                                        <p>Tamaño pequeño:</p><p>$150</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$550</p>
                                    <p>Tamaño Mediano:</p><p>$430</p>
                                    <p>Tamaño pequeño:</p><p>$250</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$590</p>
                                    <p>Tamaño Mediano:</p><p>$400</p>
                                    <p>Tamaño pequeño:</p><p>$320</p>
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
                                   <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$580</p>
                                        <p>Tamaño Mediano:</p><p>$480</p>
                                        <p>Tamaño pequeño:</p><p>$340</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$330</p>
                                    <p>Tamaño Mediano:</p><p>$280</p>
                                    <p>Tamaño pequeño:</p><p>$190</p>
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
                                   <span>Tamaños</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Tamaño Grande:</p><p>$380</p>
                                        <p>Tamaño Mediano:</p><p>$270</p>
                                        <p>Tamaño pequeño:</p><p>$160</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$410</p>
                                    <p>Tamaño Mediano:</p><p>$320</p>
                                    <p>Tamaño pequeño:</p><p>$160</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$500</p>
                                    <p>Tamaño Mediano:</p><p>$430</p>
                                    <p>Tamaño pequeño:</p><p>$210</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$490</p>
                                    <p>Tamaño Mediano:</p><p>$280</p>
                                    <p>Tamaño pequeño:</p><p>$210</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$300</p>
                                    <p>Tamaño Mediano:</p><p>$200</p>
                                    <p>Tamaño pequeño:</p><p>$150</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p class="mb-0">Tamaño Grande:</p><p>$590</p>
                                    <p class="mb-0">Tamaño Mediano:</p><p>$480</p>
                                    <p class="mb-0">Tamaño pequeño:</p><p>$290</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                <p>Tamaño Grande:</p><p>$390</p>
                                <p>Tamaño Mediano:</p><p>$280</p>
                                <p>Tamaño pequeño:</p><p>$140</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$590</p>
                                    <p>Tamaño Mediano:</p><p>$410</p>
                                    <p>Tamaño pequeño:</p><p>$300</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$340</p>
                                    <p>Tamaño Mediano:</p><p>$290</p>
                                    <p>Tamaño pequeño:</p><p>$120</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$410</p>
                                    <p>Tamaño Mediano:</p><p>$250</p>
                                    <p>Tamaño pequeño:</p><p>$130</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$480</p>
                                    <p>Tamaño Mediano:</p><p>$330</p>
                                    <p>Tamaño pequeño:</p><p>$290</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$410</p>
                                    <p>Tamaño Mediano:</p><p>$380</p>
                                    <p>Tamaño pequeño:</p><p>$190</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$430</p>
                                    <p>Tamaño Mediano:</p><p>$380</p>
                                    <p>Tamaño pequeño:</p><p>$170</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$510</p>
                                    <p>Tamaño Mediano:</p><p>$340</p>
                                    <p>Tamaño pequeño:</p><p>$170</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$590</p>
                                    <p>Tamaño Mediano:</p><p>$380</p>
                                    <p>Tamaño pequeño:</p><p>$290</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$310</p>
                                    <p>Tamaño Mediano:</p><p>$230</p>
                                    <p>Tamaño pequeño:</p><p>$110</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$440</p>
                                    <p>Tamaño Mediano:</p><p>$370</p>
                                    <p>Tamaño pequeño:</p><p>$290</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$390</p>
                                    <p>Tamaño Mediano:</p><p>$280</p>
                                    <p>Tamaño pequeño:</p><p>$190</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$550</p>
                                    <p>Tamaño Mediano:</p><p>$460</p>
                                    <p>Tamaño pequeño:</p><p>$170</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$450</p>
                                    <p>Tamaño Mediano:</p><p>$340</p>
                                    <p>Tamaño pequeño:</p><p>$270</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$350</p>
                                    <p>Tamaño Mediano:</p><p>$290</p>
                                    <p>Tamaño pequeño:</p><p>$170</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$310</p>
                                    <p>Tamaño Mediano:</p><p>$270</p>
                                    <p>Tamaño pequeño:</p><p>$160</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$210</p>
                                    <p>Tamaño Mediano:</p><p>$170</p>
                                    <p>Tamaño pequeño:</p><p>$110</p>
                                </div>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$360</p>
                                    <p>Tamaño Mediano:</p><p>$240</p>
                                    <p>Tamaño pequeño:</p><p>$190</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$300</p>
                                    <p>Tamaño Mediano:</p><p>$2300</p>
                                    <p>Tamaño pequeño:</p><p>$180</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$300</p>
                                    <p>Tamaño Mediano:</p><p>$270</p>
                                    <p>Tamaño pequeño:</p><p>$150</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$210</p>
                                    <p>Tamaño Mediano:</p><p>$170</p>
                                    <p>Tamaño pequeño:</p><p>$110</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$360</p>
                                    <p>Tamaño Mediano:</p><p>$250</p>
                                    <p>Tamaño pequeño:</p><p>$150</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$310</p>
                                    <p>Tamaño Mediano:</p><p>$210</p>
                                    <p>Tamaño pequeño:</p><p>$130</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$340</p>
                                    <p>Tamaño Mediano:</p><p>$310</p>
                                    <p>Tamaño pequeño:</p><p>$110</p>
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
                                <span>Tamaños</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tamaño Grande:</p><p>$290</p>
                                    <p>Tamaño Mediano:</p><p>$240</p>
                                    <p>Tamaño pequeño:</p><p>$130</p>
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