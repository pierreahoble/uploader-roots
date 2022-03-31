@extends('welcome')






@section('contenu')

<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Choisissez Les Fichiers</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="{{url('user')}}" method="POST" enctype="multipart/form-data"> 
                @csrf

                    
                        <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nom utilisateur</label>
                                    <input type="text" name="name" id="exampleInputEmail1" class="form-control" required >
                                    
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail12" class="form-label">Email utilisateur</label>
                                    <input type="email" name="email" id="exampleInputEmail12" class="form-control" required >
                                    
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail13" class="form-label">Mot de Passe utilisateur</label>
                                    <input type="password" name="password" id="exampleInputEmail13" class="form-control" required >
                                    
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail13" class="form-label">Droit sur les categories </label>
                                    <select name="categorie" id="" class="form-control">
                                        <option value="0"></option>
                                        <option value="1"> Administrateur </option>
                                        <option value="2"> Vue sur les categories </option>
                                    </select>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail13" class="form-label">Droit sur les sous categories </label>
                                    <select name="souscategorie" id="" class="form-control">
                                        <option value="0"></option>
                                        <option value="1"> Administrateur </option>
                                        <option value="2"> Vue sur les categories </option>
                                    </select>
                                    </div>
                                </div> 





                         </div>
    
               
                 <button type="submit" class="btn btn-primary">Sauvegarder</button>
        
                   
            </form>           
        </div>


    </div>
</div>  


    
@endsection