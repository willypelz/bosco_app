<?php

namespace App\Http\Controllers;

use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class PostController extends Controller
{
    //
    public function index(){
        return view('admin.upload');
    }

    public function allPost(){
        $post = Post::orderBy('id', 'DESC')->paginate(10);
        return view('admin.allpost',compact('post'));
    }

    public function singlePost(Post $post){
        //$post = find::Post(5);
        return view("admin.singlepost",compact('post'));
    }
    public function create(){
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->category_id = $this->request['category'];
        $post->title = $this->request['title'];
        $post->body = $this->request['body'];
        $post->created_at = $this->time;
        $post->save();

        if ($this->request->hasfile('image')) {

            if ($post->save()) {
                $post_id = $currentId = $post->id;
                request()->validate([
                    'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);

                $image = $this->request->file('image');
                $image_array = count($image);
                for($i=0; $i < $image_array; $i++)
                {
                    $extension = $image[$i] ->getClientOriginalExtension();
                    $new_name = rand(123456789,99999999).".".$extension;
                    $upload_path = 'image/';
                    $image[$i]->move($upload_path,$new_name);
                   ;

                    /*Insert your data*/
                    $image_save = new Image();
                    $image_save->post_id = $post_id;
                    $image_save->image = $new_name;
                    $image_save->save();
                    /*Insert your data*/
                }
            }
        }
        return back()->with('message', 'Successfully Save Your Image file.');
    }

    public function postDelete($id){
        Post ::where ('id', $id)->delete();
        return back();
    }
}
