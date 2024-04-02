<?php

namespace App\Http\Controllers;

use App\Models\Type_traitement;
use Illuminate\Http\Request;

class TypeTraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_traitements=Type_traitement::all();
        return view('type_traitements.index')->with([
        'type_traitements'=>$type_traitements

      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_traitements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'id'=>'required|unique:type_traitements,id',
            'type_traitement'=>'required|string|max:255',
           
       ]);
       Type_traitement::create($request->except('_token'));
       return redirect()->route('type_traitements.index')->with([
        'success'=>'Type_traitement ajouté'
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $type_traitement=Type_traitement::where('id',$id)->first();
      return view('type_traitements.show')->with([
          'type_traitement'=>$type_traitement
  
  ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $type_traitement=Type_traitement::where('id',$id)->first();
        return view('type_traitements.edit')->with([
            'type_traitement'=>$type_traitement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $type_traitement=Type_traitement::where('id',$id)->first();
        $this->validate($request,[

            'id'=>'required|unique:type_traitements,id,'.$type_traitement->id,
            'type_traitement'=>'required|string|max:255',
            
       ]);
       $type_traitement->update($request->except('_token','_method'));
       return redirect()->route('type_traitements.index')->with([
        'success'=>'Type_traitement modifié'
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $type_traitement=Type_traitement::where('id',$id)->first();
        $type_traitement->delete();
        return redirect()->route('type_traitements.index')->with([
            'success'=>'type_traitement supprimé'
        ]);
    }
}
