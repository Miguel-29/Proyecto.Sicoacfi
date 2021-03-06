<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class environment extends Model
{
    use HasFactory;
    protected $table = 'ambientes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'codigo',
        'piso'
    ];
}
