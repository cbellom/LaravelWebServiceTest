<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttentionsModel extends Model
    {
    protected $connection = 'pgsql_external';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attentions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
