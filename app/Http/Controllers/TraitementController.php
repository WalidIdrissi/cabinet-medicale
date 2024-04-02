<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Type_traitement;
use App\Models\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $traitements=Traitement::all();
        return view('traitements.index')->with([
          'traitements'=>$traitements
  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $patients = Patient::all(); // Récupère tous les patients depuis la base de données
        $type_traitements = Type_traitement::all();
        return view('traitements.create', compact('patients','type_traitements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'id'=>'required|unique:traitements,id',
            'patient_id'=>'required',
            'date'=>'required |date',
            'type_traitement_id'=>'required',
            'statut_paiement'=>'required',
            
            
       ]);
       Traitement::create($request->except('_token'));
       return redirect()->route('traitements.index')->with([
        'success'=>'traitement ajouté'
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $traitement = Traitement::findOrFail($id);
        $patients = Patient::all();
        $type_traitements = Type_traitement::all();
         // Récupérer tous les patients pour la liste déroulante
        return view('traitements.show')->with([
            'traitement' => $traitement,
            'patients' => $patients,
            'type_traitements' => $type_traitements,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $traitement = Traitement::findOrFail($id);
        $patients = Patient::all(); 
        $type_traitements = Type_traitement::all();
        // Récupérer tous les patients pour la liste déroulante
        return view('traitements.edit')->with([
            'traitement ' => $traitement ,
            'patients' => $patients,

         'type_traitements' => $type_traitements,
    
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        
        $traitement=Traitement::where('id',$id)->first();
        $this->validate($request,[
            'id'=>'required|unique:traitements,id',
            'patient_id'=>'required',
            'date'=>'required |date',
            'type_traitement_id'=>'required',
            'statut_paiement'=>'required',
            
       ]);
       $traitement->update($request->except('_token','_method'));
       return redirect()->route('traitements.index')->with([
        'success'=>'traitement modifié '
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
        $traitement=Traitement::where('id',$id)->first();
        $traitement->delete();
        return redirect()->route('traitements.index')->with([
            'success'=>'traitement supprimé'
        ]);
    }
}
