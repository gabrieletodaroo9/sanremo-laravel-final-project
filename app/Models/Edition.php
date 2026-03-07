<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public function songs()
    {
        return $this->hasMany(Song::class)->orderBy('position', 'asc');
    }
    protected $hidden = ['created_at', 'updated_at'];
}
