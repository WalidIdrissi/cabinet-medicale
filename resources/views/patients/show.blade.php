@extends('adminlte::page')

@section('title')
Afficher le patient| Cabinet Medicale App
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
                                        <h3>{{$patient->nom}} </h3>
                    
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
                                                value="{{$patient->id}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="nom">NOM</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="nom" placeholder="nom"
                                                value="{{$patient->nom}}">

                                             </div>

                                            <div class="form-group mb-3">
                                                <label for="prenom">PRENOM</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="prenom" placeholder="prenom"
                                                value="{{$patient->prenom}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="date_naissance">Date De Naissance</label>
                                                <input type="date"  disabled class="form-control rounded-0" 
                                                name="date_naissance" placeholder="date_naissance"
                                                value="{{$patient->date}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="telephone">TELEPHONE</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="telephone" 
                                                placeholder="telephone"
                                                value="{{$patient->telephone}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="poids">POIDS</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="poids" placeholder="poids"
                                                value="{{$patient->poids}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="taille">TAILLE</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="taille" placeholder="taille"
                                                value="{{$patient->taille}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="groupe_sanguin">Groupe Sanguin</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="groupe_sanguin" placeholder="groupe_sanguin"
                                                value="{{$patient->groupe_sanguin}}">

                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="antecedants_medicaux"> Les Antecedants Medicaux</label>
                                                <input type="text" disabled class="form-control rounded-0" 
                                                name="antecedants_medicaux" placeholder="antecedants_medicaux"
                                                value="{{$patient->antecedants_medicaux}}">

                                            </div>
                  
                            
                    </div>
                </div>
        </div>
@endsection
