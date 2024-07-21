<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model {
    use HasFactory;
    protected $table = 'portofolio';

    protected $fillable = [
        'category1',
        'category2',
        'category3',
        'description1',
        'description2',
        'description3',
        'image1',
        'image2',
        'image3'
    ];

    
}
