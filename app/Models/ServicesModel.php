<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model {
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'skill1',
        'skill1desc',
        'skill2',
        'skill2desc',
        'skill3',
        'skill3desc'
    ];

    
}
