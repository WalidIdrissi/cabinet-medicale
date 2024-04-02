@extends('adminlte::page')

@section('title')
Modifier le traitement| Cabinet Medicale App
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
                                        <h4>Modifier le traitement </h4>
                    
                                    </div>
                                </div>   
                                <div class="card-body">
                                    <form action="{{ route('traitements.update', [' traitement' => $traitement->id]) }}" 

                                            method="POST" class="mt-3" >
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group mb-3">
                                                <label for="id">ID</label>
                                                <input type="number" class="form-control" 
                                                name="id"
                                                 
                                                 placeholder="id"
                                                value="{{old('id',$traitement->id)}}">

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
                                                value="{{old('date',$traitement->date)}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="type_traitement_id">type_traitement</label>
                                                <select class="form-control" name="type_traitement_id">
                                                    @foreach($type_traitements as $type_traitement)
                                                        <option value="{{ $type_traitement->id }}">{{ $type_traitement->id }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="statut_paiement">statut_paiement</label>
                                                <input type="text" class="form-control" 
                                                name="statut_paiement" 
                                                placeholder="statut_paiement"
                                                value="{{old('statut_paiement',$traitement->statut_paiement)}}">

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
