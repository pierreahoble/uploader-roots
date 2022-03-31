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

            <form action="{{url('uploaders')}}" method="POST" enctype="multipart/form-data"> 

                {{-- <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Choisire la categorie</label>
                          <select name="catep" id="" class="form-control">
                              @foreach ($souscategories as $souscategory)
                                <option value="{{$souscategory->libelle}}"> {{$souscategory->libelle}} </option>                                  
                              @endforeach
                          </select>
                        </div>
                    </div>
                </div> --}}
            
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Choisire le fichier</label>
                          <input type="file" name="file[]" class="form-control" accept=".pdf,.docx" multiple required id="file">
                         
                        </div>
                    </div>
                </div>
                
                @csrf
    
                <div id="form">
                
    
                </div>
              
               
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
        
                   
            </form>


           
        </div>
    </div>
</div>

@endsection


@section('script')

<script>


// <div class="col-md-3">
//                     <div class="mb-3">
//                         <label  class="form-label">Sous Categorie du fichier</label>
//                         <select name="souscat_${i}" id="souscat_${i}" class="form-control">
//                         </select>
//                     </div>
//                 </div>


    $(document).ready(function(){
        $('#file').change(function(){
            var fileName = $(this).val();
            // console.log(fileName);
            var names = [];
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                names.push($(this).get(0).files[i].name);
            $('#form').append(`

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nom du fichier</label>
                      <input type="text" class="form-control" value="${names[i]}" disabled>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="mb-3">
                        <label  class="form-label">Categorie du fichier</label>
                        <select name="cat_${i}" id="cat_${i}" class="form-control categorie" required>
                            <option value="">Choisir la categorie du fichier</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->libelle}}">{{$category->libelle}}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>

               
    
                <div class="col-md-4">
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description du Fichier</label>
                        <textarea name="description_${i}" id="" cols="30" rows="0" class="form-control " required></textarea>
                    </div>
                </div>
    
            </div>

            `)
                // console.log(names[i])
            }
        })

    })


    $(document).ready(function(){

        $('.categorie').each(function(index){
            $('#cat_1').on('change',function(e){
                alert()
            })  

        })



    })
   
</script>
    


    
@endsection