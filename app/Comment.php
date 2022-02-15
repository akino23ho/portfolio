<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

    'content',
    'user_id'
];
    public function user()
{
    return $this->belongsTo('App\User');
    
}
public function post()
{
    return $this->belongsTo('App\Post');
}

function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
