<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'relations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'password_2', 'currency', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'password_2',
    ];
}
