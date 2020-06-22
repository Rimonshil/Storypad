<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title','body', 'content','image', 'published_at','category_id','user_id'
    ];

    public function category() {
       return $this->belongsTo(Category::class);
    }
    public function tags() {
        return $this->belongsToMany(tag::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearched($query)
    {
        $search = request()->query('search');
        if(!$search) {
            return $query;
        }
        return $query->where('title', 'LIKE', "%{{$search}}%");
    }

}
