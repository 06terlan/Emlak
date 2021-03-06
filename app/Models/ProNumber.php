<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProNumber extends Model
{
    public $timestamps = false;

    public function makler()
    {
        return $this->belongsTo(MskMakler::class, 'pure_number', 'pure_number');
    }
}
