<?php

namespace tests\unit\fixtures;

use yii\test\ActiveFixture;

/**
 * Class ProjectFixture
 *
 * @package tests\unit\fixtures
 */
class ProjectFixture extends ActiveFixture
{
    public $tableName = 'project';
    public $depends = [
        'yii\test\InitDbFixture',
        'tests\unit\fixtures\ProjectClientFixture',
        'tests\unit\fixtures\ProjectMediaImageFixture',
    ];
}
