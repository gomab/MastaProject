<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /**
     * Trash
     */
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'tags', 'content', 'featured', 'category_id', 'url'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
