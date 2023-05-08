
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php echo asset('assets/Acc_Admin/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?php echo asset('assets/Acc_Admin/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/Acc_Admin/css/checkbox.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="<?php echo asset('assets/Login/js/test.css') ?>">
</head>
<body id="page-top">
  <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-gray-dark);">
      <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
        <div class="sidebar-brand-text mx-3"><span>E-Art</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
          <li class="nav-item"><a class="nav-link" href="{{ url('/lister') }}"><i class="fas fa-edit"></i><span>Gerer les contenus&nbsp;</span></a></li>
 
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
      </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><span style="color: rgb(0,0,0);font-weight: bold;font-size: 20px;">MANITRA TRANSPORT</span>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                </ul><a class="btn btn-primary" href="#" style="background: rgb(255,255,255);color: var(--bs-gray);border-style: none;"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </nav>
        <div class="container-fluid">
                

            <form action="{{ url('/recherche') }}" method="post">
                {{ csrf_field() }}      


                <div class="mb-3">
                    <div class="row">
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label">Titre:<input name="titre" class="form-control" type="text" style="color: rgb(0,0,0);"></label></div>
                    </div>
                  </div>      
<p>choisir entre deux dates</p>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label"><input name="date1" class="form-control" type="date" style="color: rgb(0,0,0);"></label></div>
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label"><input name="date2" class="form-control" type="date" style="color: rgb(0,0,0);"></label></div>         
                    </div>
                  </div>         
                  
           
                
                  
                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray);border-style: none;">Rechercher</button></div>
      </form>
<div class="card-body">                
        <div class="col-xl-12 mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-plus"></i> Ajouter une nouvelle Article
</button>
    

<div class="row">
    @foreach($liste as $rows)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{  $rows->img }}" alt="Product Image" class="card-img-top">
            <div class="card-body">
                <h1 class="card-title">{{ $rows->titre }}</h1>
                <h2 class="card-subtitle">{{ $rows->auteur }}</h2>
                <h3 class="card-subtitle">{{ $rows->resumer }}</h3>
                <h4 class="card-subtitle">{{ $rows->contenu }}</h4>
                <h5 class="card-subtitle">{{ $rows->datepublication }}</h5>
                <div class="d-flex justify-content-between align-items-center">                              
                
                <div>
                  
                    <a class="btn btn-primary" href="{{ url('/Versupdate') }}/{{Str::slug($rows->titre) }}-{{ $rows->idarticle }}-index.html" style="background: var(--bs-gray);border-style: none;margin-top: 5px;">Modifier</a>
                 
                </div>

                <div>
                    <a class="btn btn-primary" href="{{ url('/delete') }}/{{ Str::random(10) }}.{{ $rows->idarticle }}.index.html" style="background: var(--bs-gray);border-style: none;margin-top: 5px;">Supprimer</a>
                </div>
               
                
            </div>
        </div>
    </div>
    @endforeach
</div>

  <nav aria-label="Page navigation example">
  <ul class="pagination">
<li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
<a class="page-link" href="{{ $currentPage == 1 ? '#' : url('/pagination') }}/{{ $currentPage - 1 }}" aria-label="Précédent">
<span aria-hidden="true">&laquo;</span>
<span class="sr-only">Précédent</span>
</a>
</li>
@foreach($listeNumeroPage as $rows)
<li class="page-item {{ $rows == $currentPage ? 'active' : '' }}">
<a class="page-link" href="{{ url('/pagination') }}/{{ $rows }}">{{ $rows }}</a>
</li>
@endforeach
<li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
<a class="page-link" href="{{ $currentPage == $lastPage ? '#' : url('/pagination') }}/{{ $currentPage + 1 }}" aria-label="Suivant">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Suivant</span>
</a>
</li>
</ul>

</nav>
  
                                         

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ajout Article</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  
    <form action="{{ url('/insererArticle') }}" method="post">

                {{ csrf_field() }}
              
                <label for="article_title">Titre de l'article:</label>
                <input type="text" id="article_title" name="titre" ><br><br>

                <label for="article_content">Contenu:</label><br>
                <textarea id="contenu" name="contenu"></textarea><br><br>
    

                <label for="article_summary">Resume:</label><br>
                <textarea id="article_summary" name="resumer"></textarea><br><br>


                <label for="article_title">Auteur:</label>
                <input type="text" id="article_title" name="auteur"><br><br>


                <p>image :
                        <input class="form-control" type="file" class="form-control" id="selectImage">
                        <input type="hidden" name="img" id="imageCode">
                    </p>

                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray);border-style: none;">ok</button></div>
              </form>            

              <script>
                const input = document.getElementById("selectImage");
                const imageCode = document.getElementById("imageCode");
                const convertBase64 = (file) => {
                    return new Promise((resolve, reject) => {
                        const fileReader = new FileReader();
                        fileReader.readAsDataURL(file);
                        fileReader.onload = () => {
                            resolve(fileReader.result);
                        };
                        fileReader.onerror = (error) => {
                            reject(error);
                        };
                    });
                };
                const uploadImage = async (event) => {
                    const file = event.target.files[0];
                    const base64 = await convertBase64(file);
                    imageCode.value = base64;
                    console.log(imageCode.value);
                };
                input.addEventListener("change", (e) => {
                    uploadImage(e);
                });
            </script>
            
              <script src="<?php echo asset('assets/Login/js/ckeditor.js') ?>"></script>
                                          <script>
                                            ClassicEditor
                                              .create( document.querySelector('#contenu'))
                                              .catch( error => {
                                                  console.error( error );
                                              } );
                                          </script>
                        
            
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>
   
      
       
        </div>
              <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
              </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </div>
    <script src="<?php echo asset('assets/Acc_Admin/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/bs-init.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/theme.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/bs-init.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/theme.js');?>"></script>
    <script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


</html>




