<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    public function users()
    {
        return $this->hasMany(User::class, 'kecamatan_id');
    }
}
