<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'autor',
        'status',
        'image',
        'description',
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'category_has_news_tab', 'news_id', 'category_id');
        
    }
}
