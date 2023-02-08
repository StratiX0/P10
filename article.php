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
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        
        <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="CSS/index.css"/>
</head>

<body>
<?php
    include 'partials/header.php';
    require_once('config/constants.php');

    $info = new takeinfo($conn);
    $art = $info->getArticle(2);
    foreach ($art as $row){
        echo $row['article_texte'];
    }
?>

<!---------------------------ACCUEIL------------------------------------------>

<div class="main-article">
    <div class="title-art">
        <h4>EA PLAY LIVE : ELECTRONIC ARTS ANNULE SA CONFÉRENCE E3 ET S'EXPLIQUE</h4>
    </div>
</div>

<!-----------------------------FOOTER---------------------------------------->
      
<?php
include 'partials/footer.php';
?>

</body>
</html>