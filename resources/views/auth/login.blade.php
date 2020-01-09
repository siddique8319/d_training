<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('icon/doofazit.png')}}">
   <title> Doofazit.com </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('assets/login/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('assets/login/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('assets/login/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('assets/login/css/colors/default.css')}}" id="theme" rel="stylesheet">
    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}


                    <h3 class="box-title m-b-20 text-center" style="font-size:25px;"> Admin Login </h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" style="border-top: 1px solid #ddd;" name="email" value="{{ old('email') }}" required autofocus placeholder="Email ">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <!--  <label for="password" class="col-md-4 control-label">Password</label>
 -->
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" style="border-top: 1px solid #ddd;" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup" > Remember me </label>
                            </div>
                            <!-- <a href="#" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>  -->
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> Log In </button>
                        </div>
                    </div>
                    <div class="row" style="display: none;">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                   
                </form>
                <form class="form-horizontal" id="recoverform" action="{{ route('password.request') }}">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3 style="font-size:25px;" class="text-center"> Recover Password </h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email"  name="email" value="{{ $email or old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{url('assets/login/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('assets/login/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{url('assets/login/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{url('assets/login/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('assets/login/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{url('assets/login/js/custom.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{url('assets/login/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
