<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class environment extends Model
{
    use HasFactory;
    protected $table = 'environments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'floor'
    ];
}
