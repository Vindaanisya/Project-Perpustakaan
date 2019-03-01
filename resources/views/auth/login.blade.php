<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>V Library || Log In</title>
    @include('sc_head')
</head>
<div class="card" >
<body class="hold-transition login-page" style="background-image: url(img/green2.jpg);">
<div class="login-box">
  <div class="login-logo">
        <a href="../../index2.html"><h1><b>V Library</h1></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <h3 class="login-box-msg"><b>Login</h3>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }} ☻</strong>
            </span>
        @endif

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
            <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
        </form>

        <div class="rgstr" style="text-align:center; margin-top:10px; margin-bottom:10px; padding-bottom:5px">
        <a href="#">Lupa Password?</a><br>
        <a href="{{ route('register') }}" class="text-center">Belum Punya Akun? Silahkan Register</a>
        </div>
        </div>
    </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('sc_footer')
</body>
</html>
