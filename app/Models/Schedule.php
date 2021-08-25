<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

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


    public function group():BelongsTo
    {
       return $this->belongsTo(Group::class);
    }

    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function lesson():BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }
}
