<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relations
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // Static Functions

    // Object Functions
    public function getPrice()
    {
        return number_format($this->price/100, 2, ',', ',');
    }

    public function getImage()
    {
        return $this->thumbnail ? "/storage/images/products/" . $this->thumbnail : "/storage/images/product-placeholder.png";
    }
    public function relatedProducts()
    {
        return self::where(function($query){
            $query
            ->where('category_id', $this->category_id)
            ->whereNotIn('id', [$this->id]);
        })
        ->orderBy('updated_at', 'DESC')
        ->take(10)
        ->get();
    }
}