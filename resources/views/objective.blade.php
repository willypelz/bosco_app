@extends('layouts.public')
@section('content')
    <div id="main">
        <!--Breadcrumb Section Start Here-->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Our Objective</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">
                                Our Objective
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb Section End Here-->

        <div class="mission-page" id="page-info">
            <!-- Services Section Start Here-->
            <section class="container services text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <header class="service-header section-header">
                            <h2><strong class="border-none">Our Objective</strong></h2>
                        </header>

                        <div class="row">
                            <div class="col-xs-12 col-sm-4 zoom">
                                <img src="assets/img/icon-service-05.png" alt="">
                                <h3 class="h3">To educate street children to become value based and productive citizens</h3>

                            </div>
                            <div class="col-xs-12 col-sm-4 zoom ">
                                <img src="assets/img/icon-service-02.png" alt="">
                                <h3 class="h3">To rescue from dangers of street and shelter them.</h3>

                            </div>
                            <div class="col-xs-12 col-sm-4 zoom">
                                <img src="assets/img/icon-service-03.png" alt="">
                                <h3 class="h3">To provide them with skill training and economic support to promote self-employment</h3>

                            </div>
                            <div class="col-xs-12 col-sm-4 anim-section zoom">
                                <img src="assets/img/icon-service-01.png" alt="">
                                <h3 class="h3">To support street children towards re-unification with their families of
                                    origin, extended families, foster families or alternative care.</h3>
                            </div>
                            <div class="col-xs-12 col-sm-4 anim-section zoom">
                                <img src="assets/img/icon-service-04.png" alt="">
                                <h3 class="h3"> To offer them quality education.</h3>

                            </div>
                            <div class="col-xs-12 col-sm-4 anim-section zoom">
                                <img src="assets/img/icon-service-06.png" alt="">
                                <h3 class="h3">To offer them life skills to motivate them to live value based life</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Section End Here-->

            <!-- Save Lives Section Start Here-->
            <section class="save-lives text-center parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <header class="page-header">
                                <h2>Doante to <strong>Save lives</strong></h2>

                            </header>
{{--                            <a href="causes.html" class="btn btn-default">See our Causes</a>--}}
                            <a  href="/donations" class="btn btn-default">Donate today</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Save Lives Section Start Here-->

            <!-- We Help Section Start Here -->

            <!-- We Help Section Start Here -->

        </div>

    </div>
@endsection