<?php

namespace App\Http\Controllers;
use App\Models\Patient;  /*---------------IMPORTANTTT------------*/
use App\Models\Rendez_vous_medicale;
use Illuminate\Http\Request;

class RendezVousMedicaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendez_vous_medicales=Rendez_vous_medicale::all();
        return view('rendez_vous_medicales.index')->with([
          'rendez_vous_medicales'=>$rendez_vous_medicales
  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::all(); // Récupère tous les patients depuis la base de données
        return view('rendez_vous_medicales.create', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'id'=>'required|unique:Rendez_vous_medicales,id',
            'patient_id'=>'required',
            'date'=>'required |date',
            'heure'=>'required|date_format:H:i',
            'type'=>'required',
            'statut'=>'required',
            
       ]);
       Rendez_vous_medicale::create($request->except('_token'));
       return redirect()->route('rendez_vous_medicales.index')->with([
        'success'=>'rendez_vous ajouté'
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $rendez_vous_medicale = Rendez_vous_medicale::findOrFail($id);
        $patients = Patient::all(); // Récupérer tous les patients pour la liste déroulante
        return view('rendez_vous_medicales.show')->with([
            'rendez_vous_medicale' => $rendez_vous_medicale,
            'patients' => $patients
    ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $rendez_vous_medicale = Rendez_vous_medicale::findOrFail($id);
        $patients = Patient::all(); // Récupérer tous les patients pour la liste déroulante
        return view('rendez_vous_medicales.edit')->with([
            'rendez_vous_medicale' => $rendez_vous_medicale,
            'patients' => $patients
        
    
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $rendez_vous_medicale=Rendez_vous_medicale::where('id',$id)->first();
        $this->validate($request,[

            'id'=>'required|unique:rendez_vous_medicales,id,'.$rendez_vous_medicale->id,
            'patient_id'=>'required',
            'date'=>'required |date',
            'heure'=>'required|date_format:H:i',
            'type'=>'required',
            'statut'=>'required',
       ]);
       $rendez_vous_medicale->update($request->except('_token','_method'));
       return redirect()->route('rendez_vous_medicales.index')->with([
        'success'=>'Rendez_vous modifié '
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $rendez_vous_medicale=Rendez_vous_medicale::where('id',$id)->first();
        $rendez_vous_medicale->delete();
        return redirect()->route('rendez_vous_medicales.index')->with([
            'success'=>'rendez_vous supprimé'
        ]);
    }
}
