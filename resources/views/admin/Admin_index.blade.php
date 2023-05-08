<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Intelligence Artifficielle - Meilleure article">
    <title>Intelligence Artifficielle - Meilleure article</title>
    <link rel="stylesheet" href="assets/Login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Login/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/Login/css/Ludens-Users---2-Register.css">
    <link rel="stylesheet" href="assets/Login/css/styles.css">
    <style>
        body {
            background-color: #1c6683;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-photo {
            background-color: transparent;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            padding: 40px;
            border-radius: 10px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        .image-holder {
            background-image: url("<?php echo asset('assets/Login/img/RH.jpg');?>");
            background-size: cover;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 30px auto;
            width: 150px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background-color: var(--bs-gray);
            font-weight: bold;
        }
        #errorMessage {
            font-size: 13px;
            color: var(--bs-red);
        }
    </style>
</head>
<body>

    <section class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="{{ url('/log_admin') }}" method="post" autocomplete="off">
                {{ csrf_field() }}
                <h2>Bienvenue connectez-vous</h2>
                <div class="form-group"><input class="form-control" type="text" name="mail" value="mianta" required placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" id="password" name="mdp" value="mianta" placeholder="Mot de passe"></div>
                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage"></span></div>
                <div class="form-group mb-3"><button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background: var(--bs-green);font-weight: bold;">OK</button></div>
                @IF (isset($erreur))
                <div class="alert alert-success flash animated" role="alert" style="background: rgb(255,255,255);text-align: center;border-style:none;"><span style="color: var(--bs-red);"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span></div>
                @ENDIF
            </form>
        </div>
    </section>
    <script src="assets/Login/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Login/js/bs-init.js"></script>

  </body>
  </html>
