@extends('layouts.master')
@section('body')
    <div id="contentwrapper">
        <div class="main_content">
            <div id="jCrumbs" class="breadCrumb module">
                <ul>
                    <li>
                        <a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i></a>
                    </li>

                </ul>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <ul class="dshb_icoNav clearfix">
                        <li><a href="{{route('listEvent')}}" style="background-image: url({{asset('admin/img/gCons/multi-agents.png')}})"><span class="label label-info"><span class="label label-info"><?php $gallery=DB::table('event');?>
                                        {{$gallery->count()}}
                                </span></span> View Gallery</a></li>
{{--                        <li><a href="javascript:void(0)" style="background-image: url({{asset('admin/img/gCons/world.png')}})">Map</a></li>--}}
{{--                        <li><a href="javascript:void(0)" style="background-image: url({{asset('admin/img/gCons/configuration.png')}})">Settings</a></li>--}}
{{--                        <li><a href="javascript:void(0)" style="background-image: url({{asset('admin/img/gCons/lab.png')}})">Lab</a></li>--}}
                        <li><a href="{{route('display')}}" style="background-image: url({{asset('admin/img/gCons/world.png')}})"><span class="label label-success"></span> Gallery</a></li>
                        <li><a href="{{route('allpost')}}" style="background-image: url({{asset('admin/img/gCons/pie-chart.png')}})"><span class="label label-info"><?php $post=DB::table('post');?>
                                    {{$post->count()}}
                                </span>All post</a></li>
                        <li><a href="{{route('post')}}" style="background-image: url({{asset('admin/img/gCons/edit.png')}})"><span class="label label-danger"></span>Add New Post</a></li>
                        <li><a href="{{route('category')}}" style="background-image: url({{asset('admin/img/gCons/add-item.png')}})"> Add Category</a></li>
                        <li><a href="javascript:void(0)" style="background-image: url({{asset('admin/img/gCons/chat-.png')}})"><span class="label label-info"><?php $comment=DB::table('comment');?>
                                {{$comment->count()}}
                                </span> Comments</a></li>
                    </ul>
                </div>
            </div>

    </div>

</div>

<a href="javascript:void(0)" class="sidebar_switch on_switch bs_ttip" data-placement="auto right" data-viewport="body" title="Hide Sidebar">Sidebar switch</a>

@endsection