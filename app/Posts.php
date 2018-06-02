<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use Searchable;
    protected $fillable = [
        'title', 'body', 'image','category_id','slug',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
