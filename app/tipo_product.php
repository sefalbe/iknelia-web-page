<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_product extends Model
{
    protected $table = 'tipo_products';
    protected $primaryKey = 'id_tipo_p';

    protected $guarded = ['id_tipo','nombrep'];
    public $timestamps = false; //evitar que agrege el campo update_at en las actualizaciones
}
