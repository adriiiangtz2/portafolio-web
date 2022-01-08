<?php
use yii\bootstrap4\Html;
?>
<?php
$card = [
    (object)['nombre' => 'Html'    , 'icon'  => 'html',  'info' => 'Lenguaje de marcado de hipertexto' ],
    (object)['nombre' => 'CSS'    , 'icon'  => 'css',  'info' => 'Hoja de estilos en cascada' ],
    (object)['nombre' => 'JavaScript'    , 'icon'  => 'js',  'info' => ' Lenguaje de programación interpretado' ],
    (object)['nombre' => 'Php'    , 'icon'  => 'php',  'info' => 'Lenguaje de programacion de uso general' ],
    (object)['nombre' => 'Yii Framework'    , 'icon'  => 'yii',  'info' => 'Framework orientado a objetos' ],
    (object)['nombre' => 'Mysql'    , 'icon'  => 'mysql',  'info' => 'Sistema de gestión de bases de datos relacionales' ],
    (object)['nombre' => 'Visual Code'    , 'icon'  => 'visualcode',  'info' => 'Editor de codigo fuente' ],
    (object)['nombre' => 'Git Hub'    , 'icon'  => 'git',  'info' => 'Sistema de control de versiones git' ],
    (object)['nombre' => 'Office'    , 'icon'  => 'office',  'info' => 'Paqueteria Office, Programas informaticos' ],
];
?>
<div class="row">
    <?php foreach ($card as $cards) { ?>
    <div class="col-md-3" style="padding:10px;">
        <div class="conteiner-skills">
            <div class="iconos">
                <?= Html::img("/img/iconos/{$cards->icon}.png", ['style' => 'width:70px;']) ?>
                <br>
                <h5><b><?= $cards->nombre ?></b></h5>
            </div>
            <div class="info-icon">
                <p><?= $cards->info ?></p>
            </div>
        </div>

    </div>
    <?php } ?>
</div>