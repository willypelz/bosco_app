<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Event;
use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    //
    /**
     * @return mixed
     */

    public function index()
    {
        $post = Post::orderBy('id', 'DESC')->take(3)->get();
        return view('welcome',compact('post'));
    }

    public function process()
    {
        $amount = $this->request['amount'];
        $email = $this->request['email'];
        return view('payment_process',compact('amount','email'));
    }

    public function comment($post)
    {

        $comment = new Comment();
        $comment->post_id = $post;
        $comment->name = $this->request['name'];
        $comment->comment = $this->request['comment'];
        $comment->created_at = $this->time;
        $comment->save();
        return back()->with('message','comment posted');
    }

    public function gallery()
    {
        $image = Event::orderBy('id', 'DESC')->paginate(15);
        return view('gallery',compact('image'));
    }

    public function post()
    {
        $post = Post::orderBy('id', 'DESC')->paginate(3);
        $html='';

        foreach($post as $posts) {

            $html .= '<section class="img-slider flex-slide flexslider">
                        <ul class="slides">
                          
                            <li>
                          
                            </li>

                        </ul>
                    </section>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                            <h2 class="h1">'.$posts->title.'</h2>
                            <ul class="post-in">
                                <li>
                                    Posted In : '.$posts->category->title.'
                                </li>
                                <li>
                                '.$posts->comment->count().' : comments,  <small>Created at : '.date_format($posts->created_at,'F d,Y').'</small>
                                </li>
                            </ul>
                            <p>
                                '.substr(strip_tags($posts->body), 0, 500).'
                            </p>

                            <p>
                                <a href="'.route('blogPost',$posts->id).'" class="btn btn-default" role="button">READ MORE</a>
                            </p>
                        </div>
                    </div>
             ';
        }
        if ($this->request->ajax()) {
            return $html;
        }
        return view('blog',compact('post'));
    }

    public function singlePost(Post $post)
    {
        return view("singlepost",compact('post'));
    }
}
