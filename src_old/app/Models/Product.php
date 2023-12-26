<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [       
    'name',
    'slug',
    'price',
    'status',
    'category_id',
    'is_active',
    'description',
    'image'];

    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
