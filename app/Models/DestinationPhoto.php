<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinationPhoto extends Model
{
    use HasFactory;
    protected $table = 'destinations_image';
    public $timestamps = false;
    
    protected $fillable = [
        'image_id',
        'image_destination_id',
        'image_filename',
    ];
}
