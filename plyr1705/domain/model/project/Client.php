<?php

namespace plyr1705\domain\model\project;

use yii\base\Model;

/**
 * Class Client
 *
 * @package plyr1705\domain\model\project
 */
class Client extends Model
{
    public $name;

    public function rules()
    {
        return [
            [ [ 'name' ], 'required' ],
        ];
    }
}
