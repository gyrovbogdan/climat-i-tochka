<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ConditionerModel;

class Conditioner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = ['images' => 'array'];

    public function conditionerModel()
    {
        return $this->hasMany(ConditionerModel::class);
    }
}
