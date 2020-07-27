<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {  
    
        $personal = Personal::paginate(10);
        return view('Personal.index')
               ->with("Personal" , $personal); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Personal.create");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['perNombre'=>'required', 'perApellido'=>'required', 'perIdentificacion'=>'required', 'perNacimiento'=>'required', 'idRol'=>'required']);
        Personal::create($request->all());
        return redirect()->route('Personal.index')->with('success','Conductor registrado    satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show($idPersonal)
    {
        $personal=Personal::find($idPersonal);
        return view('Contrato.create',compact('personal', $personal));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit($idPersonal)
    {
        $personal=Personal::find($idPersonal);
        return view('Personal.edit',compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPersonal)
    {
        $this->validate($request,['perNombre'=>'required', 'perApellido'=>'required', 'perIdentificacion'=>'required', 'perNacimiento'=>'required']);
 
        Personal::find($idPersonal)->update($request->all());
        return redirect()->route('Personal.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(personal $personal)
    {
        //
    }
}
