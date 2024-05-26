@extends('layouts.app')

@section('content')
    <h1>Liste des analyses</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Traitement</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($analyses as $analyse)
                <tr>
                    <td>{{ $analyse->date }}</td>
                    <td>{{ $analyse->traitement->date }}</td>
                    <td>
                        <a href="{{ route('analyses.show', $analyse->id) }}">Voir</a>
                        <a href="{{ route('analyses.edit', $analyse->id) }}">Modifier</a>
                        <form action="{{ route('analyses.destroy', $analyse->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('analyses.create') }}">Ajouter une analyse</a>
@endsection
