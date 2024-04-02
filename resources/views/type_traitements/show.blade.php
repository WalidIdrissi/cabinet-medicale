@extends('adminlte::page')

@section('title')
Afficher le type_traitement| Cabinet Medicale App
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
                                        <h3>{{$type_traitement->type_traitement}} </h3>
                    
                                    </div>
                                </div>   
                                {{-- <div class="text-center font-weight-bold text-uppercase">
                                    <a href="" class="btn btn-outline-w"> imprimer les informations du patient </a>

                
                                </div>
                                <hr> --}}
                                <div class="card-body">
                                    
                                            <div class="form-group mb-3">
                                                <label for="id">ID</label>
                                                <input type="number"  disabled class="form-control rounded-0" 
                                                name="id"
                                                 
                                                 placeholder="id"
                                                value="{{$type_traitement->id}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="type_traitement">Type_traitement</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="type_traitement" placeholder="type_traitement"
                                                value="{{$type_traitement->type_traitement}}">

                                             </div>

                                           

                                           
                  
                            
                    </div>
                </div>
        </div>
@endsection
