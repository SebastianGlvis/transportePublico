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
					<h3 class="panel-title">Modificar conductor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="post" action='{{ url("Personal/update/$personal->idPersonal") }}'  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="perNombre" id="nombre" class="form-control input-sm" value="{{$personal->perNombre}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="perApellido" id="nombre" class="form-control input-sm" value="{{$personal->perApellido}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="perIdentificacion" id="npagina" class="form-control input-sm" value="{{$personal->perIdentificacion}}">
									</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="perNacimiento" id="npagina" class="form-control input-sm" value="{{$personal->perNacimiento}}" onclick="type='date'">
									</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="user" id="npagina" class="form-control input-sm" value="{{$personal->user}}">
									</div>
                                </div>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Modificar" class="btn btn-success btn-block">
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