<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = true;
    protected $table = 'account';
    protected $primaryKey = 'account_id';
    protected $fillable = ['username', 'password', 'employee_id'];

}
