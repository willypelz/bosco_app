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
                    {{--                    <li>--}}
                    {{--                        <a href="#">Toys & Hobbies</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a href="#">Learning & Educational</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a href="#">Astronomy & Telescopes</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        Telescope 3735SX--}}
                    {{--                    </li>--}}
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="chat_box">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="chat_content">
                                    <div class="chat_heading clearfix">
                                        <div class="pull-right"><i class="glyphicon glyphicon-remove chat_close"></i></div>
                                        Gallery upload: <span class="act_users"></span>
                                    </div>
                                    <br>

                                    <form method="post" class="form-horizontal dropzone dz-clickable"
                                          enctype="multipart/form-data" id="my-dropzone"
                                          action="{{route('uploadGalleryImage')}}">
                                        @csrf

                                        <!--dz-->


                                        <div class="custom-file-picker">
                                            <div class="picture-container form-group">
                                                <h4 class="info_text">Click to upload post image</h4>
                                                <div class="picture">
                                                    <span class="icon"><i class="fas fa-file-upload"></i></span>
                                                    <input type="file" name="image[]" id="uploadFile" class="wizard-file" multiple>
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 37 37" xml:space="preserve">
                <path class="circ path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,
                0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"></path>
                                                        <polyline class="tick path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="11.6,20 15.9,24.2 26.4,13.8 "></polyline>
            </svg>
                                                </div>
                                                <div id="image_preview"></div>
                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <button type="submit" class="btn btn-primary btn-block">Upload Image</button>
                                            </div>
                                        </div>

                                    </form>


                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .picture-container{
            position: relative;
            cursor: pointer;
            text-align: center;
            margin-bottom: 15px;
        }

        .picture{
            width: 100px;
            height: 100px;
            background-color: #fff;
            color: #FFFFFF;
            margin: 5px auto;
            overflow: hidden;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
        }

        .picture > .icon{
            width: 100%;
            height: 100%;
            display: inline-block;
            color: #37474F;
            border: 4px solid #CCCCCC;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
        }

        .picture:hover .icon{
            border-color: greenyellow;
        }

        .picture > .icon > svg{
            height: 1.4em;
            font-size: 4em;
        }

        .picture > svg{
            width: 100%;
            height: 100%;
        }

        .picture input[type="file"]{
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 100;
            right: 0;
            bottom: 0;
        }

        /*svg tick animation*/
        .circ {
            opacity: 0;
            display: none;
            stroke-dasharray: 130;
            stroke-dashoffset: 130;
            -webkit-transition: all .75s;
            -moz-transition: all .75s;
            -ms-transition: all .75s;
            -o-transition: all .75s;
            transition: all .75s;
        }
        .tick{
            stroke-dasharray: 50;
            stroke-dashoffset: 50;
            -webkit-transition: stroke-dashoffset .4s 0.5s ease-out;
            -moz-transition: stroke-dashoffset .4s 0.5s ease-out;
            -ms-transition: stroke-dashoffset .4s 0.5s ease-out;
            -o-transition: stroke-dashoffset .4s 0.5s ease-out;
            transition: stroke-dashoffset .4s 0.5s ease-out;
        }
        .drawn > svg .path{
            display: block;
            opacity: 1;
            stroke-dashoffset: 0;
        }

        .drawn{
            border-color: #fff;
        }

        [data-toggle="popover"]{
            cursor: pointer;
        }

        span.popover-content-remove {
            padding-left: 10px;
            color: red;
            cursor: pointer;
            float: right;
        }

        .pb10{
            padding-bottom: 10px;
        }

        .popover-header{
            text-align: center;
        }

        .popover{
            min-width: 200px;
        }
    </style>

@endsection