@extends('welcome')


@section('contenu')  


<div class="col-xl-12 col-lg-12">
  <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        
<form action="{{url('ajouter-sous-categorie')}}" method="POST">

  @csrf
  <div class="row">

    <div class="col-md-6">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Libelle de  Categorie</label>
          <select name="category" id="" class="form-control">
              <option value="">Choisir une catégorie</option>
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->libelle}}</option>
              @endforeach
          </select>
        </div>
    </div>

      <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Libelle de la Sous  Categorie</label>
            <input type="text" name="libelle" class="form-control" required>
           
          </div>
      </div>

  </div>
 
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
      </div>
  </div>
</div>


    
@endsection