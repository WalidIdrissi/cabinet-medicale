@extends('layouts.app')

@section('content')
    <h1>Ajouter un détail d'analyse</h1>
    <form action="{{ route('detailanalyses.store') }}" method="post">
        @csrf

        <label for="analyse_id">Analyse:</label>
        <select name="analyse_id" id="analyse_id">
            @foreach($analyses as $id => $date)
                <option value="{{ $id }}">{{ $date }}</option>
            @endforeach
        </select><br><br>

        <label for="type_analyse_id">Type d'analyse:</label>
        <select name="type_analyse_id" id="type_analyse_id">
            @foreach($typeAnalyses as $id => $type)
                <option value="{{ $id }}">{{ $type }}</option>
            @endforeach
        </select><br><br>

        <label for="valeur">Valeur:</label>
        <input type="text" id="valeur" name="valeur" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
