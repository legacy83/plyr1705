<?php

namespace plyr1705\domain\model\project;

use yii\base\Model;

/**
 * Class Image
 *
 * @package plyr1705\domain\model\project
 */
class Image extends Model
{
    public $src;
    public $alt;

    public function rules()
    {
        return [
            [ [ 'src', 'alt' ], 'required' ],
        ];
    }
}
