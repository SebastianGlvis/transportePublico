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
					<h3 class="panel-title">Nuevo Conductor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ url('Personal') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="perNombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre"><br>
										<input type="text" name="perApellido" id="npagina" class="form-control input-sm" placeholder="Ingresa apellido"><br>
								        <input type="number" name="perIdentificacion" class="form-control input-sm" placeholder="Ingresa identificacion"><br>
										<input type="text" name="perNacimiento" id="edicion" class="form-control input-sm" placeholder="Ingresa fecha de nacimientos" onfocus="(this.type='date')"><br>
										
                                        <input type="hidden" name="idRol" id="precio" class="form-control input-sm" value="3"><br>
                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block"><br>
									    <a href="{{ route('Personal.index') }}" class="btn btn-info btn-block" >Atrás</a>
									</div>
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