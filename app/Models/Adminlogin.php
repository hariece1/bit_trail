<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Adminlogin as Authenticatable;

class Adminlogin extends Model
{
    use HasFactory;
    protected $table='adminlogins';
    protected $guarded=['password_confirmation'];
}
