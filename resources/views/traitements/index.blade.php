@extends('adminlte::page')

@section('title')
Liste des traitements| Cabinet Medicale App
@endsection



@section('content_header')
 <h1>Dashboard</h1>
@endsection

@section('content')
        <div class="container">
               
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card my-5">
                                <div class='card-header'>
                        
                                    <div class="text-center font-weight-bold text-uppercase">
                                        <h4> les traitements</h4>
                        
                        
                                    </div>
                                </div>   
                                
                               <div class="card-body"  style="overflow-x:auto ;" >
                                    <table id="myTable"  class=" table table-bodered table-stripped" >
                                        <thead>
                                                <tr>
                                                    <th> ID</th>
                                                    <th> patient_id </th>
                                                    <th>date</th>
                                                    
                                                    <th> type_traitement_id</th>
                                                    <th> statut_paiement</th>
                                                  
                                                    
                                                    <th> Actions</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($traitements as  $traitement)
                                                    <tr>
                                                        <td> {{$traitement->id  }}  </td>
                                                        <td>  {{$traitement->patient_id}} </td>
                                                        <td>  {{$traitement->date}} </td>
                                                        <td>  {{$traitement->type_traitement_id}} </td>
                                                        <td> {{$traitement->statut_paiement}} </td>
                                                      
                                                        
                                                        <td class="d-flex justify-content">   


                                                            <a href="{{route('traitements.show',$traitement->id)}}"
                                                            
                                                                class="btn btn-sm btn-primary">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{route('traitements.edit',$traitement->id)}}"
                                                                
                                                                class="btn btn-sm btn-warning mx-2">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <form id="deleteForm" action="{{route('traitements.destroy',$traitement->id)}}"  method="post">
                                                                 @method('DELETE')
                                                                 @csrf
                                                           
                                                            <button type="submit"
                                                                onclick="deletePat()"
                                                                class="btn btn-sm btn--danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                             </form>



                                                        </td>
                                                    </tr>
                                                


                                        @endforeach


                                        </tbody>
                                    </table>
                                </div> 
                            
                        </div>
                            
                    </div>
                </div>
        </div>
@endsection
@section('js')
    <script>
        function deletePat(){
            Swal.fire({
                title: "Êtes-vous sûre ?",
                text: "Vous ne pourrez pas revenir en arrière!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "oui, supprimer!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementbyId('deleteForm').submit();
                   
                }
            });



        }
    </script>
   @if(session()->has('success'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{session()->get('success')}} ",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
   @endif
@endsection