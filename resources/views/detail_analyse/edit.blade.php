@extends('layouts.app')

@section('content')
    <h1>Modifier un détail d'analyse</h1>
    <form action="{{ route('detailanalyses.update', $detailAnalyse->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="analyse_id">Analyse:</label>
        <select name="analyse_id" id="analyse_id">
            @foreach($analyses as $id => $date)
                <option value="{{ $id }}" {{ $id == $detailAnalyse->analyse_id ? 'selected' : '' }}>{{ $date }}</option>
            @endforeach
        </select><br><br>

        <label for="type_analyse_id">Type d'analyse:</label>
        <select name="type_analyse_id" id="type_analyse_id">
            @foreach($typeAnalyses as $id => $type)
                <option value="{{ $id }}" {{ $id == $detailAnalyse->type_analyse_id ? 'selected' : '' }}>{{ $type }}</option>
            @endforeach
        </select><br><br>

        <label for="valeur">Valeur:</label>
        <input type="text" id="valeur" name="valeur" value="{{ $detailAnalyse->valeur }}" required><br><br>

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
