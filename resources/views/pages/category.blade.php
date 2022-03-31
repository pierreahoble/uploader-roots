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
        
<form action="{{url('addcategory')}}" method="POST">

  @csrf
  <div class="row">
      <div class="col-md-12">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Libelle de la Categorie</label>
            <input type="text" name="libelle" class="form-control" accept=".pdf,.docx" multiple required>
           
          </div>
      </div>

  </div>
 
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
      </div>
  </div>
</div>


    
@endsection