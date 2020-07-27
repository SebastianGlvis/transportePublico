<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index()
    {
        $ruta = Ruta::paginate();
        return view('Ruta.index')
               ->with("Ruta" , $ruta); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Ruta.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'idRuta'=>'required', 'rutParaderos'=>'required', 'idBus'=>'required']);
        Ruta::create($request->all());
        return redirect()->route('Ruta.index')->with('success','Ruta registrada   satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(bus $idRuta)
    {
        $bus=Ruta::find($idRuta);
        return  view('Ruta.show',compact('Ruta'));
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