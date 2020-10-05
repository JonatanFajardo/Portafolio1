<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
?>

<head>
    <link rel="stylesheet" href="assets/css/ilustracion.css">
    <title>Ilustracion</title>
</head>

<body>


    <!--    <div class='container'>
        <div class='row'>
            <div class='col'>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam obcaecati aut nostrum repellendus tempora omnis dolores, neque modi! Exercitationem natus voluptas, velit quaerat laudantium porro dicta vitae sit ad explicabo. <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae qui rerum ipsa voluptate sed! Nisi aperiam illum sit natus? Aspernatur saepe magnam officia. Architecto eaque placeat laborum non tenetur molestiae.
            </div>
        </div>
    </div> -->


    <div class="wellcome">
        <div class='container-full'>
            <div class='row'>
                <div class='col'>
                    <h1 class="title">DISEÑO GRAFICO</h1>
                    <p> <a href="index.php">Home</a>/Ilustraciòn </p>
                </div>

                <div class="waves">
                    <div class="waves-item" style="height: 150px; overflow: hidden;">
                        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                            <path d="M0.00,49.98 C220.37,45.88 280.19,146.53 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                                style="stroke: none; fill: #f2f2f2;"></path>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="descripcion">
        <div class='container-full'>
            <div class="row">
                <!--   <div class="waves-box">
          
        </div> -->
            </div>
            <div class='row mc'>


                <div class='col-6 text'>
                    <div class="item header">
                        <img alt="cargando..!" src="assets/img/Desarrollo_web Logo.png">
                    </div>
                </div>

                <div class='col-6 '>
                    <h3>Diseño Grafico</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores aperiam accusamus minima
                        perferendis
                        dolore tempore alias? Explicabo autem tenetur tempora.
                    </p>
                </div>

                <div class="waves z-index">
                    <img class="waves-item" src="assets/img/footAbaut.svg" alt="">
                </div>
            </div>

        </div>
    </div>


    <section id="proyect">
        <div class="container">
            <div class="title">
                <h2 class="text-center">Proyectos Realizados</h2>
            </div>

            <div id="category-buttons">
                <button class="btn active" onclick="filter('all')"> Show all</button>
                <button class="btn" onclick="filter('Ilustraciones')"> Ilustraciones</button>
                <button class="btn" onclick="filter('Tarjetas')">Tarjetas</button>
                <button class="btn" onclick="filter('Publicidad')">Publicidad</button>
                <button class="btn" onclick="filter('Otros')">Otros</button>
            </div>

            <!-- Portfolio Gallery Grid -->
            <div class="row ">

                <div class="cards-item Ilustraciones">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Ilustracion_4.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Trabajando en la costa</h4>
                        <p class="card-text">Ilustracion</p>
                    </div>
                </div>

                <div class="cards-item Publicidad">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Publicida_1.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Trabajando en la costa</h4>
                        <p class="card-text">Publicidad, Redes Sociales</p>
                    </div>
                </div>

                <div class="cards-item Tarjetas">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Tarjeta_1.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Nutricionista</h4>
                        <p class="card-text">Tarjeta</p>
                    </div>
                </div>

                <div class="cards-item Ilustraciones">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Ilustracion_1.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Coronavirus</h4>
                        <p class="card-text">Ilustracion</p>
                    </div>
                </div>

                <div class="cards-item Publicidad">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Publicida_2.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Classic</h4>
                        <p class="card-text">Publicidad, Redes Sociales</p>
                    </div>
                </div>

                <div class="cards-item Tarjetas">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Tarjeta_2.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Servicio de taxi</h4>
                        <p class="card-text">Tarjeta</p>
                    </div>
                </div>

                <div class="cards-item Ilustraciones">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Ilustracion_3.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Personaje con fondo de madera</h4>
                        <p class="card-text">Ilustracion</p>
                    </div>
                </div>

                <div class="cards-item Publicidad">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Publicida_3.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Retro</h4>
                        <p class="card-text">Publicidad, Redes Sociales</p>
                    </div>
                </div>

                <div class="cards-item Tarjetas">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Tarjeta_3.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Retro</h4>
                        <p class="card-text">Tarjeta</p>
                    </div>
                </div>

                <div class="cards-item Ilustraciones">
                    <div class="card-header">
                        <img src="assets/img/DisenoGrafico/Ilustracion_2.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Cumpleaños</h4>
                        <p class="card-text">Ilustracion</p>
                    </div>
                </div>













            </div>
        </div>

    </section>



    <?php
include 'footer.php';
?>

</body>

</html>