<?php

namespace App\Models;

use App\Models\Teacher;

use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
    protected $fillable = [
        'naziv'
    ];

    
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class)->withTimestamps();
    }
}
