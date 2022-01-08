<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="contenedor-informacion-principal" style="position:relative;">
    <div class="contenedor-top">
        <div class="contenedor-info">
            <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
            <div class="row">
                <div class="contenedor-central">
                    <div class="foto-perfil">
                        <img src="/img/Encabezado/perfil.jpg" alt="100px" style=" width:200px;">
                    </div>
                    <div class="infos">
                        <h5><b>!Hola</b> Mi nombre es </h5> <br>
                        <h1><b>Adrian Gutierrez</b></h1><br>
                        <h5>Programador jr. Desarrollador web en proceso...</h5><br>
                        <div>
                            <button style="background: rgb(5, 218, 218);border: none;border-radius: 0px 10px 0px 10px;">
                                <a style="color:black;text-decoration: none;" href="cv">Curriculum <i
                                        class="fas fa-download"></i></a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-anima">
    </div>
    <div class="contenedor-anima">
    </div>
</div>
<!-- hola -->
<div id="acerca"></div>

<div class="contenedor-secundario">
    <div class="info-personal" style="">
        <div class="contendor-personal">
            <b>Sobre mi</b>
            <p>
                Soy estudiante de la carrera de Ing. Sistemas Computaciones, actualmente mi enfoque va hacia el
                Desarrollo de Aplicaciones web . Tengo como
                meta a largo plazo poder ser un profesionista en el área de
                Desarrollo web y me gustaria especializarme en un area en específico (front-end o back-end). Cabe
                destacar que mi principal motivo u objetivo a mediano plazo es adquirir
                conocimiento de manera práctica en el área laboral y así poner en práctica lo
                aprendido. <br> <br>
                <b>Hobbies</b>
            <ul style="display: flex;justify-content: space-evenly;">
                <li>Tocar Guitarra <i class="fas fa-guitar"></i></li>
                <li>Escuchar musica <i class="fab fa-spotify"></i></li>
                <li>Consumir Cursos <i class="fas fa-book-reader"></i></li>
                <li>Video Juegos <i class="fas fa-gamepad"></i></li>
            </ul>
            </p>
        </div>

    </div>
</div>
<div id="skills"></div>
<div class="contenedor-secundario">
    <div class="row" style="background: #ffffffe0; width:80%;padding:20px;">
        <div class="contenedor-skills-titulo">
            <h2>Skills</h2>
        </div>
        <div>
            <?= $this->render('skills') ?>
        </div>
    </div>
</div>

<div id="proyectos"></div>

<div class="contenedor-secundario">
    <div class="" style="background: #ffffffe0; width:80%;padding:20px;">
        <div class="contenedor-proyectos-titulo">
            <h2>Proyectos</h2>
        </div>
        <div>
            <?= $this->render('proyectos') ?>
        </div>
    </div>
</div>

<div id="contacto"></div>
<footer class="footer" id="contacto">
    <div class="iconos-footer">
        <a href="https://www.facebook.com/adrian.gutierrezmurillo" target="_black"><i
                class="foicon  fab fa-facebook-square"></i></a>
        <!-- <a href="https://www.youtube.com/" target="_black"><i class="foicon fab fa-youtube"></i></a> -->
        <a href="https://github.com/adriiiangtz2" target="_black"> <i class="foicon  fab fa-github"></i></a>
        <!-- <a href="https://twitter.com/?lang=es" target="_black"><i class="foicon  fab fa-twitter-square"></i></a> -->
    </div>
    <div style="    text-align: center;
    color: aquamarine;
    background: #353535;">
        <h6>
            Escribeme <i class="fas fa-envelope"></i> <b> adriiiangtz@gmail.com</b><br>
            by Adrian Gutierrrez Murillo
        </h6>


    </div>
</footer>