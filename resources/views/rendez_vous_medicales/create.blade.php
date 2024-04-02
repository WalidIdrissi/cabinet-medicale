@extends('adminlte::page')

@section('title')
Ajouter un nouveau rendez-vous| Cabinet Medicale App
@endsection



@section('content_header')
 <h1>Dashboard</h1>
@endsection

@section('content')
        <div class="container">
            @include('layouts.alert')
                <div class="row">
               
                    <div class="col-md-7 mx-auto">
                        <div class="card my-5">
                                <div class='card-header'>
                        
                                    <div class="text-center font-weight-bold text-uppercase">
                                        <h4>Ajouter un nouveau rendez-vous </h4>
                    
                                    </div>
                                </div>   
                                <div class="card-body">
                                    <form action="{{route('rendez_vous_medicales.store')}}" 
                                            method="POST" class="mt-3" >
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="id">ID</label>
                                                <input type="number" class="form-control" 
                                                name="id"
                                                 
                                                 placeholder="id"
                                                value="{{old('id')}}">

                                            </div>
                                            

                                            <div class="form-group mb-3">
                                                <label for="patient_id">Patient</label>
                                                <select class="form-control" name="patient_id">
                                                    @foreach($patients as $patient)
                                                        <option value="{{ $patient->id }}">{{ $patient->id }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                

                                            <div class="form-group mb-3">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control" 
                                                name="date" placeholder="date"
                                                value="{{old('date')}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="heure">Heure</label>
                                                <input type="time" class="form-control" 
                                                name="heure" placeholder="heure"
                                                value="{{old('heure')}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="type">Type</label>
                                                <input type="text" class="form-control" 
                                                name="type" 
                                                placeholder="type"
                                                value="{{old('type')}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="statut">Statut</label>
                                                <input type="text" class="form-control" 
                                                name="statut" placeholder="statut"
                                                value="{{old('statut')}}">

                                            </div>

                                            

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                   submit
                                               </button>
                                         
                                            </div>

                                   
                                    </form>
                            
                    </div>
                </div>
        </div>
@endsection

