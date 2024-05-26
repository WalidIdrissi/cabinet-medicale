<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DetailAnalyse extends Model
{
    protected $fillable = ['analyse_id', 'type_analyse_id', 'valeur'];

    public function analyse()
    {
        return $this->belongsTo(Analyse::class);
    }

    public function typeAnalyse()
    {
        return $this->belongsTo(TypeAnalyse::class);
    }
}