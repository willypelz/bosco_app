@extends('layouts.public')
@section('content')
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Portfolio</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">
                            Gallery
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End Here-->


    <div class="content-wrapper" id="page-info">

        <!-- Gallery sections Start Here -->
        <section class="we-help gallery-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!--Sub Breadcrumb Section Start Here-->
{{--                        <ol class="breadcrumb">--}}
{{--                            <li>--}}
{{--                                <a href="#">Causes 1</a>--}}
{{--                            </li>--}}
{{--                            <li class="active">--}}
{{--                                <a href="#">Causes 2</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Causes 3</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                Causes 4--}}
{{--                            </li>--}}
{{--                        </ol>--}}
                        <!--Sub Breadcrumb Section Start Here-->
                        <!--Gallery Section Start Here-->
                        <div class="row gallery">
                            @foreach($image as $images)
                            <div class="cols-xs-12 col-sm-4">
                                <div class="thumbnail">
                                    <a class="img-thumb" href="">
                                        <img src="{{asset('gallery/'.$images->image)}}" alt="" style="width:350px; height:200px"></a>
                                </div>
                            </div>
                           @endforeach
                        </div>

                        <!--Gallery Section End Here-->
                    </div>

                    <!--Pagination Section Start Here-->

                    <div class="cols-xs-12 text-center">

                        <ul class="pagination">
                            <li>
                                {{ $image->onEachSide(1)->links() }}
                            </li>
                        </ul>

                    </div>

                    <!--Pagination Section Start Here-->

                </div>
            </div>
        </section>
        <!-- Gallery sections Start Here -->

    </div>

</div>
@endsection