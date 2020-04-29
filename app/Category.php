<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $guarded = [''];
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
