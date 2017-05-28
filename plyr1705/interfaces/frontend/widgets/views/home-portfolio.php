<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

?>

<div id="portfolio">
    <div class="container">
        <div class="row portfolio-2">

            <?php foreach ( range( 1, 12 ) as $index ): ?>

                <div class="col-md-4 col-sm-6 scrollreveal">
                    <a href="<?= Url::to( [ 'site/project', 'id' => $index ] ); ?>">
                        <img src="http://static.npress.com.br/plyr/assets/images/portfolio2-thumb1.jpg" class="img-responsive" alt=""/>
                        <div class="overlay">
                            <div class="content">
                                <h4>Arcu Elementum</h4>
                                <p>View Details</p>
                            </div> <!-- /.content -->
                        </div> <!-- /.overlay -->
                    </a>
                </div> <!-- /.col-md-4 -->

            <?php endforeach; ?>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.portfolio -->