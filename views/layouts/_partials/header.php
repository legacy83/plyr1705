<?php

/* @var $this \yii\web\View */

use yii\helpers\Url;

$isHome = true;
$isHome = $isHome && Yii::$app->controller->id == 'site';
$isHome = $isHome && Yii::$app->controller->action->id == 'index';

?>

<nav id="nav" class="navbar navbar-default navbar-fixed-top scrollreveal">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= Yii::$app->homeUrl; ?>" class="navbar-brand">Plyr</a>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <?php if ( $isHome ): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#intro" class="js-trigger">Home</a></li>
                    <li><a href="#portfolio" class="js-trigger">Portfolio</a></li>
                    <li><a href="<?= Url::to( [ 'site/about' ] ); ?>">About</a></li>
                    <li><a href="<?= Url::to( [ 'site/contact' ] ); ?>">Contact</a></li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= Yii::$app->homeUrl; ?>">Portfolio</a></li>
                    <li><a href="<?= Url::to( [ 'site/about' ] ); ?>">About</a></li>
                    <li><a href="<?= Url::to( [ 'site/contact' ] ); ?>">Contact</a></li>
                </ul>
            <?php endif; ?>
        </div> <!-- /.collapse -->

    </div> <!-- /.container -->
</nav> <!-- /.navbar -->