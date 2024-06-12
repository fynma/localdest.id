<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'review_id',
        'review_destination_id',
        'review_user_id',
        'review_rating_star',
        'review_level',
        'review_message',
    ];
    const CREATED_AT = 'review_created_at';
    const UPDATED_AT = 'review_updated_at';
    const DELETED_AT = 'review_deleted_at';
}
