<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantUser extends Model
{
    use HasFactory;

    protected $table = 'consultant_users';

    protected $fillable = ['consultant_id','customer_id','comments','assigned_by_id'];
    
}
