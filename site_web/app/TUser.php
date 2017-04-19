<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TUser extends Model
{
    public function scopeRecup($query)
    {
    	return static::where('id_user', 1);
    }
}
