<?php

namespace App\Http\Controllers;
use App\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        
        public function index()
        {
            $contrato = Contrato::paginate(5);
            return view('Contrato.index')
                   ->with("Contrato" , $contrato); 
        }
    
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(contrato $idPersonal)
        {
            $contrato=Contrato::find($idPersonal);
            return view('Contrato.create',compact('contrato'));
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $this->validate($request,[ 'conFechaInicio'=>'required', 'conFechaFin'=>'required', 'conValor'=>'required', 'idPersonal'=>'required']);
            Contrato::create($request->all());
            return redirect()->route('Personal.index')->with('success','Conductor registrado    satisfactoriamente');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function show(contrato $id)
        {
            $personal=Contrato::find($id);
            return  view('Contrato.show',compact('Contrato'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function edit($idContrato)
        {
            $contrato=Contrato::find($idContrato);
            return view('Contrato.edit',compact('contrato', $contrato));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $idContrato)
        {
            $this->validate($request,[ 'conFechaInicio'=>'required', 'conFechaFin'=>'required', 'conValor'=>'required']);
     
            Contrato::find($idContrato)->update($request->all());
            return redirect()->route('Contrato.index');
     
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function destroy(contrato $contrato)
        {
            //
        }
}
