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

    public function awards()
    {
        return $this->belongsToMany(Award::class);
    }

    protected $hidden = ['created_at', 'updated_at', 'edition_id', 'pivot'];
}
