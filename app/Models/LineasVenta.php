<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineasVenta extends Model
{
    use HasFactory;

    public $table = "linea_ventas";
    public $fillable = [
        "id",
        "producto_id",
        "venta_id", 
    ];
    
    public $timestamps = true;
}
