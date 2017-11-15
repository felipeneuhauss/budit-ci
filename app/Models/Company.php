<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends AbstractModel
{
    use SoftDeletes;
         
    protected $table = 'companies';

    protected $fillable = ['id','name','document','address', 'zip_code','phone','email','city_id',
        'user_id','created_at','updated_at','deleted_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function city() 
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }

    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}