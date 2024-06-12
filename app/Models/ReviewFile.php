<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewFile extends Model
{
    use HasFactory;
    protected $table = 'review_image';
    public $timestamps = false;
    
    protected $fillable = [
        'review_image_id',
        'review_review_id',
        'review_filename',
    ];
}
