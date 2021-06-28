@extends('layouts.app')

@section('login')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIBESTRO | Log in </title>

  
</head>
<style>
      /* unvisited link */
      a:link {
        color: #28A745;
      }
      /* visited link */
      a:visited {
        color: #28A745;
      }
      /* mouse over link */
      a:hover {
        color: #15802d;
      }
      /* selected link */
      a:active {
        color: #800000;
      }
    </style>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
  <div class="card-header text-center"><img src="{{asset('dist/img/logo-petro.png')}}" alt="Logo Petro"></div>


    
    
    <div class="card-body">
    @if ($message = Session::get('error'))
  
        <div class="alert bg-red     alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ $message}}
        </div>
                                    
    @endif
    @if (session('status'))
        <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('status') }}
        </div>
           
           
    @endif
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
         @csrf

        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus maxlength="40">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password"maxlength="40">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      
        <br>
        <div style="color:green">
        <a href="{{ route('password.request') }}">I forgot my password</a>
        </div>
      
     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</body>
</html>

@endsection


