@extends('welcome')



@section('contenu')



<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le fichier</h6>
        </div>
        <div class="card-body">
            
            <form action="{{url('updatefile')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$file->id}}">
        
                @csrf
                <div class="row">
                    {{-- <div class="col-md-4">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Choisire le fichier</label>
                          <input type="file" name="file" class="form-control" accept=".pdf,.docx" required>
                         
                        </div>
                    </div> --}}
        
                    {{-- <div class="col-md-4">
                        
                        <div class="mb-3">
                            <label  class="form-label">Categotie du fichier</label>
                            <select name="cat" id="" class="form-select" required>
                                <option value="">Choisir la categorie du fichier</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->libelle}}">{{$category->libelle}}</option>   
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
        
                    <div class="col-md-12">
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description du Fichier</label>
                            <textarea name="description" id="" cols="30" rows="0" class="form-control " required> {{$file->description_fichier}} </textarea>
                        </div>
                    </div>
        
                </div>
               
                <button type="submit" class="btn btn-primary">Modifier</button>
              </form>
           
        </div>
    </div>
    
</div>

    
@endsection