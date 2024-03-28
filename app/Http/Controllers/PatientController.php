<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nom' => 'required|string|max:255',
    //         'prenom' => 'required|string|max:255',
    //         'date_naissance' => 'required|date',
    //         'telephone' => 'required|string|max:255',
    //         'poids' => 'required|integer|min:0',
    //         'taille' => 'required|integer|min:0',
    //         'groupe_sanguin' => 'required|string|max:255',
    //         'antecedants_medicaux' => 'required|string|max:255',
    //     ]);
    //     Patient::create($request->all());
    //     return redirect()->route('patient.index')->with('success', 'Le patient a été créé avec succès.');
    // }
    public function store(Request $request)
    {
       $this->validate($request,[
            // 'id'=>'required|unique:patients,id',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'telephone' => 'required|string|max:255',
            'poids' => 'required|integer|min:0',
            'taille' => 'required|integer|min:0',
            'groupe_sanguin' => 'required|string|max:255',
            'antecedants_medicaux' => 'required|string|max:255',
       ]);
       Patient::create($request->except('_token'));
       return redirect()->route('patients.index')->with(['success'=>'Patient ajouté']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Patient $patient)
    // {
    //     $request->validate([
    //         'nom' => 'required|string|max:255',
    //         'prenom' => 'required|string|max:255',
    //         'date_naissance' => 'required|date',
    //         'telephone' => 'required|string|max:255',
    //         'poids' => 'required|integer|min:0',
    //         'taille' => 'required|integer|min:0',
    //         'groupe_sanguin' => 'required|string|max:255',
    //         'antecedants_medicaux' => 'required|string|max:255',
    //     ]);
    //     $patient->update([
    //         'nom' => $request->input('nom'),
    //         'prenom' => $request->input('prenom'),
    //         'date_naissance' => $request->input('date_naissance'),
    //         'telephone' => $request->input('telephone'),
    //         'poids' => $request->input('poids'),
    //         'taille' => $request->input('taille'),
    //         'groupe_sanguin' => $request->input('groupe_sanguin'),
    //         'antecedants_medicaux' => $request->input('antecedants_medicaux'),
    //     ]);
    //     // return redirect()->route('patient.index')->with('success', 'Le patient a été modifié avec succès.');
    // }

    public function update(Request $request,  $id)
    {
        $patient=Patient::where('id',$id)->first();
        $this->validate($request,[

            // 'id'=>'required|unique:patients,id,'.$patient->id,
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'telephone' => 'required|string|max:255',
            'poids' => 'required|integer|min:0',
            'taille' => 'required|integer|min:0',
            'groupe_sanguin' => 'required|string|max:255',
            'antecedants_medicaux' => 'required|string|max:255',
       ]);
       $patient->update($request->except('_token','_method'));
       return redirect()->route('patients.index')->with(['success'=>'Patient modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        // $patient=Patient::where('id',$id)->first();
        $patient->delete();
        return redirect()->route('patients.index')->with(['success'=>'patient supprimé']);
    }
}
