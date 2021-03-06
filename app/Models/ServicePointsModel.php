<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePointsModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicepoints';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','id','localization_lat','localization_lon','processes'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}