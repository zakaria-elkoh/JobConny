<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    public function company() {
        return $this->belongsTo(Company::class);
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class);
    }
}
