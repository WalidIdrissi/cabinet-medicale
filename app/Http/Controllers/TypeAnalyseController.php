<?php

namespace App\Http\Controllers;

use App\Models\TypeAnalyse;
use Illuminate\Http\Request;

class TypeAnalyseController extends Controller
{
    public function index()
    {
        $typesAnalyses = TypeAnalyse::all();
        return view('typeanalyses.index', compact('typesAnalyses'));
    }

    public function create()
    {
        return view('typeanalyses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_analyse' => 'required|string|max:255',
        ]);

        TypeAnalyse::create($request->all());

        return redirect()->route('typeanalyses.index')->with('success', 'Type of analysis added successfully');
    }

    public function edit(TypeAnalyse $typeanalyse)
    {
        return view('typeanalyses.edit', compact('typeanalyse'));
    }

    public function update(Request $request, TypeAnalyse $typeanalyse)
    {
        $request->validate([
            'type_analyse' => 'required|string|max:255',
        ]);

        $typeanalyse->update($request->all());

        return redirect()->route('typeanalyses.index')->with('success', 'Type of analysis updated successfully');
    }

    public function destroy(TypeAnalyse $typeanalyse)
    {
        $typeanalyse->delete();

        return redirect()->route('typeanalyses.index')->with('success', 'Type of analysis deleted successfully');
    }
}
