<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function comments(): HasMany
    
    {
            return $this->hasMany(Coment::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);

    }


    public function user(){

            return $this->belongsTo(User::class);
    }


}
