@extends('layouts.master')
@section('body')
    <div id="contentwrapper">
        <div class="main_content">
            <div id="jCrumbs" class="breadCrumb module">
                <ul>
                    <li>
                        <a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i></a>
                    </li>
                    <li>
                        <a href="{{route('singlePost',$post->id)}}">Single Post</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="blog_content">
                        <div class="blog_item">
                            <h1>Category : {{$post->category->title}}.</h1>
                            <div class="toolbar clearfix">
                                <span class="text-muted">{{date_format($post->created_at,'F d,Y')}}</span>
                                <div class="pull-right"><span class="label label-info">Info</span></div>
                            </div>
                            <div class="media">
                                @foreach($post->images as $image)

                                <a href="#" class="pull-left">
                                    <img src="{{asset('image/'.$image->image)}}" style="width: 100px;height: 100px" class="thumbnail media-object" alt="">
                                </a>
{{--                                    <img src="{{asset('image/'.$image->image)}}"/>--}}
                                @endforeach
                                <div class="media-body">
                                    <h3 class="media-heading">{{$post->title}}.</h3>
                                </div>
                            </div>
                            <p>{{$post->body}}</p>
                        </div>
                    </div>


                    <ul class="pager">
                        <li class="previous">
                            <a href="#"><i class="glyphicon glyphicon-chevron-left"></i> Previous</a>
                        </li>
                        <li class="next">
                            <a href="#">Next <i class="glyphicon glyphicon-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
