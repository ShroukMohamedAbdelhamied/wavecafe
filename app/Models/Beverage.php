<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Special;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'beverage_title',
        'beverage_content',
        'beverage_price',
        'published',
        'special',
        'beverage_image',
        'category_id',
    ];

    protected $dates = ['deleted_at'];
    protected $casts = [
        'published' => 'boolean',
        'special' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function specials()
    {
        return $this->belongsToMany(Special::class);
    }
}
