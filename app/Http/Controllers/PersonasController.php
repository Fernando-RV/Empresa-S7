<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Personas::get();
        return view('personas', compact('personas'));
    }
    public function show($nPerCodigo){
        return view('show',[
            'persona' => Personas::find($nPerCodigo)
        ]);
    }
        public function create(){
        return view('create');
    }

    public function store(CreatePersonaRequest $request){

        Personas::create($request->validated());
 
        return redirect()->route('personas.index');
     }




     public function edit(Personas $persona)
    {
        return view('edit', [
            'persona' => $persona,
        ]);
    }

    public function update(Personas $persona, CreatePersonaRequest $request)
    {
        $persona->update($request->validated());
        return redirect()->route('persona.show', $persona);
    }

    public function destroy(Personas $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }
}