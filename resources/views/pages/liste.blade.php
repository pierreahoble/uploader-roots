@extends('welcome')


@section('contenu')


  <!-- Area Chart -->

  @include('layout.message')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Fichiers</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom du Fichier</th>
                        <th>Categorie du Fichier</th>
                        <th>Description</th>
                        <th>Voir</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($files as $file)
                        
                    <tr>
                        <td> {{$file->nom_fichier}}</td>
                        <td> {{ $file->categorie->libelle}} </td>
                        <td> {{$file->description_fichier}} </td>
                        <td>
                            <a href="{{url('voir',$file->id)}}" target="_blanc" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-eye" title="voir"></i>
                             </a>
                             <a href="{{url('updatefile',$file->id)}}"  class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit" title="Modifier"></i>
                             </a>
                         </td>
                    </tr>
                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection


@section('script')

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

   <!-- Page level custom scripts -->
   <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    
@endsection

