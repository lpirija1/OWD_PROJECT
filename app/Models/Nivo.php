<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;

class Nivo extends Model
{
    protected $fillable = ['name'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class)->withTimestamps();
    }
}
