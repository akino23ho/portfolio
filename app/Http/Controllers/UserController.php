<?php
namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
public function index(User $user)
{
    return view('User.index')->with(['own_posts' => $user->getOwnPaginateByLimit()]);
}


public function store(CommentRequest $request, Comment $comment)
{
    $input = $request['comment'];
    $input += ['user_id' => $request->user()->id];    
    $comment->fill($input)->save();
    return redirect('/comments/'.$comment->id);
}

public function update(CommentRequest $request, Comment $comment)
{
    $input_comment = $request['comment'];
    $input_comment += ['user_id' => $comment->user()->id];    
    $comment->fill($input_comment)->save();
    return redirect('/comments/' . $comment->id);
}
}
?>