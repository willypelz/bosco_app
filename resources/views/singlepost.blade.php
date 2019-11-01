@extends('layouts.public')
@section('content')
    <div id="main">
        <!--Breadcrumb Section Start Here-->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Our Blog</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">
                                Blog
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb Section End Here-->
        <div class="content-wrapper container" id="page-info">

            <div class="row">
                <!--Article Section Start Here-->
                <div class="col-xs-12">
                    <!--block Frist Start Here-->


                    <!--block Frist End Here-->
                    <!--block Second Start Here-->
                    <article class="blog anim-section">
                        <section class="img-slider flex-slide flexslider">
                            <ul class="slides">
                                @foreach($post->images as $image)
                                <li>
                                    <img src="{{asset('image/'.$image->image)}}" alt="">
                                </li>
                               @endforeach
                            </ul>
                        </section>
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                                <h2 class="h1">{{$post->title}} </h2>
                                <small>Created at : {{date_format($post->created_at,'F d,Y')}}</small>
                                <ul class="post-in">
                                    <li>
                                        Posted In : {{$post->category->title}}
                                    </li>
                                    <li>
                                        {{$post->comment->count()}} : comments
                                    </li>
                                </ul>
                                <p>
                                    {{$post->body}}
                                </p>
                            </div>
                        </div>
                    </article>
                    <!--block Second End Here-->
                    <!--block Third Start Here-->



                </div>
                <!--Article Section End Here-->
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="reply-form">
                            <h3>Leave Replay</h3>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <section class="live-comment">
                                            <h3>Comments</h3>
                                            @foreach($post->comment as $comment)
                                            <article class="media comment">

                                                <div class="media-body">
                                                    <header>
                                                        <h4 class="media-heading">{{$comment->name}}</h4>
                                                        <span class="date">{{date_format($comment->created_at,'F d,Y')}}</span>

                                                    </header>
                                                    <p>
                                                        {{$comment->comment}}
                                                    </p>
                                                </div>

                                            </article>
                                            @endforeach
                                        </section>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <form role="form" method="post" action="{{route('postcomment',$post->id)}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name<span>*</span></label>
                                                <input type="text" class="form-control" name="name" placeholder="Fullname" id="name">
                                            </div>
                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" name="comment" id="comment"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                        </form>
                                    </div>

                                </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
