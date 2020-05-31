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
    <form method="POST" action="">
        <div>
            <label for="homme">Homme<input type="radio" id="homme" name="civilite" required></label>
            <label for="femme">Femme<input type="radio" id="femme" name="civilite" required></label>
        </div>
        <div>
            <label>Nom : <input type="text" name="nom" required></label>
        </div>
        <div>
            <label>Prénom : <input type="text" name="prenom" required></label>
        </div>
        <div>
            <label>Date de naissance : <input type="date" name="date" required></label>
        </div>
        <div> Poste :
            <select name="poste">
                <option disabled>Choix du poste</option>
                <option>defenseur</option>
                <option>milieu</option>
                <option>attaquant</option>
                <option>gardien</option>
            </select>
        </div>
        <input class="submit" name="submit" type="submit">
    </form>
    <?php
        if(isset($_POST["submit"]) && isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"])
        && isset($_POST["date"]) && isset($_POST["poste"])){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $date = $_POST["date"];
            if ($nom != "" && $prenom !=""){
                include_once "inc.php";
                $data = "INSERT INTO `joueur` (`joueur_nom`, `joueur_prenom`, `joueur_date_naissance`, `id_civilite`, `id_poste`)
                VALUES ('$nom', '$prenom', '$date', '1', '1');";
                $query = mysqli_query($lien, $data);
                echo "Le joueur $prenom a bien été créée";
            }   
        }
        else {
            echo "Veuillez compléter tous les champs !";
        }
    ?>
<a class="retour" href="joueurs.php">Retourner à la liste des joueurs</a>
</section>
    
</body>
</html>

