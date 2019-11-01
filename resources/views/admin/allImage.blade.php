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
                        <a href="">Gallery</a>
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
                            <th style="width:60px">Image</th>
{{--                            <th>Title</th>--}}
{{--                            <th>Body</th>--}}
{{--                            <th>Category</th>--}}
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($image as $images)
                            <tr>
                                <td><input name="row_sel" value="{{$images->id}}" class="select_row" type="checkbox"></td>
                                <td>
                                    <a href="{{asset('gallery/'.$images->image)}}" title="Image 10" class="cbox_single thumbnail">
                                        <img alt="" src="{{asset('gallery/'.$images->image)}}" style="height:250px;width:250px">
                                    </a>
                                </td>

                                <td>{{date_format($images->created_at,'F d,Y')}}</td>
                                <td>
                                    <form id="deleteEvent-{{$images->id}}" action="{{route('deleteEvent',$images->id)}}" method="post">
                                        @csrf
                                    </form>

                                    <a type="submit" title="Delete" onclick="document.getElementById('deleteEvent-{{$images->id}}').submit()"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <center>{{ $image->onEachSide(1)->links() }}</center>
            </div>
        </div>
    </div>
@endsection
