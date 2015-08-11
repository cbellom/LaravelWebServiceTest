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
    protected $table = 'processes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description','schedule','cost','additionalInformation','requisitesURL','legislationURL','entity','responseTime','pointsOfService'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
