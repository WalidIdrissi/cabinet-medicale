@extends('layouts.app')

@section('content')
    <h1>Liste des détails d'analyse</h1>
    <table>
        <thead>
            <tr>
                <th>Analyses</th>
                <th>Type d'analyse</th>
                <th>Valeur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detailAnalyses as $detailAnalyse)
                <tr>
                    <td>{{ $detailAnalyse->analyse_id }}</td>
                    <td>{{ $detailAnalyse->type_analyse_id }}</td>
                    <td>{{ $detailAnalyse->valeur }}</td>
                    <td>
                        <a href="{{ route('detailanalyses.show', $detailAnalyse->id) }}">Voir</a>
                        <a href="{{ route('detailanalyses.edit', $detailAnalyse->id) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('detailanalyses.create') }}">Ajouter un détail d'analyse</a>
@endsection
