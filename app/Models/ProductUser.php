<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;
    //Definimos la tabla que usará este modelo
    protected $fillable = [
        'firstName',
        'lastName',
        'secondLastName',
        'email',
        'description',
    ];
}
