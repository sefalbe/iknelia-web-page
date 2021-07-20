<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_producto';

    protected $guarded = ['id_producto','nombre','marca','descripcion','codigo','url_imagen','UM','tiempo_entrega','id_tipo','id_cat'];
    public $timestamps = false; //evitar que agrege el campo update_at en las actualizaciones
}
