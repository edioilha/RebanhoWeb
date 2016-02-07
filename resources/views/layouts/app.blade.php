<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rebanho Web</title>

<!-- Custom Fonts -->
<link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
{{--
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
--}}
<style>
body {
	font-family: 'Lato';
}
.fa-btn {
	margin-right: 6px;
}
</style>
</head><body id="app-layout">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header"> 
      
      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      
      <!-- Branding Image --> 
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse"> 
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">Rebanho Web</a></li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links --> 
        @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Criar conta</a></li>
        @else
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span> </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
@yield('content') 

<!-- jQuery --> 
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> 
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
