<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['checkin', 'checkout', 'total_working_hours', 'employee_id', 'schedule_id']; 
}




