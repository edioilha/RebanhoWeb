@extends('dashboard.dashboard')
@section('conteudo')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Calend&#225;rio de coleta</h3>
				<div class="panel panel-default">
					{!!$coleta!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop