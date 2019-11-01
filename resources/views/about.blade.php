@extends('layouts.public')
@section('content')
    <div id="main">
        <!-- Breadcrumb Section Start Here -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>About us</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">
                                We are
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End Here -->

        <div class="content-wrapper" id="page-info">
            <div class="container">
                <!-- Our Story Section Start Here -->
                <section class="our-story row">
                    <div class="col-xs-12">
                        <header class="story-heading section-header">
                            <h2>Who we are? <strong>Read our Story</strong></h2>
                        </header>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <section class="slider-wrap flex-slide flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="assets/img/img-slide-01.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="assets/img/img-slide-02.jpg" alt="">
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <div class="col-xs-12 col-sm-7">

                                <h6>
                                    <b>Bosco Boys Street Children Home</b> is an establishment dedicated to improving the lives of vulnerable children (Street Children) at
                                    risk providing shelter, education, emotional support, protection and life skill empowerment for Lagos state, and Nigeria at large.
                                    It is managed by the <b>Salesians of St. John Bosco,</b> an international religious congregation of the Catholic Church founded by St. John Bosco.
                                    The Home is duly approved by the Lagos State Ministry of Youth and Social Development as a rehabilitation home for street and vulnerable kids.
                                   <br><br> <strong>Why street boys?</strong><br><br> We believe that every child on the street has great potential.  He is the great future of his generation. We believe with father
                                    Flanagan that “There are no bad boys. There is only bad environment, bad training, bad example, bad training.” We believe in the bright side of life
                                    of every vulnerable child, and that they are our greatest wealth. “Give them a chance and they will give a good account of themselves.” 	 </h6>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Our Story Section Start Here -->
                <!-- What We Do Section Start Here-->
                <div class="detail-description">
                <section>
                    <div class="step-donation">
                        <p class="donation-summary">

                            <u><b>Our Method</b> </u><br>
                            The use of Don Bosco Preventive system of Education
                            3 Pillars of Preventive system: Reason, Religion, Loving-Kindness<br>

                            <b> OUR SHELTER CAPACITY</b> <br> Presently we have 12 boys of the age limit of 10-17years old.
                        </p>

                        <section class="our-works row anim-section">
                        <div class="text-center">

                            <div class="col-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">

                                    <h4 class="normal-text">Our Programmes</h4>
                                    <h4 class="normal-text">
                                        Street outreach & sensitization<br>
                                        Feeding program<br>
                                        Shelter & Rehabilitation
                                        Admission into the home
                                        Personal & group counseling
                                        Personality building<br>
                                        Life skills & Emotional support
                                    </h4>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">

                                    <h4 class="normal-text">Our Programmes</h4>
                                    <h4 class="normal-text">
                                        Back to School
                                        Enrolment into formal Primary education
                                        Enrolment into formal Secondary education
                                        Adult education
                                    </h4>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">

                                    <h4 class="normal-text">Our Programmes</h4>
                                    <h4 class="normal-text">
                                        Skills Empowerment
                                        Sports & Recreation
                                        Talent Development
                                        Music, choreography, Drama, Etc.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        </section>
                        <div class="text-center">

                            <div class="col-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">
                                    <span class="number-count">1</span>
                                    <h4 class="normal-text">Our Mission</h4>
                                    <p>
                                        To shelter, care, rehabilitate, educate and re-integrate into their family and society.
                                    </p>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">
                                    <span class="number-count">2</span>
                                    <h4 class="normal-text">Our Vision</h4>
                                    <p>
                                        To become a world class child protection and rehabilitation home where vulnerable children and young people
                                        can grow, be empowered through education to live dignified life and become productive and contributive citizens of Nigeria.
                                    </p>
                                </div>

                            </div>

                            <div class="cols-xs-12 col-sm-4 anim-section">
                                <div class="sec-step-desc">
                                    <span class="number-count">3</span>
                                    <h4 class="normal-text">Our Core Value</h4>
                                    <p>
                                        Family Spirit / Care / Protection/Accountability / Respect for Life / Empowerment
                                    </p>
                                </div>

                            </div>

                        </div>

                        <!--step donation-->

                    </div>
                </section>
                </div>

                <section class="our-works row anim-section">
                    <div class="col-xs-12">
                        <header class="work-block-heading section-header">
                            <h2>What we do? <strong>See Our Works</strong></h2>
                        </header>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail zoom">
                                    <h3>Personal Funds</h3>
                                    <a href="blog-full-width.html" class="img-thumb">
                                        <figure>
                                            <img src="assets/img/img-slide-01.jpg" alt="">
                                        </figure>
                                    </a>
                                    <p>
                                        We support to you raise fund for charity causes that can be used to improve the quality of African children, who are living in the worst condition.
                                    </p>
                                    <p>
{{--                                        <a href="blog-full-width.html" class="btn btn-default btn-sm" role="button">READ MORE</a>--}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail zoom">
                                    <h3>Creative Events</h3>
                                    <a href="blog-full-width.html" class="img-thumb">
                                        <figure>
                                            <img src="assets/img/img-slide-02.jpg" alt="">
                                        </figure>
                                    </a>
                                    <p>
                                        Charity organizes different event to raise money for children’s welfare. We have generated around 80% of the resource through different events.
                                    </p>
                                    <p>
{{--                                        <a href="blog-full-width.html" class="btn btn-default btn-sm" role="button">READ MORE</a>--}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail zoom">
                                    <h3>Sponsorships</h3>
                                    <a href="blog-full-width.html" class="img-thumb">
                                        <figure>
                                            <img src="assets/img/img-slide-05.jpg" alt="">
                                        </figure>
                                    </a>
                                    <p>
                                        Our sponsorships program has not only helped us achieve mission, but also helped sponsor boost their businesses.
                                    </p>
                                    <p>
{{--                                        <a href="blog-full-width.html" class="btn btn-default btn-sm" role="button">READ MORE</a>--}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <h3>Investors</h3>
                                    <a href="blog-full-width.html" class="img-thumb">
                                        <figure>
                                            <img src="assets/img/img-slide-03.jpg" alt="">
                                        </figure>
                                    </a>
                                    <p>
                                        Join us? Be a part of our family of investors, whose contribution have propelled us to reach to the envisioned goal without any problem.
                                    </p>
                                    <p>
{{--                                        <a href="blog-full-width.html" class="btn btn-default btn-sm" role="button">READ MORE</a>--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- What We Do Section Start Here-->
            </div>



            <!-- Helping Section Start here-->
            <section class="helping-child parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-5">
                            <h2 class="h1">Helping child in <strong class="border-none">Africa</strong></h2>
                           <h2 class="h1">SUPPORT US!!!
                            Feed a child a day with ₦500 daily
                            Sponsor a child’s education
                            Clothe a child</h2>
                            <p>You are Just A Few Clicks Away To Bring Smile To Children. </p>
                            <a href="/donations" class="btn btn-theme">Donate now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Helping Section Start here-->

            <!-- Our Team Section Start Here -->
            <div class="container">
                <div class="our-team text-center row">
                    <div class="col-xs-12">
                        <header class="team-info section-header">
                            <h2>We are Real. <strong class="border-none">Meet the Team</strong></h2>
                        </header>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 anim-section">
                                <div class="thumbnail">
                                    <figure>
                                        <img src="asset/img/bosco/pr.jpeg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 anim-section">
                                <div class="thumbnail">
                                    <figure>
                                        <img src="asset/img/bosco/in2.jpeg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 anim-section">
                                <div class="thumbnail">
                                    <figure>
                                        <img src="asset/img/bosco/in3.jpeg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 anim-section">
                                <div class="thumbnail">
                                    <figure>
                                        <img src="asset/img/bosco/in4.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Team Section Start Here -->

        </div>

    </div>
@endsection