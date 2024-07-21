<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model {
    use HasFactory;
    protected $table = 'home';

    protected $fillable = [
        'your_name',
        'work_experience',
        'description',
        'profile',
    ];

    
}
