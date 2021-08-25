<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
      'room_id',
        'lesson_id',
        'teacher_id',
        'group_id',
        'date',
        'start_time',
        'end_time'
    ];
}
