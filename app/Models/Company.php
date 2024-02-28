<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'adress', 'phone', 'field', 'email', 'description'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function jobOffers()
    {
        return $this->belongsToMany(JobOffer::class);
    }
}
