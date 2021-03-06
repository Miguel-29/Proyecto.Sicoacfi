<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;
    protected $table='assets';
    protected $primaryKey='id';
    protected $fillable= [
        'trademark',
        'color',
        'reference',
        'serial_number',
        'date_admission',
        'maintenance',
        'category',
        'idenvironment',
        'idteacher',
        'created_at',
        'updated_at'
    ];
}
