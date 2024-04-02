@extends('adminlte::page')

@section('title')
Ajouter un nouveau type_traitement| Cabinet Medicale App
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
                                        <h4>Ajouter un nouveau type_traitement </h4>
                    
                                    </div>
                                </div>   
                                <div class="card-body">
                                    <form action="{{route('type_traitements.store')}}" 
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
                                                <label for="type_traitement">type_traitement</label>
                                                <input type="text" class="form-control" 
                                                name="type_traitement" placeholder="type_traitement"
                                                value="{{old('type_traitement')}}">

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
