<?php

namespace App\Models;

use App\Models\Predmet;
use App\Nivo;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'naziv',
        'br_mobile',
        'predmet_id',
        'nivo_id'
    ];    


    //nisam sigurna koju vezu
    /*public function predmet()
    {
        return $this->belongsTo(Predmet::class);
    }

    public function nivo()
    {
        return $this->belongsTo(Nivo::class);
    }*/

    public function subjects()
    {
        return $this->belongsToMany(Predmet::class)->withTimestamps();
    }

    public function levels()
    {
        return $this->belongsToMany(Nivo::class)->withTimestamps();
    }
}
