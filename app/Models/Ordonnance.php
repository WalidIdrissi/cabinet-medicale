<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'traitement_id'];
    public function traitement()
    {
        return $this->belongsTo(Traitement::class);
    }
}
