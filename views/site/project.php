<?php

/* @var $this yii\web\View */
/* @var $project \plyr1705\domain\model\project\Project */

use plyr1705\interfaces\frontend\widgets\SingleProjectNav;

$this->title = 'Plyr | Single Project';
$formatter = \Yii::$app->formatter;
?>

<div class="single-project single-project-1">
    <div class="container">

        <div class="intro">
            <h1 class="scrollreveal"><?= $project->title; ?></h1>
            <p class="description scrollreveal"><?= $project->content; ?></p>
            <ul class="list-inline list-unstyled scrollreveal">
                <li>Client: <?= $project->client->name; ?></li>
                <li>Date: <?= $formatter->asDate( $project->created_at, 'MMMM Y' ); ?></li>
            </ul>
        </div> <!-- /.intro -->

        <img src="<?= $project->featured->url; ?>" class="scrollreveal img-responsive" alt="<?= $project->featured->alt; ?>"/>

        <div class="row">
            <?php foreach ( $project->workImages as $workImage ): ?>
                <div class="col-md-6 scrollreveal">
                    <img src="<?= $workImage->url; ?>" class="img-responsive" alt="<?= $workImage->alt; ?>"/>
                </div> <!-- /.col-md-6 -->
            <?php endforeach; ?>
        </div> <!-- /.row -->

        <?= SingleProjectNav::widget( [ 'current' => $project ] ); ?>

    </div> <!-- /.container -->
</div><!-- /.single-project -->
