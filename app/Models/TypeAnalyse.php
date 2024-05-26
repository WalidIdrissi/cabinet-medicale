<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAnalyse extends Model
{
    protected $fillable = [
        'type_analyse',
    ];

    public function detailAnalyses()
    {
        return $this->hasMany(DetailAnalyse::class);
    }
}