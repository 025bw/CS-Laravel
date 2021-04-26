<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function add(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = $request->input('author') ? $request->input('author') : "";
        if($request->hasFile('image')){
            $file=$request->file('image');
$filename=date("dmyhisa").$request->file('image')->getClientOriginalName();
$file->move(public_path('images'),$filename);
$post->pic = $filename;
        }
        
        $post->save();
        return redirect('');
    }

    public function delete(Request $request)
    {
        $request->input('id');
        DB::table('posts')->where('id', '=', $request->input('id'))->delete();
        $posts = Post::all();
        count($posts);
        if(count($posts)==0){
            DB::statement(
                "DBCC CHECKIDENT ('[posts]', RESEED, 0);"
            );
        }
        return redirect('');
    }

    public function update(Request $request)
    {
$validator  = $request->validate([
'title'=>'required|unique:posts',
'content'=>'required',
'author'=>'required'
]
);





        $post = Post::find($request->input('id'));
        if($request->hasFile('image')){
            File::delete('images/'.$post->pic);

            $file=$request->file('image');
$filename=date("dmyhisa").$request->file('image')->getClientOriginalName();
$file->move(public_path('images'),$filename);
$post->pic = $filename;
        }
        
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = $request->input('author') ? $request->input('author') : '';
        
        $post->save();
        return redirect('');
    }

    public function updateView(Request $request)
    {
        $post = DB::table('posts')->where('id', $request->input('id'))->first();
        return view('posts/update', ['post' => $post]);
    }

    public function list(Request $request)
    {
        
        return view('posts/list', [
            'posts' => DB::table('posts')->paginate(1)
        ]);
    }
}
