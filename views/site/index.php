<?php

/* @var $this yii\web\View */

use plyr1705\interfaces\frontend\widgets\HomeIntro;
use plyr1705\interfaces\frontend\widgets\HomePortfolio;

$this->title = 'Plyr | Home';
?>

<div class="solo-1 solo-1--custom">

    <?= HomeIntro::widget(); ?>
    <?= HomePortfolio::widget(); ?>

</div> <!-- /.solo-1 -->
