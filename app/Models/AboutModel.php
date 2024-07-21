<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model {
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'yourname', // Update this to match the actual column name
        'aboutimage',
        'aboutme',
    ];
}
