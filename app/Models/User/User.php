<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    /**
     * fillable users data
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
