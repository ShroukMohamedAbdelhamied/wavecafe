<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beverage;
use App\Models\Special;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'cold',
        'hot',
        'juice',
    ];

    public function beverages()
    {
        return $this->hasMany(Beverage::class);
    }

    public function specials()
    {
        return $this->hasMany(Special::class);
    }

    // Method to determine if the category can be deleted
    public function canDelete()
    {
        // Check if the category has no associated beverages
        return $this->beverages()->count() === 0;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            // Check if the category has any associated beverages
            if ($category->beverages()->count() > 0) {
                // If beverages exist, prevent deletion and throw an exception
                throw new \Exception("Cannot delete category that contains beverages.");
            }
        });
    }
}