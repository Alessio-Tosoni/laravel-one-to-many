<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
        return $this->belongsTo(Type::class);
    }
}
