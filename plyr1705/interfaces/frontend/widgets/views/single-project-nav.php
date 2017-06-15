<?php

/* @var $this yii\web\View */
/* @var $previous \plyr1705\domain\model\Project */
/* @var $next \plyr1705\domain\model\Project */

use yii\helpers\Url;

?>

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