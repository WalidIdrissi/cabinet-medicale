<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Analyse extends Model
{
    protected $fillable = [
        'date',
        'traitement_id',
    ];

    public function traitement()
    {
        return $this->belongsTo(Traitement::class);
    }

    public function detailAnalyses()
    {
        return $this->hasMany(DetailAnalyse::class);
    }
}