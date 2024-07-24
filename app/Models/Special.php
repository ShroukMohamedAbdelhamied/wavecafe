<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Special extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'special_title',
        'special_content',
        'special_price',
        'special_published',
        'special_image',
        'category_id',
    ];

    /**
     * Validation rules for creating and updating specials
     */
    public static function validationRules()
    {
        return [
            'special_title' => 'required|max:100|min:5',
            'special_content' => ['required', 'string', function ($attribute, $value, $fail) {
                $words = str_word_count($value);
                if ($words > 10) {
                    $fail('The '.$attribute.' must not be more than 10 words.');
                }
            }],
            'special_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'special_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    
    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function beverages()
    {
        return $this->belongsToMany(Beverage::class);
    }
}
