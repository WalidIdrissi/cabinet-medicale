<?php
namespace App\Http\Controllers;

use App\Models\DetailAnalyse;
use App\Models\Analyse;
use App\Models\TypeAnalyse;
use Illuminate\Http\Request;

class DetailAnalyseController extends Controller
{
    public function index()
    {
        $detailAnalyses = DetailAnalyse::all();
        return view('detailanalyses.index', compact('detailAnalyses'));
    }

    public function create()
    {
        $analyses = Analyse::pluck('id', 'date');
        $typeAnalyses = TypeAnalyse::pluck('id', 'type_analyse');
        return view('detailanalyses.create', compact('analyses', 'typeAnalyses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'analyse_id' => 'required',
            'type_analyse_id' => 'required',
            'valeur' => 'required',
        ]);

        DetailAnalyse::create($request->all());

        return redirect()->route('detail_analyses.index')->with('success', 'Détail d\'analyse créé avec succès.');
    }

    public function show(DetailAnalyse $detailAnalyse)
    {
        return view('detailanalyses.show', compact('detailAnalyse'));
    }

    public function edit(DetailAnalyse $detailAnalyse)
    {
        $analyses = Analyse::pluck('id', 'date');
        $typeAnalyses = TypeAnalyse::pluck('id', 'type_analyse');
        return view('detailanalyses.edit', compact('detailAnalyse', 'analyses', 'typeAnalyses'));
    }

    public function update(Request $request, DetailAnalyse $detailAnalyse)
    {
        $request->validate([
            'analyse_id' => 'required',
            'type_analyse_id' => 'required',
            'valeur' => 'required',
        ]);

        $detailAnalyse->update($request->all());

        return redirect()->route('detailanalyses.index')->with('success', 'Détail d\'analyse mis à jour avec succès.');
    }

    public function destroy(DetailAnalyse $detailAnalyse)
    {
        $detailAnalyse->delete();

        return redirect()->route('detailanalyses.index')->with('success', 'Détail d\'analyse supprimé avec succès.');
    }
}

