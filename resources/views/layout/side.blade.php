  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ROOTS Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Fichiers</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> Fichiers:</h6>
                <a class="collapse-item" href="{{url('fichier')}}">Ajouter un fichier</a>
                <a class="collapse-item" href=" {{url('liste')}} ">Liste des Fichiers</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    @if(App\User::find(Auth::user()->id)->droits->categorie === 1 )
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwocate"
            aria-expanded="true" aria-controls="collapseTwocate">
            <i class="fas fa-fw fa-cog"></i>
            <span>Categorie</span>
        </a>
       
        <div id="collapseTwocate" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> Categorie:</h6>
                <a class="collapse-item" href="{{url('categorie')}}">Ajouter une categorie</a>
                <a class="collapse-item" href=" {{url('sous-categorie')}} ">Ajouter une sous catégorie</a>
                <a class="collapse-item" href=" {{url('liste-des-categories')}}">Liste</a> 
            </div>
        </div>
    </li>
   

    <!-- Nav Item - Pages Collapse Menu -->
    @elseif (App\User::find(Auth::user()->id)->droits->categorie === 2 )
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwocate"
            aria-expanded="true" aria-controls="collapseTwocate">
            <i class="fas fa-fw fa-cog"></i>
            <span>Categorie</span>
        </a>
       
        <div id="collapseTwocate" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- @if (App\User::find(Auth::user()->id)->droits->categorie === 2 ) --}}
                <h6 class="collapse-header"> Categorie:</h6>
                <a class="collapse-item" href=" {{url('liste-des-categories')}} ">Liste</a>
            </div>
        </div>
    </li>
    @elseif (App\User::find(Auth::user()->id)->droits->categorie === 0 )
    
    @endif



    @if(App\User::find(Auth::user()->id)->droits->categorie === 1 )
        <!-- Divider -->
        <hr class="sidebar-divider">

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilisateur"
            aria-expanded="true" aria-controls="collapseUtilisateur">
            <i class="fas fa-fw fa-cog"></i>
            <span>Utilisateur</span>
        </a>
        <div id="collapseUtilisateur" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Liste Utilisateur:</h6>
                <a class="collapse-item" href="{{url('liste-des-utilisateurs')}}">Liste des utilis.</a>
                <a class="collapse-item" href=" {{url('ajouter-un-utilisateur')}} ">Ajouter un utilis.</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
@endif



    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>




  

</ul>
<!-- End of Sidebar -->