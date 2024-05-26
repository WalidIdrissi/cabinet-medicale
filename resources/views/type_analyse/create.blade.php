<!-- resources/views/typesanalyses/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create a New Type of Analysis</h1>
    <form action="{{ route('typesanalyses.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
