<!-- resources/views/typeanalyses/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Types of Analyses</h1>
    <a href="{{ route('typeanalyses.create') }}" class="btn btn-primary mb-2">Add New Type of Analysis</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typesAnalyses as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->type_analyse }}</td> <!-- Change 'name' to 'type_analyse' if that is the correct field -->
                    <td>
                        <a href="{{ route('typeanalyses.edit', $type->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('typeanalyses.destroy', $type->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
