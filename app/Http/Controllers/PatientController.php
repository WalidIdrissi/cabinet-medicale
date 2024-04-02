<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $patients=Patient::all();
      return view('patients.index')->with([
        'patients'=>$patients

      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
      return view('patients.create');
      

     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->validate($request,[

            'id'=>'required|unique:patients,id',
            'nom'=>'required|string|max:255',
            'prenom'=>'required |string|max:255',
            'date_naissance'=>'required|date',
            'telephone'=>'required',
            'poids'=>'required',
            'taille'=>'required',
            'groupe_sanguin'=>'required',
            'antecedants_medicaux'=>'required'
       ]);
       Patient::create($request->except('_token'));
       return redirect()->route('patients.index')->with([
        'success'=>'Patient ajouté'
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $patient=Patient::where('id',$id)->first();
      return view('patients.show')->with([
          'patient'=>$patient
  
  ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $patient=Patient::where('id',$id)->first();
        return view('patients.edit')->with([
            'patient'=>$patient
    
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $patient=Patient::where('id',$id)->first();
        $this->validate($request,[

            'id'=>'required|unique:patients,id,'.$patient->id,
            'nom'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required',
            'telephone'=>'required',
            'poids'=>'required',
            'taille'=>'required',
            'groupe_sanguin'=>'required',
            'antecedants_medicaux'=>'required'
       ]);
       $patient->update($request->except('_token','_method'));
       return redirect()->route('patients.index')->with([
        'success'=>'Patient modifier '
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $patient=Patient::where('id',$id)->first();
        $patient->delete();
        return redirect()->route('patients.index')->with([
            'success'=>'patient supprimé'
        ]);
    }
}
