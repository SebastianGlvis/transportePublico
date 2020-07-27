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
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Conductores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Personal.create') }}" class="btn btn-info" >Añadir Conductor</a>
            </div>
          </div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ url('Contratos') }}" class="btn btn-info" >Ver contratos</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Identificacion</th>
               <th>Fecha Nacimiento</th>
               <th>Registrar Contrato</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($Personal->count())  
              @foreach($Personal as $p)  
              <tr>
                <td>{{$p->perNombre}}</td>
                <td>{{$p->perApellido}}</td>
                <td>{{$p->perIdentificacion}}</td>
                <td>{{$p->perNacimiento}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('PersonalController@show', $p->idPersonal)}}" >Registrar</a></td>
                <td><a class="btn btn-primary btn-xs" href="{{action('PersonalController@edit', $p->idPersonal)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PersonalController@destroy', $p->idPersonal)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
              <tr><td><a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a><td></tr>
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $Personal->links() }}
    </div>
  </div>
</section>
</body>
</html>