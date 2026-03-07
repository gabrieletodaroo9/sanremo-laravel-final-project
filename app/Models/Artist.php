<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
    
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
}
