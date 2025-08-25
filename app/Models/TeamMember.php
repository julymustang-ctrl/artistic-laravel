<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'position',
        'bio',
        'photo',
        'email',
        'phone',
        'social_links',
        'skills',
        'department',
        'featured',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'is_active' => 'boolean',
        'social_links' => 'array',
        'skills' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($member) {
            if (empty($member->slug)) {
                $member->slug = Str::slug($member->name);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeByDepartment($query, $department)
    {
        return $query->where('department', $department);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSocialLinkAttribute($platform)
    {
        return $this->social_links[$platform] ?? null;
    }
}
