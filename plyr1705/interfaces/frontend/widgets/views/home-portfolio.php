<?php

/* @var $this yii\web\View */
/* @var $portfolio array */
/* @var $project \plyr1705\domain\model\project\ProjectRecord */

use yii\helpers\Url;

?>

<div id="portfolio">
    <div class="container">
        <div class="row portfolio-2">

            <?php foreach ( $portfolio as $project ): ?>

                <div class="col-md-4 col-sm-6 scrollreveal">
                    <a href="<?= Url::to( [ 'site/project', 'id' => $project->id ] ); ?>">
                        <img src="<?= $project->thumbnail->url; ?>" class="img-responsive" alt="<?= $project->thumbnail->alt; ?>"/>
                        <div class="overlay">
                            <div class="content">
                                <h4><?= $project->title; ?></h4>
                                <p>View Details</p>
                            </div> <!-- /.content -->
                        </div> <!-- /.overlay -->
                    </a>
                </div> <!-- /.col-md-4 -->

            <?php endforeach; ?>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.portfolio -->