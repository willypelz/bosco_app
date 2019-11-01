@extends('layouts.public')
@section('content')
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="active">
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End Here-->
    <div class="content-wrapper container" id="page-info">
        <div class="row">
            <div class="col-xs-12 col-sm-6 contact-form">
                <div class="col-xs-12" id="success"></div>
                <h2>Send us Message</h2>
                <form role="form" >
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-6">
                            <label for="name">Name<span>*</span></label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group col-xs-12 col-sm-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sub">Subject<span>*</span></label>
                        <input type="text" class="form-control" id="sub" >
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message"></textarea>
                    </div>

                    <button type="button" class="btn btn-default" id="submit">
                        Submit
                    </button>
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 contact-address">
                <h2>Get in touch</h2>
                <address>
								<span> <strong>Address :</strong> <span>3, Prince Adefowope Martins Street,
										<br>
									 Unity Estate Ogudu, Lagos</span> </span>
                    <span> <strong>E-Mail :</strong> <span><a href="mailto:boscoboyslagos@gmail.com">boscoboyslagos@gmail.com</a></span>
                    <span> <strong>Tel :</strong> <span><a href="tel:+23480661580006">+234-80661580006</a></span> </span>
{{--                    <span> <strong>Fax :</strong> <span>+1 123 456 7890</span> </span>--}}
                </address>
            </div>
        </div>
    </div>
</div>
@endsection