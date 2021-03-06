<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'degree'
    ];

    public function fullname()
    {
        return $this->name . ' ' . $this->surname;
    }
}
