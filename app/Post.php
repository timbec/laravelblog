<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{

    use SoftDeletes; 

    protected $fillable = [
        'title', 
        'slug',
        'content', 
        'category_id',
        'featured', 
        'user_id'
    ];

    public function getContentHtmlAttribute($value)
    {
        return $this->content ? Markdown::convertToHtml(e($this->content)) : NULL;
    }

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ['deleted_at']; 

    public function category()
    {
        return $this->belongsTo('App\Category'); 
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag'); 
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
