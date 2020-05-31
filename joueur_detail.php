<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>

<section class="container-infos">
<?php
    $id = $_GET["id_joueur"];
    include_once "inc.php";

    /*Je vérifie si le joueur est renseigné*/
    $verif = "SELECT count(*) FROM joueur WHERE id_joueur = '".$id."'";
    $query = mysqli_query($lien, $verif);
    $reponse = mysqli_fetch_assoc($query);
    $count = $reponse['count(*)'];
    if ($count == 0){/*Joueur inexistant*/
        header('Location : joueurs.php');
    }

    /*Exec. requête*/
    $data = "SELECT * FROM joueur WHERE id_joueur = '".$id."'";
    $query = mysqli_query($lien, $data);
    while ($row = mysqli_fetch_assoc($query)){
        echo "<article>
            <h4>Nom :<span class='value'>".$row["joueur_nom"]."</span></h4>
            <h4>Prénom :<span class='value'>".$row["joueur_prenom"]."</span></h4>
            <h4>Date de naissance :<span class='value'>".$row["joueur_date_naissance"]."</span></h4>";
            $trigramme = strtoupper(substr($row["joueur_prenom"], 0, 1).substr($row["joueur_nom"], 0, 2));  
            $trigramme = str_replace("É", "E", $trigramme);
            $trigramme = str_replace("Ä", "A", $trigramme);    
    }

    /*Exec. requête*/
    $data = "SELECT * FROM civilite WHERE id_civilite = '".$id."'";
    $query = mysqli_query($lien, $data);
    while ($row = mysqli_fetch_assoc($query)){
        echo "<h4> Civilité :<span class='value'>".$row["civilite_libelle"]."</span></h4>";
    }

    /*Exec. requête*/
    $data = "SELECT * FROM poste WHERE id_poste = '".$id."'";
    $query = mysqli_query($lien, $data);
    while ($row = mysqli_fetch_assoc($query)){
        echo "<h4> Poste :<span class='value'>".$row["poste_libelle"]."</span></h4>";
    }

    /*Affichage Trigramme*/
    echo "<h4> Trigramme :<span class='value'>$trigramme</span></h4>
        </article>";

    /*Fonction Trigramme*/
    function trigramme($num){
        include "inc.php";
        $data = "SELECT * FROM joueur WHERE id_joueur = '".$num."'";
        $query = mysqli_query($lien, $data);
        $row = mysqli_fetch_assoc($query);
        $return = strtoupper(substr($row["joueur_prenom"], 0, 1).substr($row["joueur_nom"], 0, 2));
        echo $return;
    }
    /*Testez-moi je suis triste... trigramme(1);*/
?>
<a class="retour" href="joueurs.php">Retourner à la liste des joueurs</a>
</section>
    
</body>
</html>

