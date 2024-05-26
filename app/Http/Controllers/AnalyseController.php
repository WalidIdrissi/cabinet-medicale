<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analyse;
use App\Models\Ordonnance;

class AnalyseController extends Controller
{
    public function index()
    {
        $analyses = Analyse::all();
        return view('analyses.index', compact('analyses'));
    }

    public function create()
    {
        $ordonnances = Ordonnance::all();
        return view('analyses.create', compact('ordonnances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'ordonnance_id' => 'required|exists:ordonnances,id',
        ]);

        Analyse::create($request->all());

        return redirect()->route('analyses.index')
            ->with('success', 'Analyse created successfully.');
    }

    public function show(Analyse $analyse)
    {
        return view('analyses.show', compact('analyse'));
    }

    public function edit(Analyse $analyse)
    {
        $ordonnances = Ordonnance::all();
        return view('analyses.edit', compact('analyse', 'ordonnances'));
    }

    public function update(Request $request, Analyse $analyse)
    {
        $request->validate([
            'date' => 'required|date',
            'ordonnance_id' => 'required|exists:ordonnances,id',
        ]);

        $analyse->update($request->all());

        return redirect()->route('analyses.index')
            ->with('success', 'Analyse updated successfully');
    }

    public function destroy(Analyse $analyse)
    {
        $analyse->delete();

        return redirect()->route('analyses.index')
            ->with('success', 'Analyse deleted successfully');
    }
}
