<?php
namespace App\Transformers\Facades;
/**
 * Created by PhpStorm.
 * User: felipeneuhauss
 * Date: 14/11/17
 * Time: 11:08
 */

use Illuminate\Support\Facades\Facade;

class TransformerManager extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'transformerManager';
    }

}