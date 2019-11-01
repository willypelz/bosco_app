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
                <article class="blog anim-section" id="results">

                </article>
                <div class="ajax-loading"><img src="{{ asset('tenor.gif') }}" /></div>
                <!--block Second End Here-->
                <!--block Third Start Here-->



            </div>
            <!--Article Section End Here-->
        </div>

    </div>
</div>
    @endsection
