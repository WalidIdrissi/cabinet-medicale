@extends('adminlte::page')

@section('title')
Home| Cabinet Medicale App
@endsection



@section('content_header')
 <h1>Dashboard</h1>
@endsection

@section('content')
        <div class="container">
             <div class="row my-5">
                <div class="col-md-4">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{App\Models\Patient::count()}}</h3>
                                <p> Patients<p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>

                            </div>
                            <a href="{{url('admin/patients')}}" class="small-box-footer" >
                           pour  plus d'informations <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>

                  

                </div>
            
                <div class="col-md-4">
                     <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{App\Models\rendez_vous_medicale::count()}}</h3>
                            <p> Rendez_vous<p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>

                        </div>
                        <a href="{{url('admin/rendez_vous_medicales')}}" class="small-box-footer" >
                        pour  plus d'informations <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>


                 <div class="col-md-4">
                     <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{App\Models\traitement::count()}}</h3>
                            <p> Traitement<p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>

                        </div>
                        <a href="{{url('admin/traitements')}}" class="small-box-footer" >
                        pour  plus d'informations <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>
    </div>   
        
</div>
        
@endsection
