<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $with = ['roles'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'field',
        'adress',
        'experience',
        'description',
        'job_name',
        'company_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function hasRoleName($roleName) 
    {
        return $this->roles->contains('title', $roleName);
    }

    public function hasRole($roleName) 
    {
        return $this->roles()->where('title', $roleName)->exists();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function company()
    {
        return $this->belongsToMany(Company::class);
    }
}
