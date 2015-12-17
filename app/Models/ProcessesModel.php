<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessesModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'processes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = ['id','name','description','url','cost','schedule','additionalInformation','requisitesURL','legislationURL','entity','responseTime','pointsOfService','idCategory','categoryName'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
