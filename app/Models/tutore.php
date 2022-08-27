<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutore extends Model
{
    use HasFactory;

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }
}
