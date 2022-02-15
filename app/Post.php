<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'progress',
    'content',
    'user_id'
];

public function user()
{
    return $this->belongsTo('App\User');
}

public function comments(){
    return $this->hasMany('App\Comment');
}


public function getByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}

function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}