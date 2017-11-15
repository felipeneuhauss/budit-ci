<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class City extends AbstractModel
{
    protected $table = 'cities';

    protected $primaryKey = 'id';

    protected $with = [];

    protected $fillable = ['id','name','state_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function state() 
    {
        return $this->belongsTo('App\Models\State', 'state_id', 'id');
    }

    public function companies()
    {
        return $this->hasMany('App\Models\Company', 'city_id', 'id');
    }

}