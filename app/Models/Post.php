<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'title',
        'description',
        'subcategory_id',
        'note',
        'condition',
        'user_id',
        'access',
        'status',
        'city_id'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
