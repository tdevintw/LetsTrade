<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostRequest extends Model
{
    use HasFactory;
    protected $table = "requests";
    
    protected $fillable=[
        'post_id',
        'message',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
