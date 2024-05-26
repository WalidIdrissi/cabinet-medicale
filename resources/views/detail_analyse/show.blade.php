@extends('layouts.app')

@section('content')
    <h1>Détails de l'analyse</h1>
    <ul>
        <li><strong>Analyses:</strong> {{ $detailAnalyse->analyse_id }}</li>
        <li><strong>Type d'analyse:</strong> {{ $detailAnalyse->type_analyse_id }}</li>
        <li><strong>Valeur:</strong> {{ $detailAnalyse->valeur }}</li>
    </ul>
    <a href="{{ route('detailanalyses.index') }}">Retour à la liste des détails d'analyse</a>
@endsection
