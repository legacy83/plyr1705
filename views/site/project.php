<?php

/* @var $this yii\web\View */
/* @var $project \plyr1705\domain\model\project\ProjectRecord */
/* @var $workImage \plyr1705\domain\model\project\MediaImageRecord */
/* @var $previous \plyr1705\domain\model\project\ProjectRecord */
/* @var $next \plyr1705\domain\model\project\ProjectRecord */

use yii\helpers\Url;

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

        <div class="row page-nav scrollreveal">
            <div class="col-sm-6">
                <?php if ( $previous ): ?>
                    <a href="<?= Url::to( [ 'site/project', 'id' => $previous->id ] ); ?>"><i class="fa fa-chevron-left"></i> Previous Project</a>
                <?php endif; ?>
            </div> <!-- /-col-sm-6 -->

            <div class="col-sm-6">
                <?php if ( $next ): ?>
                    <a href="<?= Url::to( [ 'site/project', 'id' => $next->id ] ); ?>" class="pull-right">Next Project <i class="fa fa-chevron-right"></i></a>
                <?php endif; ?>
            </div> <!-- /.col-sm-6 -->
        </div> <!-- /.row -->

    </div> <!-- /.container -->
</div><!-- /.single-project -->
