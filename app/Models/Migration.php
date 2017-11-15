<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Migration extends AbstractModel
{
    use SoftDeletes;
         
    protected $table = 'migrations';

    protected $primaryKey = 'id';

    protected $with = [];

    protected $fillable = ['id','migration','batch'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

}