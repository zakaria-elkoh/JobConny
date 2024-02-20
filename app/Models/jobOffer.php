<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobOffer extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(user::class);
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class);
    }
}
