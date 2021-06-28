@extends('layouts.app')

@section('forgot-password')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIBESTRO | Forgot Password </title>

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
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-success">
  <div class="card-header text-center"><img src="{{asset('dist/img/logo-petro.png')}}" alt="Logo Petro"></div>
  
    <div class="card-body">
    @if (session('status'))
                    <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('status') }}
                     </div>
           
           
    @endif
    @error('email')
    <div class="alert bg-red     alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ $message}}
    </div>
                  
    @enderror
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      
      <form method="POST" action="{{ route('password.email') }}">
         @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  maxlength="40">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="/signin">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
</html>

@endsection
