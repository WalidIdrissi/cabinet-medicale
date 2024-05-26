@extends('layouts.app')

@section('content')
    <h1>Modifier l'analyse</h1>
    <form action="{{ route('analyses.update', $analyse->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $analyse->date }}" required><br><br>

        <label for="traitement_id">Traitement:</label>
        <select id="traitement_id" name="traitement_id" required>
            @foreach($traitements as $traitement)
                <option value="{{ $traitement->id }}" @if($traitement->id == $analyse->traitement_id) selected @endif>{{ $traitement->date }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
