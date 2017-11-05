<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    @include('components.favicon')

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/style/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{url('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Login - Layout 3 | Canvas</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('components.front_nav')

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>My Account</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                        <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
                        <div class="acc_content clearfix">
                            <form id="login-form" name="login-form" class="nobottommargin" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="col_full">
                                    <label for="login-form-username">Email:</label>
                                    <input type="text" id="login-form-username" name="email" value="{{old('email')}}" class="form-control" />
                                    
                                    <!-- @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif -->
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="#" class="fright">Forgot Password?</a>
                                </div>
                            </form>
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
                        <div class="acc_content clearfix">
                            {!! Form::open(['route' => 'register', 'class' => 'nobottommargin', 'role' => 'form', 'method' => 'POST'] ) !!}
                                <div class="col_full">
                                    <label for="register-form-name">Name:</label>
                                    <input type="text" id="register-form-name" name="name" value="{{old('name')}}" class="form-control" />
                                     @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full">
                                    <label for="register-form-email">Email Address:</label>
                                    <input type="text" id="register-form-email" name="email" value="{{old('email')}}" class="form-control" />
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col_full">
                                    <label for="register-form-password">Choose Password:</label>
                                    <input type="password" id="register-form-password" name="password" value="{{old('password')}}" class="form-control" />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full">
                                    <label for="register-form-repassword">Re-enter Password:</label>
                                    <input type="password" id="register-form-repassword" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" />
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col_full nobottommargin">
                                    <button type="submit" class="button button-3d button-black nomargin" id="register-form-submit">Register Now</button>
                                </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

        @include('components.front_footer')
    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins.js')}}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/functions.js')}}"></script>

</body>
</html>