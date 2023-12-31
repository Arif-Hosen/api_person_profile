<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonProfile extends Model
{
    use HasFactory;

    protected $table = 'person_profiles';

    protected $fillable = [
        'name',
        'email',
        'about',
        'profile_url',
    ];
}
