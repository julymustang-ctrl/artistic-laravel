<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_position',
        'company_name',
        'testimonial',
        'client_photo',
        'company_logo',
        'rating',
        'featured',
        'is_approved',
        'sort_order'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'is_approved' => 'boolean',
        'rating' => 'integer'
    ];

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeByRating($query, $rating)
    {
        return $query->where('rating', '>=', $rating);
    }

    public function getStarsAttribute()
    {
        return str_repeat('★', $this->rating) . str_repeat('☆', 5 - $this->rating);
    }
}
