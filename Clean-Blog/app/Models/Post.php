<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        if(file_exists(public_path("front/".$this->image))){
            return asset("front/".$this->image);
        }return asset("front/default.jpg");
    }
}
