<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class PasswordReset extends AbstractModel
{
    use SoftDeletes;
         
    protected $table = 'password_resets';

    protected $fillable = ['email','token','created_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

}