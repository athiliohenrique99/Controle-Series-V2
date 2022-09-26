<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function series()
    {
        return $this->beLong(Serie::class);

    }

    public function episode()
    {
        return $this->hasMany(Episodio::class);
    }
}