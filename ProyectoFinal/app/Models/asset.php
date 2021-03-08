<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class asset extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='assets';
    protected $dates = ['deleted_at'];
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
