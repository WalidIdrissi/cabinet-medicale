@extends('layouts.app')

@section('content')
    <h1>Ajouter une analyse</h1>
    <form action="{{ route('analyses.store') }}" method="post">
        @csrf
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="traitement_id">Traitement:</label>
        <select id="traitement_id" name="traitement_id" required>
            @foreach($traitements as $traitement)
                <option value="{{ $traitement->id }}">{{ $traitement->date }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
