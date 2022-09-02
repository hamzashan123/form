<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForms extends Model
{
    use HasFactory;

    protected $table = 'user_forms';

    protected $fillable = ['user_id','form_id'];
}
