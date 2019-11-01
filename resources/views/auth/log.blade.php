<!DOCTYPE html>
<html lang="en" class="login_page">

<!-- Mirrored from gebo-admin-3.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 10:19:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Don-Bosco NGO</title>

    <!-- Bootstrap framework -->
    <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}" />
    <!-- theme color-->
    <link rel="stylesheet" href="{{asset('admin/css/blue.css')}}" />
    <!-- tooltip -->
    <link rel="stylesheet" href="{{asset('admin/lib/qtip2/jquery.qtip.min.css')}}" />
    <!-- main styles -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/favicon.ico')}}" />

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/ie/html5.js')}}"></script>
    <script src="{{asset('admin/js/ie/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

<div class="login_box">

    <form action="{{ route('login') }}" method="post" id="login_form">
        <div class="top_b">Sign in to Admin Page</div>
        <div class="alert alert-info alert-login">
            Clear email and password field to see validation.
        </div>
        <div class="cnt_b">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control  @error('email') is-invalid @enderror input-sm" type="text" id="email" name="email" placeholder="user@mail.com"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control @error('password')@enderror input-sm" type="password" id="password" name="password" placeholder="Password" value="password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox"><label><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}} /> Remember me</label></div>
            </div>
        </div>
        <div class="btm_b clearfix">
            <button class="btn btn-default btn-sm pull-right" type="submit">Sign In</button>
            {{--            <span class="link_reg"><a href="#reg_form">Not registered? Sign up here</a></span>--}}
        </div>
    </form>

    {{--    <form action="http://gebo-admin-3.tzdthemes.com/dashboard.html" method="post" id="pass_form" style="display:none">--}}
    {{--        <div class="top_b">Can't sign in?</div>--}}
    {{--        <div class="alert alert-info alert-login">--}}
    {{--            Please enter your email address. You will receive a link to create a new password via email.--}}
    {{--        </div>--}}
    {{--        <div class="cnt_b">--}}
    {{--            <div class="formRow clearfix">--}}
    {{--                <div class="input-group">--}}
    {{--                    <span class="input-group-addon input-sm">@</span>--}}
    {{--                    <input type="text" placeholder="Your email address" class="form-control input-sm" />--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="btm_b tac">--}}
    {{--            <button class="btn btn-default" type="submit">Request New Password</button>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    {{--    <form action="http://gebo-admin-3.tzdthemes.com/dashboard.html" method="post" id="reg_form" style="display:none">--}}
    {{--        <div class="top_b">Sign up to Gebo Admin</div>--}}
    {{--        <div class="alert alert-warning alert-login">--}}
    {{--            By filling in the form bellow and clicking the "Sign Up" button, you accept and agree to <a data-toggle="modal" href="#terms">Terms of Service</a>.--}}
    {{--        </div>--}}
    {{--        <div id="terms" class="modal fade">--}}
    {{--            <div class="modal-dialog">--}}
    {{--                <div class="modal-content">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
    {{--                        <h3 class="modal-title">Terms and Conditions</h3>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        <p>--}}
    {{--                            Nulla sollicitudin pulvinar enim, vitae mattis velit venenatis vel. Nullam dapibus est quis lacus tristique consectetur. Morbi posuere vestibulum neque, quis dictum odio facilisis placerat. Sed vel diam ultricies tortor egestas vulputate. Aliquam lobortis felis at ligula elementum volutpat. Ut accumsan sollicitudin neque vitae bibendum. Suspendisse id ullamcorper tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum at augue lorem, at sagittis dolor. Curabitur lobortis justo ut urna gravida scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam vitae ligula elit.--}}
    {{--                            Pellentesque tincidunt mollis erat ac iaculis. Morbi odio quam, suscipit at sagittis eget, commodo ut justo. Vestibulum auctor nibh id diam placerat dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vel nunc sed tellus rhoncus consectetur nec quis nunc. Donec ultricies aliquam turpis in rhoncus. Maecenas convallis lorem ut nisl posuere tristique. Suspendisse auctor nibh in velit hendrerit rhoncus. Fusce at libero velit. Integer eleifend sem a orci blandit id condimentum ipsum vehicula. Quisque vehicula erat non diam pellentesque sed volutpat purus congue. Duis feugiat, nisl in scelerisque congue, odio ipsum cursus erat, sit amet blandit risus enim quis ante. Pellentesque sollicitudin consectetur risus, sed rutrum ipsum vulputate id. Sed sed blandit sem. Integer eleifend pretium metus, id mattis lorem tincidunt vitae. Donec aliquam lorem eu odio facilisis eu tempus augue volutpat.--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="cnt_b">--}}

    {{--            <div class="form-group">--}}
    {{--                <div class="input-group">--}}
    {{--                    <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-user"></i></span>--}}
    {{--                    <input class="form-control input-sm" type="text" id="r_email" name="r_email" placeholder="email" value="">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <div class="input-group">--}}
    {{--                    <span class="input-group-addon input-sm"><i class="glyphicon glyphicon-lock"></i></span>--}}
    {{--                    <input class="form-control input-sm" type="password" id="r_password" name="r_password" placeholder="Password" value="">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <div class="input-group">--}}
    {{--                    <span class="input-group-addon input-sm">@</span>--}}
    {{--                    <input class="form-control input-sm" type="text" id="r_email" name="r_email" placeholder="Your email address" value="">--}}
    {{--                </div>--}}
    {{--                <span class="help-block">The e-mail address is not made public and will only be used if you wish to receive a new password.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="btm_b tac">--}}
    {{--            <button class="btn btn-default" type="submit">Sign Up</button>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    {{--    <div class="links_b links_btm clearfix">--}}
    {{--        <span class="linkform"><a href="#pass_form">Forgot password?</a></span>--}}
    {{--        <span class="linkform" style="display:none">Never mind, <a href="#login_form">send me back to the sign-in screen</a></span>--}}
    {{--    </div>--}}

</div>

<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.actual.min.js')}}"></script>
<script src="{{asset('admin/lib/validation/jquery.validate.js')}}"></script>
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){

        //* boxes animation
        form_wrapper = $('.login_box');
        function boxHeight() {
            form_wrapper.animate({ marginTop : ( - ( form_wrapper.height() / 2) - 24) },400);
        };
        form_wrapper.css({ marginTop : ( - ( form_wrapper.height() / 2) - 24) });
        $('.linkform a,.link_reg a').on('click',function(e){
            var target	= $(this).attr('href'),
                target_height = $(target).actual('height');
            $(form_wrapper).css({
                'height'		: form_wrapper.height()
            });
            $(form_wrapper.find('form:visible')).fadeOut(400,function(){
                form_wrapper.stop().animate({
                    height	 : target_height,
                    marginTop: ( - (target_height/2) - 24)
                },500,function(){
                    $(target).fadeIn(400);
                    $('.links_btm .linkform').toggle();
                    $(form_wrapper).css({
                        'height'		: ''
                    });
                });
            });
            e.preventDefault();
        });

        //* validation
        $('#login_form').validate({
            onkeyup: false,
            errorClass: 'error',
            validClass: 'valid',
            rules: {
                email: { required: true, minlength: 3 },
                password: { required: true, minlength: 3 }
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass("f_error");
                setTimeout(function() {
                    boxHeight()
                }, 200)
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass("f_error");
                setTimeout(function() {
                    boxHeight()
                }, 200)
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
            }
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','{{asset('admin/www.google-analytics.com/analytics.js')}}','ga');

    ga('create', 'UA-65389904-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from gebo-admin-3.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 10:19:55 GMT -->
</html>
