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

        <link rel="stylesheet" href="../CSS/admin.css"/>
        <link rel="stylesheet" href="../CSS/pagesadmin.css"/>
</head>

<body>

<!---------------------------NAVBAR------------------------------------------>

<?php
include '../admin/partials/header.php';
?>

<!----------------------------------------MAIN CONTENT--------------------------------------------------------->


    <!-- TITRE DE PAGE -->
    <h2 class="title-admin">BIENVENUE</h2>
    
    <!-- CARTES -->

    <div class="container">
     <form>

        <!-- TITRE -->
        <div class="title-input">
            <label for="title"><h5>Titre</h5></label>
            <input type="text" class="form-control" id="title">
        </div>


        <!-- DESCRIPTION -->
        <div class="des-input">
            <label for="comment"><h5>Description</h5></label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>

        <div class="row">

            <!-- SUJET -->
            <div class = "col-md-auto">
            <div class = "cat-input">
                <label for="cat"><h5>Catégorie :</h5></label>
                    <select id="cat" name="cat">
                        <option value="jv">Jeu-vidéo</option>
                        <option value="esp">Esport</option>
                        <option value="pol">Politique</option>
                        <option value="desi">Design</option>
                        <option value="bus">Business</option>
                    </select>
                </div>
            </div>
            <div class="col-md-auto"></div>
            <div class="col-md-auto"></div>
            <div class="col-md-auto"></div>
            <div class="col-md-auto"></div>

            <!-- CLASSE -->
            <div class="col-md-auto">
                <div for="classe">
                    <h5>Classe :</h5>
                </div>
            </div>

            <div class="col-md-auto">
                <input class="form-check-input" type="radio" name="classe" id="gtech">
                <label class="form-check-label" for="gtech">
                  G. Tech
                </label>
            </div>

            <div class="col-md-auto">
                <input class="form-check-input" type="radio" name="classe" id="gart">
                <label class="form-check-label" for="gart">
                  G. Art
                </label>
            </div>

            <div class="col-md-auto">
                <input class="form-check-input" type="radio" name="classe" id="gbusiness">
                <label class="form-check-label" for="gbusiness">
                  G. Business
                </label>
            </div>
        </div>

        <!-- KEYWORDS -->
        <div class="keywords-input">
            <label for="keyword"><h5>Entrez des mots clés (merci d'espacer chaque mots-clés) :</h5></label>
            <input type="text" class="form-control" id="keyword">
        </div>

        <!-- IMAGE -->
        <div class="img-input">
            <label for="imageinp"><input type="file" id="imageinp"></label>
        </div>


        <!-- SUBMIT -->
        <div class="submit-btn">
            <button type="submit">Envoyer</button>
        </div>
    </form>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5ce7dcd1c0.js" crossorigin="anonymous"></script>
</body>
</html>
