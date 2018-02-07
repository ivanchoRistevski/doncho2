<?php

namespace Allutomotive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

;

class Post extends Model
{
    //
    use Notifiable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'body', 'user_id','category_id','featured_photo','slug','importance','description','keywords',
    ];

    public function images(){
        return $this->hasMany('Allutomotive\ImageGallery','post_id');
    }

    public function category(){

        return $this->belongsTo('Allutomotive\Category','category_id');
    }

    public function path()
    {

        return "/" . $this->category->slug . "/" .  $this->slug;

    }

    public function creator()
    {

        return $this->belongsTo(User::class, 'user_id');

    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSearch($query, $s){
        return $query->where('keywords', 'like', '%' .$s. '%');
    }
}
