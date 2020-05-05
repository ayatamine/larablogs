<?php

namespace App;

use App\User;
use App\Comment;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $guarded = [''];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
       return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        $comments = $this->hasMany(Comment::class);
        foreach ($comments as $c) {
            $c->setAttribute('added_at',$c->created_at->diffForHumans());
        }
        return $comments;
    }
}
