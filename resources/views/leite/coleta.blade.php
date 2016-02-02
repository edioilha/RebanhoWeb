@extends('dashboard.dashboard')
@section('conteudo')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Calend&#225;rio de Coleta</h3>
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<div class="row">
							<div class="col-md-3 col-xs-4">
								<a class="btn btn-default btn-sm" href="{{asset('leite/coleta')}}/{{$prevmonth}}/{{$prevyear}}"><span
									class="glyphicon glyphicon-arrow-left"></span></a>
							</div>
							<div class="col-md-6 col-xs-4">
								<strong>{{$data}}</strong>
							</div>
							<div class="col-md-3 col-xs-4">
								<a class="btn btn-default btn-sm" href="{{asset('leite/coleta')}}/{{$nextmonth}}/{{$nextyear}}"><span
									class="glyphicon glyphicon-arrow-right"></span></a>
							</div>
						</div>
					</div>
					<table class="table table-bordered">
						<tr>
							<th>Dom</th>
							<th>Seg</th>
							<th>Ter</th>
							<th>Qua</th>
							<th>Qui</th>
							<th>Sex</th>
							<th>Sab</th>
						</tr>
						{!!$coleta!!}
					</table>
				</div>
			</div>
		</div>
	</div>
	@stop