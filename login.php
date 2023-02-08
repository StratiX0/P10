<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GC News</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
        <!----------------------------------- POLICES UTILISEES -------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="CSS/index.css"/>
        <link rel="stylesheet" href="CSS/login.css"/>
        <link rel="script" href="JS/index.js"/>
</head>

<body>

<!---------------------------NAVBAR------------------------------------------>

<?php
include 'partials/header.php';
?>


<!---------------------------CONNEXION------------------------------------------>

<div class="container">
    <img src="assets/loginphoto.png" class="img-login" alt="Gaming Campus Photo" /><span></span>
    <form class="form-info">
        <h5 class="connexion-title">CONNEXION</h5>
        <div class="form-input">
            <div class="mb-3">
                <img src="assets/envelope-fill.svg" class="input-icon" alt="logo-mail">
                <input type="email"	class="form-email form-control" id="InputEmail" placeholder="Adresse Mail"/>
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Mot de Passe" class="form-control" id="InputPassword"/>
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Code" class="form-control" id="InputPassword1"/>
            </div>
        </div>
        <div class="form-option">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Check" />
                <label class="form-check-label" for="Check">Restez connecté</label>
            </div>
            <div class="forgotten-password">
                <a class="forgotten-btn" href="#">Mot de passe oublié?</a>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Me connecter</button>		
    </form>
</div>


<!-----------------------------FOOTER---------------------------------------->
      
<?php
include 'partials/footer.php';
?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
