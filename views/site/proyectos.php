<?php
use yii\bootstrap4\Html;
?>
<?php
$card = [
    (object)['nombre' => 'Ecommerce (Red Store)'    , 'icon'  => 'eco3',  'info' => 'Este proyecto es un ecommerce elaborado con la ayuda de 3 compañeros de universidad , consiste en una tienda de ropa en linea , se manejan 3 roles (Superadmin , Aministrador, Usuario). Tiene un apartado de tarjetas y carrito de compras , favoritos etc.' ],
];
$tecnologias = [
    (object)['nombre' => 'Html'    , 'icon'  => 'html',  'info' => 'Lenguaje de marcado de hipertexto' ],
    (object)['nombre' => 'CSS'    , 'icon'  => 'css',  'info' => 'Hoja de estilos en cascada' ],
    (object)['nombre' => 'JavaScript'    , 'icon'  => 'js',  'info' => ' Lenguaje de programación interpretado' ],
    (object)['nombre' => 'Php'    , 'icon'  => 'php',  'info' => 'Lenguaje de programacion de uso general' ],
    (object)['nombre' => 'Yii Framework'    , 'icon'  => 'yii',  'info' => 'Framework orientado a objetos' ],
    (object)['nombre' => 'Mysql'    , 'icon'  => 'mysql',  'info' => 'Sistema de gestión de bases de datos relacionales' ],
    (object)['nombre' => 'Git Hub'    , 'icon'  => 'git',  'info' => 'Sistema de control de versiones git' ],
    
];
?>

<?php foreach ($card as $cards) { ?>
<div class="col-md-12" style="border:1px solid black;">
    <div class="row" style="padding:10px;">
        <div class="col-md-4">
            <?= Html::img("/img/Proyectos/{$cards->icon}.png", ['style' => 'width:100%;']) ?>
        </div>
        <div class="col-md-8" style="padding:2px;">
            <p><?= $cards->info ?></p>
            <div style="text-align: center;">
                <b>Tecnologias utilizadas</b>
            </div>
            <div class="row" style="display: flex;justify-content: center;">
                <?php foreach ($tecnologias as $tec) { ?>
                <div class="d-flex">
                    <?= Html::img("/img/iconos/{$tec->icon}.png", ['style' => 'width:40px;padding:5px;']) ?>
                </div>
                <?php } ?>
            </div>
            <div style="text-align: center;">
                <a target="_blank" href="http://ntdaecommerce.atwebpages.com/">Ver más</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>