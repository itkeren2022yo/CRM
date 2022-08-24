<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departments extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_department';

    protected $primaryKey = 'id_department';

    protected $fillable = [
        'department_name','deleted_at', 'created_at', 'updated_at'
    ];

    protected $dates = ['deleted_at'];
}
