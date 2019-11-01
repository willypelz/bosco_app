@extends('layouts.public')
@section('content')
    <div id="main">
        <!-- Breadcrumb Section Start Here -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Become Volunteer</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">
                                Become Volunteer
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End Here -->

        <div class="container mission-page" id="page-info">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Help Us Section Start Here-->
                    <section class="help-us">
                        <header class="page-header section-header clearfix">
                            <h2>We need you, <strong class="border-none">Help us around</strong></h2>
                        </header>
                        <!--<figure>-->
                        <!--    <img src="assets/img/help.jpg" alt="">-->
                        <!--</figure>-->
                    </section>
                    <!-- Help Us Section End Here-->
                    <!-- Process Step Section Start Here-->
                    <section class="process-section anim-section text-center">
                        <header class="page-header section-header clearfix">
                            <h2>How you can help, <strong>Here is the process</strong></h2>
                        </header>
                        <div class="row processes">
                            <p class="text-center">
                                <a data-toggle="modal" data-target=".join-now-form" class="btn btn-default btn-lg join-today">DONATE</a>
                            </p>
                            <div class="col-xs-12 col-sm-3">

                                <div class="process-step">
                                    Step 1
                                </div>
                                <h3 class="h4">Click Donate Button</h3>

                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="process-step">
                                    Step 2
                                </div>
                                <h3 class="h4">Fill in Your Information</h3>

                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="process-step">
                                    Step 3
                                </div>
                                <h3 class="h4">Sumbit Details</h3>

                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="process-step">
                                    Step 4
                                </div>
                                <h3 class="h4">Pay via loaded Payment Gateway</h3>

                            </div>
                        </div>

                    </section>
                    <!-- Process Step Section End Here-->
                </div>
            </div>
        </div>

    </div>
@endsection