<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_cat';

    protected $guarded = ['id_cat','nombrec'];
    public $timestamps = false; //evitar que agrege el campo update_at en las actualizaciones
}
