<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'photo', 'address', 'start_time', 'end_time', 'visit_time', 'status'];
}
