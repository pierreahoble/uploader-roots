@extends('welcome')





@section('contenu')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libellé Catégories</th>
                        {{-- <th>Description</th>
                        <th>Voir</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $key => $category)
                        
                    <tr>
                        <td> {{$key+1}}</td>
                        <td> {{$category->libelle}}</td>
                        {{-- <td> {{$category->description_fichier}} </td>
                        <td>
                            <a href="{{url('voir',$category->id)}}" target="_blanc" class="btn btn-info btn-circle .btn-sm">
                                <i class="fas fa-eye" title="voir"></i>
                             </a>
                             <a href="{{url('updatecategory',$category->id)}}"  class="btn btn-primary btn-circle .btn-sm">
                                <i class="fas fa-edit" title="Modifier"></i>
                             </a>
                         </td> --}}
                    </tr>
                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Sous Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libellé sous catégories</th>
                        {{-- <th>Description</th>
                        <th>Voir</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($souscategories as $key => $souscategory)
                        
                    <tr>
                        <td> {{$key+1}}</td>
                        <td> {{$souscategory->libelle}}</td>
                        {{-- <td> {{$category->description_fichier}} </td>
                        <td>
                            <a href="{{url('voir',$category->id)}}" target="_blanc" class="btn btn-info btn-circle .btn-sm">
                                <i class="fas fa-eye" title="voir"></i>
                             </a>
                             <a href="{{url('updatecategory',$category->id)}}"  class="btn btn-primary btn-circle .btn-sm">
                                <i class="fas fa-edit" title="Modifier"></i>
                             </a>
                         </td> --}}
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
