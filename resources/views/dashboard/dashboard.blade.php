<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Rebanho Web</title>

<!-- Bootstrap Core CSS -->
<link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper"> 
  
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation"
			style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{{asset('/')}}">Rebanho Web</a> </div>
    <!-- /.navbar-header -->
    
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
        <ul class="dropdown-menu dropdown-messages">
          <li><a href="#">
            <div> <strong>Mensagem 1</strong> <span class="pull-right text-muted"> <em>Ontem</em> </span> </div>
            <div>...</div>
            </a></li>
          <li class="divider"></li>
          <li><a href="#">
            <div> <strong>Mensagem 2</strong> <span class="pull-right text-muted"> <em>Ontem</em> </span> </div>
            <div>...</div>
            </a></li>
          <li class="divider"></li>
          <li><a href="#">
            <div> <strong>Mensagem 3</strong> <span class="pull-right text-muted"> <em>Ontem</em> </span> </div>
            <div>...</div>
            </a></li>
          <li class="divider"></li>
          <li><a class="text-center" href="#"> <strong>Ler todas mensagens</strong> <i class="fa fa-angle-right"></i> </a></li>
        </ul>
        <!-- /.dropdown-messages --></li>
      <!-- /.dropdown -->
      <li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
        <ul class="dropdown-menu dropdown-tasks">
          <li><a href="#">
            <div>
              <p> <strong>Tarefa 1</strong> <span class="pull-right text-muted">40%
                Completo</span> </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success"
											role="progressbar" aria-valuenow="40" aria-valuemin="0"
											aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
              </div>
            </div>
            </a></li>
          <li class="divider"></li>
          <li><a href="#">
            <div>
              <p> <strong>Tarefa 2</strong> <span class="pull-right text-muted">20%
                Completo</span> </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-info" role="progressbar"
											aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
											style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
              </div>
            </div>
            </a></li>
          <li class="divider"></li>
          <li><a href="#">
            <div>
              <p> <strong>Tarefa 3</strong> <span class="pull-right text-muted">60%
                Completo</span> </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning"
											role="progressbar" aria-valuenow="60" aria-valuemin="0"
											aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
              </div>
            </div>
            </a></li>
          <li class="divider"></li>
          <li><a href="#">
            <div>
              <p> <strong>Tarefa 4</strong> <span class="pull-right text-muted">80%
                Completo</span> </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger"
											role="progressbar" aria-valuenow="80" aria-valuemin="0"
											aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
              </div>
            </div>
            </a></li>
          <li class="divider"></li>
          <li><a class="text-center" href="#"> <strong>Ver todas tarefas</strong> <i class="fa fa-angle-right"></i> </a></li>
        </ul>
        <!-- /.dropdown-tasks --></li>
      <!-- /.dropdown -->
      <li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> <i class="fa fa-bell fa-fw"></i> <i
						class="fa fa-caret-down"></i> </a>
        <ul class="dropdown-menu dropdown-alerts">
          <li><a href="#">
            <div> <i class="fa fa-comment fa-fw"></i> Novo comentário <span
										class="pull-right text-muted small">4 minutos</span> </div>
            </a></li>
          <li class="divider"></li>
          <li><a class="text-center" href="#"> <strong>Ver todos alertas</strong> <i class="fa fa-angle-right"></i> </a></li>
        </ul>
        <!-- /.dropdown-alerts --></li>
      <!-- /.dropdown -->
      <li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i
						class="fa fa-caret-down"></i> </a>
        <ul class="dropdown-menu dropdown-user">
        @if (Auth::guest())
			<li><a href="{{asset('login')}}"><i class="fa fa-user fa-fw"></i>Login</a></li>
			<li><a href="{{asset('register')}}"><i class="fa fa-user fa-fw"></i>Registrar</a></li>
        @else
          <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a></li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a> </li>
          <li class="divider"></li>
          <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
        @endif
        </ul>
        <!-- /.dropdown-user --></li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
              </span> </div>
            <!-- /input-group --> 
          </li>
          <li><a href="{{asset('/')}}"><i class="fa fa-dashboard fa-fw"></i> Painel de
            controle</a></li>
          <li><a href="#"><i class="fa fa-navicon fa-fw"></i> Rebanho<span
								class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li><a href="{{asset('rebanho/vacas')}}">Vacas</a></li>
              <li><a href="{{asset('rebanho/bois')}}">Bois</a></li>
              <li><a href="{{asset('rebanho/terneiros')}}">Terneiros</a></li>
            </ul>
            <!-- /.nav-second-level --></li>
          <li><a href="#"><i class="fa fa-navicon fa-fw"></i> Leite<span
								class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li><a href="{{asset('leite/coleta')}}">Coleta</a></li>
              <li><a href="{{asset('leite/relatorio')}}">Relatório</a></li>
            </ul>
          </li>
          <li><a href="{{asset('financeiro')}}"><i class="fa fa-dollar fa-fw"></i> Financeiro</a></li>
        </ul>
      </div>
      <!-- /.sidebar-collapse --> 
    </div>
    <!-- /.navbar-static-side --> 
  </nav>
  @yield('conteudo') 
</div>
<!-- /#wrapper --> 

<!-- jQuery --> 
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> 

<!-- Metis Menu Plugin JavaScript --> 
<script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script> 

<!-- Custom Theme JavaScript --> 
<script src="{{asset('dist/js/sb-admin-2.js')}}"></script>
</body>
</html>