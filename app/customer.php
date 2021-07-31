<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id_customer';

    protected $guarded = ['id_customer','nombre','apellido','correo','empresa','telefono','code'];
    public $timestamps = false;
}
