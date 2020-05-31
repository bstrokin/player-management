<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>

<section class="container">
<?php
    include_once "inc.php";
    $data = "SELECT * FROM joueur";
    $query = mysqli_query($lien, $data);
    while ($row = mysqli_fetch_assoc($query)){
        echo "<div>
            <h3 class='player-name'><a href='joueur_detail.php?id_joueur=".$row["id_joueur"]."'>".$row["joueur_prenom"]." ".$row["joueur_nom"]."</a></h3>
        </div>";
    }
?>
</section>

<section class="container-infos">
    <a class='retour' href="add_joueur.php">Ajouter un joueur</a>
</section>
</body>
</html>

