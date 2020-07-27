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
          <div class="pull-left"><h3>Contrato</h3></div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
                 <th>Conductor</th> 
               <th>Fecha de inicio</th>
               <th>Fecha de Fin</th>
               <th>Valor</th>
               <th>Renovar</th>
             </thead>
             <tbody>
              @if($Contrato->count())  
              @foreach($Contrato as $c)  
              <tr>
              <td>{{$c->Personal()->get()->first()->perNombre}}  {{$c->Personal()->get()->first()->perApellido}}</td>
                <td>{{$c->conFechaInicio}}</td>
                <td>{{$c->conFechaFin}}</td>
                <td>{{$c->conValor}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ContratoController@edit', $c->idContrato)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <form action="{{action('PersonalController@destroy', $c->idPersonal)}}" method="post">
                   {{csrf_field()}}
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
              <tr><td><a href="{{ route('Personal.index') }}" class="btn btn-info btn-block" >Atrás</a><td></tr>
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $Contrato->links() }}
    </div>
  </div>
</section>
</body>
</html>