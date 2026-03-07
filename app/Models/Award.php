<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    public function song()
    {
        return $this->belongsToMany(Song::class);
    }
    
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
}
