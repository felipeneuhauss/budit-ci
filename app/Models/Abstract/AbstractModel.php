<?php
/**
 * File: ModelAbstract.php
 * Created by: Felipe Neuhauss
 * Email: felipe.neuhauss@gmail.com
 * Language: PHP
 * Date: 29/08/16
 * Time: 16:02
 * Project: sipred
 * Copyright: 2016
 */

namespace App\Models;

use App\Models\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model {

    use UuidModel;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';


}