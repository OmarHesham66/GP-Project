<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Trait\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    use Media;
    public function showCreatePost()
    {
        $client = $_SESSION['client'];
        return view('admin.dashboard.Timeline.assets-timeline.showCreatePost', compact('client'));
    }
    public function storePost(Request $request)
    {

        $client = $_SESSION['client'];
        $request->validate([
            'text' => 'max:255',
            'media' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,gif',
        ]);
        $file_name='Null';
        if ($request->media){
            $file_name = $this->getFileName($request->media);
           }
        Post::create([

            'text' => $request->text,
            'media' => $file_name,
            'user_id' => $client->id
        ]);
        return redirect()->route('myprofile');
    }
    public function getComments($id)
    {
        $comments = Comment::with('user')->where('post_id', '=', $id)->get();

        $posts = Post::where('id', '=', $id)->get();

        return view('admin.Dashboard.Timeline.assets-timeline.Comment-page', with([
            'posts' => $posts,
            'comments' => $comments,
            'client' => $_SESSION['client']

        ]));
    }

    public function storeComment(Request $request)
    {
        Comment::create([
            'text' => $request->text,
            'user_id' => $_SESSION['client']->id,
            'post_id' => 1
        ]);
        return ('dashboard');
    }

    public function showSearch()
    {
        return view('admin.Dashboard.Timeline.assets-timeline.search-result');
    }

    public function delete_post($id)
    {
        Post::where('id', $id)->first()->delete();
        return redirect()->route('dashboard');
    }
}
