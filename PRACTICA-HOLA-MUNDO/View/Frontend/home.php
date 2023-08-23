<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    $userId = $_SESSION['fname'];
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    </head>
    <body class="w3-light-grey">

    <!-- w3-content defines a container for fixed size centered content, 
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32"> 
    <h1><b>IT COMMUNITY CUNOC</b></h1>
    <p>De estudiantes programadores, para estudiantes programadores</p>
    </header>

    <!-- Grid -->
    <div class="w3-row">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
        <div class="w3-container">
        <h3><b>El Pensamiento Sistemico</b></h3>
        <h5>Aporte, Ing. Pedro Domingo<span class="w3-opacity"> Ago 23, 2023</span></h5>
        </div>

        <div class="w3-container">
        <p>El pensamiento sistémico, se define como la actitud del individuo o ser humano, dicha actitud se basa en la percepción que posee del mundo real en términos de un todo para realizar un análisis, comprender la realidad para luego accionar.</p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Seguir Leyendo »</b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">1</span></span></p>
            </div>
        </div>
        </div>
    </div>
    <hr>

    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
        <div class="w3-container">
        <h3><b>Cómo instalar Docker en Ubuntu</b></h3>
        <h5>Aporte, Marco Munguia<span class="w3-opacity"> Ago 23, 2023</span></h5>
        </div>

        <div class="w3-container">
        <p>Docker es una tecnología de código abierto que se utiliza para implementar aplicaciones a través de contenedores. Es una plataforma relativamente nueva, pero se actualiza constantemente y cuenta con una amplia comunidad de usuarios.</p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Seguir Leyendo»</b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
            </div>
        </div>
        </div>
    </div>

    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
        <div class="w3-container">
        <h3><b>Analizador Lexico con Automatas</b></h3>
        <h5>Aporte, Javier Vasquez y Emilio Maldonado<span class="w3-opacity"> Ago 23, 2023</span></h5>
        </div>

        <div class="w3-container">
        <p>Un autómata finito (AF) o máquina de estado finito es un modelo computacional que realiza cómputos en forma automática sobre una entrada para producir una salida.</p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Seguir Leyendo»</b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">8</span></span></p>
            </div>
        </div>
        </div>
    </div>
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- Introduction menu -->
    <div class="w3-col l4">
    <!-- About Card -->
    <div class="w3-card w3-margin w3-margin-top">
        <div class="w3-container w3-white">
        <h4><b>Bienvenido, <span class="w3-tag"> <?= $userId ?> </span></b></h4>
        <p>Id y enseñad a todos <a href="logout.php" class="btn btn-warning"> Logout</a></p>
        </div>
    </div><hr>
    
    <!-- Posts -->
    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
        <h4>Posts Populares</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
        <li class="w3-padding-16">
            <span class="w3-large"><b>Como ganar Compiladores sin morir en el Intento</b></span><br>
            <span>Aporte, Levi Hernandez</span>
        </li>
        <li class="w3-padding-16">
            <span class="w3-large"><b>Tus primeros pasos en Arduino</b></span><br>
            <span>Aporte, Oscar De Leon</span>
        </li> 
        <li class="w3-padding-16">
            <span class="w3-large"><b>Aplicaciones en un Fin de Semana con Kotlin</b></span><br>
            <span>Aporte, Marcos Aguare</span>
        </li>   
        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
            <span class="w3-large"><b>Documentacion formal para tus Proyectos</b></span><br>
            <span>Aporte, Daniel Morales</span>
        </li>  
        </ul>
    </div>
    <hr> 
    
    <!-- Labels / tags -->
    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
        <h4>Etiquetas Populares</h4>
        </div>
        <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">IT-GENERAL</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">1er Semestre</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">2do Semestre</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Open-Source</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Area Comun</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">5to Semestre</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">4to Semestre</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">3er Semestre</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">6to Semestre</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Compiladores 1</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Teoria de Sistemas 1</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IPC1</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DDD</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Discord</span>
        </p>
        </div>
    </div>
    
    <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Siguiente »</button>
    </footer>
    </body>
    </html>

    <?php
} else {
    header("Location: login.php");
    exit;
}
?>
