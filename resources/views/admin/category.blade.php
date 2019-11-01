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
                        <a href="{{route('category')}}">Create Category</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h3 class="heading">Tables</h3>
                    <div class="row sepH_c">
                        <div class="col-sm-4 col-md-4">
                        <form class="form" method="post" action="{{route('createcategory')}}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-tasks"></i></span>
                                    <input class="form-control input-sm" type="text" id="title" name="title" placeholder="Category"/>
                                </div><br>
                                <div class="btm_b clearfix">
                                    <button class="btn btn-default btn-sm pull-right" type="submit">Add</button>
                                </div>
                            </div>
                        </form>

                        </div>
                        <div class="col-sm-8 col-md-8">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>No of Post</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0;?>
                                @foreach($category as $categories)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$categories->title}}</td>
                                    <td>{{$categories->posts->count()}}</td>
                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $category->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection