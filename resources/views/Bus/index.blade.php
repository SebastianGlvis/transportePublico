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
          <div class="pull-left"><h3>Buses</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Bus.create') }}" class="btn btn-info" >Añadir Bus</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Placa</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Capacidad</th>
               <th>Conductor</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($Bus->count())  
              @foreach($Bus as $b)  
              <tr>
                <td>{{$b->idBus}}</td>
                <td>{{$b->busMarca}}</td>
                <td>{{$b->busModelo}}</td>
                <td>{{$b->busCapacidad}}</td>
                <td>{{$b->Personal()->get()->first()->perNombre}}  {{$b->Personal()->get()->first()->perApellido}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('BusController@edit', $b->idBus)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('BusController@destroy', $b->idBus)}}" method="post">
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
      {{ $Bus->links() }}
    </div>
  </div>
</section>
</body>
</html>