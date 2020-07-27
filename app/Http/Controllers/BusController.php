<?php

namespace App\Http\Controllers;
use App\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        
        public function index()
        {
            $bus = Bus::paginate(7);
            return view('Bus.index')
                   ->with("Bus" , $bus); 
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view("Bus.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $this->validate($request,[ 'idBus'=>'required', 'busMarca'=>'required', 'busModelo'=>'required', 'busCapacidad'=>'required', 'idPersonal'=>'required']);
            Bus::create($request->all());
            return redirect()->route('Bus.index')->with('success','BUs registrado    satisfactoriamente');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function show(bus $idBus)
        {
            $bus=Bus::find($idBus);
            return  view('Bus.show',compact('Bus'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function edit(bus $idBus)
        {
            $bus=Bus::find($idBus);
            return view('Bus.edit',compact('bus'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, bus $idBus)
        {
            $this->validate($request,[ 'idBus'=>'required', 'busMarca'=>'required', 'busModelo'=>'required', 'busCapacidad'=>'required']);
     
            Bus::find($idBus)->update($request->all());
            return redirect()->route('Bus.index')->with('success','Registro actualizado satisfactoriamente');
     
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\personal  $personal
         * @return \Illuminate\Http\Response
         */
        public function destroy(bus $personal)
        {
            //
        }
    
}
