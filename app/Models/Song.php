<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
