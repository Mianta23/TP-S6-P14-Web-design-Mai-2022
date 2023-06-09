
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Intelligence Artifficielle - Meilleure article</title>
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
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-green);">
      <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
        <div class="sidebar-brand-text mx-3"><span>Bienvenue!</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
          <li class="nav-item"><a class="nav-link" href="{{ url('/lister') }}"><i class="fas fa-edit"></i><span>Gestion des contenus&nbsp;</span></a></li>

        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
      </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><span style="color: rgb(0,0,0);font-weight: bold;font-size: 20px;">Gazetiko - Intelligence Artifficielle</span>
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
            <form action="{{ url('/update') }}" method="post">

                {{ csrf_field() }}
                <input type="text" id="article_title" name="id" value="{{ $valeur->idarticle }}">

                <label for="article_title">Titre de l'article:</label>
                <input type="text" id="article_title" name="titre" value="{{ $valeur->titre }}"><br><br>

                <label for="article_content">Contenu:</label><br>
                <textarea id="contenu" name="contenu">{{ $valeur->contenu }}</textarea><br><br>


                <label for="article_summary">Resume:</label><br>
                <textarea id="article_summary" name="resumer" >{{ $valeur->resumer }}</textarea><br><br>


                <label for="article_title">Auteur:</label>
                <input type="text" id="article_title" name="auteur" value="{{ $valeur->auteur}}"><br><br>


                <img src="{{  $valeur->img }}" width="10px" height="500px" alt="Product Image" class="card-img-top">
                <p>image :
                        <input class="form-control" type="file" class="form-control" id="selectImage">
                        <input type="hidden" name="img" id="imageCode" value="{{ $valeur->img }}">
                    </p>

                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-green);border-style: none;">valider</button></div>
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
              <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © ETU1585 2023</span></div>
                </div>
              </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </div>
    <script src="<?php echo asset('assets/Acc_Admin/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/bs-init.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js');?>"></script>
    <script src="<?php echo asset('assets/Acc_Admin/js/theme.js');?>"></script>
</body>
</html>


</html>




