<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMGR extends Model
{
    protected $table = 'products_mgr';

protected $fillable = [
    'nombre',
    'precio',
    'stock'
];

}
