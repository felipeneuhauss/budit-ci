<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class State extends AbstractModel
{
    protected $table = 'states';

    protected $fillable = ['id','name','initials'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'state_id', 'id');
    }

}