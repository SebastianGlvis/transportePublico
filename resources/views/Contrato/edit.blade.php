<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Renovar contrato</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action='{{ url("Contrato/update/$contrato->idContrato") }}'  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                
                                        <label for="">{{$contrato->Personal()->get()->first()->perNombre}}  {{$contrato->Personal()->get()->first()->perApellido}}</label>
									</div>
								</div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="conFechaInicio" id="nombre" class="form-control input-sm" value="{{$contrato->conFechaInicio}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="conFechaFin" id="nombre" class="form-control input-sm" value="{{$contrato->conFechaFin}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="conValor" id="npagina" class="form-control input-sm" value="{{$contrato->conValor}}">
									</div>
                                </div>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Renovar" class="btn btn-success btn-block">
									<a href="{{ route('Personal.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
</body>
</html>