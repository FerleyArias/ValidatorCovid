<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;

class PersonasController extends Controller
{

    public function index()
    {
        $personas = Personas::orderBy('nombres', 'asc')->get();

        return [
            'datos'=>$personas
        ];
    }

    public function store(Request $request)
    {
        $personas = new Personas();
        $personas->tp_doc= $request->tpDoc;
        $personas->num_doc= $request->numDoc;
        $personas->nombres= $request->nombres;
        $personas->apellidos= $request->apellidos;
        $personas->edad= $request->edad;
        $personas->genero= $request->genero;
        $personas->telefono= $request->telefono;
        $personas->direccion= $request->direccion;
        $personas->email= $request->email;
        $personas->tp_perso= $request->tpPerso;

        $personas->save();

    }

    public function update(Request $request)
    {
        //
        $personas = Personas::findOrFail($request->id);
        $personas->tp_doc= $request->tpDoc;
        $personas->num_doc= $request->numDoc;
        $personas->nombres= $request->nombres;
        $personas->apellidos= $request->apellidos;
        $personas->edad= $request->edad;
        $personas->genero= $request->genero;
        $personas->telefono= $request->telefono;
        $personas->direccion= $request->direccion;
        $personas->email= $request->email;
        $personas->tp_perso= $request->tpPerso;

        $personas->save();
    }
    
    public function destroy($id)
    {
        //
    }
}
