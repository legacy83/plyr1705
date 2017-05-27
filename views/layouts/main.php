<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use plyr1705\interfaces\assets\SiteAsset;

SiteAsset::register( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode( $this->title ) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-default navbar-fixed-top scrollreveal" id="nav">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">PLYR</a>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
            </ul>
        </div> <!-- /.collapse -->

    </div> <!-- /.container -->
</nav> <!-- /.navbar -->

<?= $content; ?>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-sm-6 scrollreveal">
                <p>PLYR</p>
                <p class="copyright">&copy; <?= date('Y') ?> PLYR Template</p>
            </div> <!-- /.col-sm-6 -->

            <div class="col-sm-6 scrollreveal">
                <ul class="social pull-right list-unstyled list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div> <!-- /.col-sm-6 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</footer> <!-- /.footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
