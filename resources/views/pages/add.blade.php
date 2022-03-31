<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> `

    <title>Document</title>
</head>
<body>

    <div class="container-fluid">
        {{-- <a class="btn btn-primary" href="{{url('liste')}} "> Liste des Fichiers</a> --}}
       
           <h1 class="text-center ">Uploader un fichier</h1>
       
     </div>

     <div class="container">
         
         
              
        <form action="{{url('uploaders')}}" method="POST" enctype="multipart/form-data">
            

            
            
            
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

    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<script>


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
                        <label  class="form-label">Categotie du fichier</label>
                        <select name="cat_${i}" id="cat_${i}" class="form-select" required>
                            <option value="">Choisir la categorie du fichier</option>
                            <option value="Commerciale">Commerciale</option>
                            <option value="Comptable">Comptable</option>
                            <option value="Informatique">Informatique</option>
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

        $('#cat_0').change(function(){
            console.log('ok')
        })


    })
   
</script>
</html>