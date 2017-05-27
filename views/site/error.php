<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = "Plyr | {$name}";
?>

<div class="error-1 error-1--custom">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">

                <h1><?= Html::encode( $name ) ?></h1>

                <p class="lead"><?= nl2br( Html::encode( $message ) ) ?></p>

                <p class="text">The above error occurred while the Web server was processing your request.<br>
                    Please contact us if you think this is a server error. Thank you.</p>

            </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div><!-- /.single-post -->
