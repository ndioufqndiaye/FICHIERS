<!DOCTYPE html>
<html>
<head>
<title>Accueil</title>

<style>
        .rouge{
            background-color:red;
        }
       body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
  a{
     font-size:30px;
      
  }
  h2{
    font-size:50px;
    color:white;
  }
    </style>
</head>
<body>
<form action="exemple.php">
<p>
    <label>
    <input type="submit" name="deconnect" id="deconect" value="Deconnecter"><br>
    </label>
    </p>
</form>
    <h2 ><center>Bienvenue dans notre plateforme de vente de produits cosmétiques</center></h2>
    <ul>
 <li><a href="accueil.php">Accueil</a></li>
    <li><a href="prod.php">ListProduits</a></li>
    <li><a href="recherche.php">RechercheProduits</a></li>
    <li><a href="ajout.php">AjoutProduits</a></li>
    <li><a href="modif.php">UpdateProduits</a></li>
    <li><a href="supprimer.php">SupprimerProduits</a></li>
    </ul>
</body>
</html>