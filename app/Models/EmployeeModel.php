<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    protected $fillable = ['name'];

}
