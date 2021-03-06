<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
    'category_id',
    'user_id',
];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category', 'user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    use SoftDeletes;

}
