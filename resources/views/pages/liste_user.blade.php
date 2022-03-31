@extends('welcome')






@section('contenu')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Fichiers</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom </th>
                        {{-- <th>Categorie</th> --}}
                        <th>Email</th>
                        <th>Voir</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        
                    <tr>
                        <td> {{$user->name}}</td>
                        <td>{{$user->email}}   </td>
                        <td>
                            <a href=" {{url('update_user',['id'=>$user->id])}} " class="btn btn-primary btn-circle btn-sm">
                                <i class="fa fa-edit"></i>
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