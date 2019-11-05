@extends('layouts.public')
@section('content')
    <!-- Header Section End Here -->

    <!-- Site Content -->
    <div id="main">
        <!-- banner slider Start Here -->
        <section class="rev_slider_wrapper banner-section">
            <div class="rev_slider banner-slider">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('asset/img/bosco/3.jpeg')}}" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

                        <div
                                data-endspeed="500"
                                data-easing="easeOutCirc"
                                data-start="500"
                                data-speed="700"
                                data-y="103"
                                data-x="152"
                                class="tp-caption sft">
                            <span class="btn btn-bg">FEATURED CAUSE</span>
                        </div>

                        <div
                                data-endspeed="800"
                                data-easing="easeOutCirc"
                                data-start="800"
                                data-speed="700"
                                data-y="150"
                                data-x="152"
                                class="tp-caption sft banner-heading">
                            <h2 style="color:white"><strong>Donate &amp; Help</strong>

                                Raise Fund For Street Children and Their Education
                            </h2>
                        </div>

                        <div
                                data-endspeed="1000"
                                data-easing="easeOutCirc"
                                data-start="1000"
                                data-speed="700"
                                data-y="304"
                                data-x="152"
                                class="tp-caption sft banner-summary">

                        </div>

                        <div
                                data-endspeed="1200"
                                data-easing="easeOutCirc"
                                data-start="1200"
                                data-speed="700"
                                data-y="416"
                                data-x="152"
                                class="tp-caption sft">
                            <a  href="/donations"  class="btn btn-default" style="color:white">Donate NOW</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-2" >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('asset/img/bosco/30.jpeg')}}" alt="banner" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div
                                data-endspeed="500"
                                data-easing="easeOutCirc"
                                data-start="500"
                                data-speed="500"
                                data-y="406"
                                data-x="152"
                                class="tp-caption sfb feature-btn ">
                            <span class="btn btn-warning btn-sm">Help our course</span>
                        </div>
                        <div
                                data-endspeed="800"
                                data-easing="easeOutCirc"
                                data-start="800"
                                data-speed="500"
                                data-y="448"
                                data-x="152"
                                class="tp-caption sfb">
                            <div class="trans-grey"></div>
                        </div>
                        <div
                                data-endspeed="1500"
                                data-easing="easeOutCirc"
                                data-start="1500"
                                data-speed="1000"
                                data-y="466"
                                data-x="177"
                                class="tp-caption banner-heading bottom-animation text-white sfb">
                            <h2 class="h1"><strong>Donate &amp; Help</strong>

                                Street For Education</h2>
                        </div>
                        <div
                                data-endspeed="1700"
                                data-easing="easeOutCirc"
                                data-start="1700"
                                data-speed="700"
                                data-y="550"
                                data-x="177"
                                class="tp-caption sfb donate-button">
                            <a  href="/donations"  class="btn-link">Donate NOW</a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-3">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('asset/img/bosco/13.jpeg')}}" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

                        <div
                                data-endspeed="500"
                                data-easing="easeOutCirc"
                                data-start="500"
                                data-speed="700"
                                data-y="103"
                                data-x="152"
                                class="tp-caption sft banner-feaure">
                            <span class="btn btn-bg">FEATURED CAUSE</span>
                        </div>

                        <div
                                data-endspeed="800"
                                data-easing="easeOutCirc"
                                data-start="800"
                                data-speed="700"
                                data-y="150"
                                data-x="152"
                                class="tp-caption sft third-style banner-heading banner-title">
                            <h2><strong>Donate &amp; Help</strong>

                                Support African Children In Making Their Career</h2>
                        </div>
                        <div
                                data-endspeed="1000"
                                data-easing="easeOutCirc"
                                data-start="1000"
                                data-speed="700"
                                data-y="244"
                                data-x="152"
                                class="tp-caption sft third-style banner-summary banner-description">

                        </div>

                        <div
                                data-endspeed="1200"
                                data-easing="easeOutCirc"
                                data-start="1200"
                                data-speed="700"
                                data-y="354"
                                data-x="152"
                                class="tp-caption sft banner-btn">
                            <a href="/donations"  class="btn btn-default">Donate NOW</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- banner slider End Here -->
        <!-- Our Causes Section Start Here-->
        <section class="our-causes">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-header section-header clearfix">
                            <h2>Help multifarious children with your little donation. <strong> Your Token can help put smile on their faces</strong></h2>
                        </div>

                        <div class="article-list flexslider article-slider progressbar">
                            <ul class="slides">
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/6.jpeg')}}" alt="" style=>
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">72% </span>
                                            </div>
                                        </div>


                                        <a  href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/12.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">60% </span>
                                            </div>
                                        </div>


                                        <a href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/24.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">80% </span>
                                            </div>
                                        </div>


                                        <a href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/7.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">72% </span>
                                            </div>
                                        </div>


                                        <a href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/8.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">60% </span>
                                            </div>
                                        </div>


                                        <a href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/15.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">80% </span>
                                            </div>
                                        </div>


                                        <a href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/11.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">72% </span>
                                            </div>
                                        </div>


                                        <a  href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/28.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">60% </span>
                                            </div>
                                        </div>


                                        <a  href="/donations"  class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="items zoom">

                                        <a href="#" class="img-thumb">
                                            <figure>
                                                <img src="{{asset('asset/img/bosco/25.jpeg')}}" alt="">
                                            </figure>
                                        </a>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-value">80% </span>
                                            </div>
                                        </div>


                                        <a  href="/donations" class="btn btn-default">DONATE NOW</a>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Causes Section End Here-->

        <!-- How To Help Section Start Here -->
        <section class="how-to-help">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <header class="page-header section-header">
                            <h2>How you can help? <strong>See below</strong></h2>
                        </header>

                        <div class="row help-list">
                            <div class="col-xs-12 col-sm-6 col-lg-5">
                                <article class="media">
                                    <a class="pull-left warning-icon-box" href="our-story.html"><i class="icon-volume"></i></a>
                                    <div class="media-body less-width">
                                        <h3 class="media-heading">Media</h3>
                                        <p>
                                            Donate money anywhere &amp; anytime to offer help in Africans through different medias.
                                        </p>
                                    </div>
                                </article>
                                <article class="media">
                                    <a class="pull-left warning-icon-box" href="volunteer.html"><i class="icon-user"></i></a>
                                    <div class="media-body less-width">
                                        <h3 class="media-heading">Become Volunteer</h3>
                                        <p>
                                            Take initiate to become a volunteer and help those people, who do not have any hope for good living.
                                        </p>
                                    </div>
                                </article>
                                <article class="media">
                                    <a class="pull-left warning-icon-box" href="/donations"  ><i class="icon-heart"></i></a>
                                    <div class="media-body less-width">
                                        <h3 class="media-heading">Send Donation</h3>
                                        <p>
                                            Choose any medium either offline or online to send donation and aid NGOs to support people who are facing poverty.

                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-6 col-lg-offset-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <!--<img  src="{{asset('asset/img/bosco/31.jpeg')}}" alt="Click to play" data-video="http://www.youtube.com/embed/zP_D_YKnwi0?autoplay=1"/>-->
                                    <img  src="{{asset('asset/img/bosco/31.jpeg')}}" alt="Click to play"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- How To Help Section End Here-->

        <!-- Become Volunteer Section Start Here -->
        <section class="parallax-section parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-5">
                        <h2>Become <strong>Volunteer</strong></h2>
                        <p>
                            Spread the awareness of helping people, so that they can live a normal life in the society and educate their children that everyone deserves.
                        </p>
                        <a  href="/donations" data-target=".join-now-form" class="btn btn-default">Join Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Become Volunteer Section End Here -->

        <!-- Latest News Section Start Here -->
        <section class="latest-news ">
            <div class="container anim-section">
                <div class="row">
                    <div class="col-xs-12">
                        <header class="page-header section-header clearfix">
                            <h2>Checkout whats going on. <strong>Latest News</strong></h2>
                        </header>

                        <div class="article-list row">
                            @foreach($post as $posts)
                            <div class="items zoom col-xs-12 col-sm-4">
                                <a href="#" class="img-thumb">
                                    <figure>
                                        <?php $image=DB::table('image')->where('post_id', $posts->id)->first();?>

                                        <img src="{{asset('image/'.$image->image)}}" alt="" style="width:350px; height:200px">

                                    </figure>
                                </a>
                                <h3>{{$posts->title}}</h3>
                                <span class="date">{{date_format($posts->created_at,'F d,Y')}}
                                </span><span class="posted-in">Posted In : {{$posts->category->title}}</span>
                                <p>
                                    {{substr(strip_tags($posts->body), 0, 150)}}...
                                </p>
                                <a href="{{route('singlePost',$posts->id)}}" class="btn btn-default">READ MORE</a>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest News Section End Here -->

        <!--Testimonial Section Start Here -->
        <!--<section class="testimonial parallax">-->
        <!--    <div class="overlay"></div>-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-xs-12">-->
        <!--                <div class="testimonial-slider flexslider">-->
        <!--                    <ul class="slides">-->
        <!--                        <li>-->
        <!--                            <div class="slide">-->
        <!--                                <h2>Donation Holders say <strong> Read Below </strong></h2>-->
        <!--                                <blockquote>-->
        <!--                                    <p>-->
        <!--                                        “Most of the dimensions related to life of human and their their living condition are in trouble these days, so help them to take a voluntarily step.”-->
        <!--                                    </p>-->
        <!--                                    <footer>-->
        <!--                                        <span>TONY VEDVIK</span>-->
        <!--                                        <cite>(Head Sales of Sense Technology)</cite>-->
        <!--                                    </footer>-->
        <!--                                </blockquote>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="slide">-->
        <!--                                <h2>Donation Holders say <strong> Read Below</strong></h2>-->
        <!--                                <blockquote>-->
        <!--                                    <p>-->
        <!--                                        “Etiam imperdiet metus ut pretium gravida uisque et vestibulum lacus. Maecenas at lacinia lacus. ”-->
        <!--                                    </p>-->
        <!--                                    <footer>-->
        <!--                                        <span>Jhony Waker</span>-->
        <!--                                        <cite>(CEO at NewCompany)</cite>-->
        <!--                                    </footer>-->
        <!--                                </blockquote>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="slide">-->
        <!--                                <h2>Donation Holders say <strong> Read Below</strong></h2>-->
        <!--                                <blockquote>-->
        <!--                                    <p>-->
        <!--                                        “Most of the dimensions related to life of human and their their living condition are in trouble these days, so help them to take a voluntarily step.”-->
        <!--                                    </p>-->
        <!--                                    <footer>-->
        <!--                                        <span>TONY VEDVIK</span>-->
        <!--                                        <cite>(Head Sales of Sense Technology)</cite>-->
        <!--                                    </footer>-->
        <!--                                </blockquote>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--Testimonial Section End Here -->

    </div>
    <!--Content End Here -->
    <!--Footer Section Start Here -->
@endsection
