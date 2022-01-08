<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100 fondo-principal">
    <?php $this->beginBody() ?>

    <header>
        <?php
    NavBar::begin([
        'brandLabel' => '<i class="fas fa-code"></i> <i class="fab fa-autoprefixer logotipo"></i>'. '   ' .Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top menu1',
            'style'=> ' background: #151313 !important;flex-grow: 0 !important;    color: aqua !important;',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav','style'=>'flex-grow: 0 !important; color: aqua !important;'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Acerca', 'url' => ['#acerca']],
            ['label' => 'Skills', 'url' => ['#skills']],
            ['label' => 'Proyectos', 'url' => ['#proyectos']],
            ['label' => 'Contacto', 'url' => ['#contacto']],
            // Yii::$app->user->isGuest ? (
            //     ['label' => 'Login', 'url' => ['/site/login']]
            // ) : (
            //     '<li>'
            //     . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            //     . Html::submitButton(
            //         'Logout (' . Yii::$app->user->identity->username . ')',
            //         ['class' => 'btn btn-link logout']
            //     )
            //     . Html::endForm()
            //     . '</li>'
            // )
        ],
    ]);
    NavBar::end();
    ?>
    </header>

    <main role="main" class="">
        <div class="" style="">
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="">

    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>