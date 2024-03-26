<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
      protected $fillable = [
        'nom','prenom','date_naissance','telephone','poids','taille','groupe_sanguin','antecedants_medicaux'
        
    ];
   
   
   
   
    use HasFactory;
}
