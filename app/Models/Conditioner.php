<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conditioner extends Model
{
    use HasFactory;

    public function getValuesOfAttribute($column)
    {
        return $this::query()->distinct()->pluck($column);
    }
}
