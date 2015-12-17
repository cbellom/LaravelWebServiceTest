<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketsModel extends Model
{
    protected $connection = 'pgsql_external';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['num_id','fecha_solicitud'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id_sat_turnos','tip_id','id_sat_sedes','id_sat_categorias','id_sat_atriles','identificacion','turno','virtual','id_tipo_purga'];
}
