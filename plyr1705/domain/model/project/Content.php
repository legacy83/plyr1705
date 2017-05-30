<?php

namespace plyr1705\domain\model\project;

use yii\base\Model;

/**
 * Class Content
 *
 * @package plyr1705\domain\model\project
 */
class Content extends Model
{
    public $title;
    public $content;

    public function rules()
    {
        return [
            [ [ 'title', 'content' ], 'required' ],
        ];
    }
}
