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
                        <a href="{{route('allpost')}}">All Category</a>
                    </li>
                </ul>
            </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3 class="heading">Gallery table view</h3>
                        <table class="table table-bordered table-striped table_vam" id="dt_gal">
                            <thead>
                            <tr>
                                <th class="table_checkbox">
{{--                                    <input name="select_rows" class="select_rows" data-tableid="dt_gal" type="checkbox">--}}
                                </th>
{{--                                <th style="width:60px">Image</th>--}}
                                <th>Title</th>
                                <th>Body</th>
                               <th>Category</th>
                                <th>Date</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $posts)
                            <tr>
                                <td><input name="row_sel" value="{{$posts->id}}" class="select_row" type="checkbox"></td>
{{--                                <td>--}}
{{--                                    <a href="gallery/Image10.jpg" title="Image 10" class="cbox_single thumbnail">--}}
{{--                                        <img alt="" src="gallery/Image10_tn.jpg" style="height:50px;width:50px">--}}
{{--                                    </a>--}}
{{--                                </td>--}}
                                <td>{{$posts->title}}</td>

                                <td>{{substr(strip_tags($posts->body), 0, 150)}}</td>
                                <td>{{$posts->category->title}}</td>
                                <td>{{date_format($posts->created_at,'F d,Y')}}</td>
                                <td>
{{--                                    <a href="#" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>--}}
                                    <a href="{{route('singlePost',$posts->id)}}" title="View"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <td>
                                    <form id="postDelete-{{$posts->id}}" action="{{route('postDelete',$posts->id)}}" method="post">
                                        @csrf
                                    </form>

                                    <a type="submit" title="Delete" onclick="document.getElementById('postDelete-{{$posts->id}}').submit()"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <center>{{ $post->onEachSide(1)->links() }}</center>
                </div>
        </div>
    </div>
@endsection
