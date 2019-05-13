<!DOCTYPE html>
<html>
    <head>
        <title>Recherche produit</title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
         body{
              background-image:url(j.jpg);
              background-repeat:no-repeat;
              text-align:center;}
        #rouge{
            background-color:red;
        }
        h1{
          font-size:60px;
          color:white;
        }
        #t1{
          width:100%;
          margin-top:20px;
        }
    </style>
    </head>
    <body>
      <h1>Rechercher un produit</h1>  
    <form class="form-inline" action=recherche.php method="POST">
    <div class="form-group mx-sm-3 mb-2" id="name">
    <label for="inputPassword2" class="sr-only"><strong>Nom:</strong></label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="entrer le nom du produit">
  </div> 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix minimal:</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_min" placeholder="prix minimal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix maximal:</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_max" placeholder="prix maximal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Quantité</label>
    <input type="number" class="form-control" id="inputPassword2" name="quantite" placeholder="quantité">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="recherche" >Recherche</button>
</form>
<?php
echo"<center><table border=1 id='t1'>";
echo "<tr>
<td><strong>Nom du produit</strong></td>
<td><strong>Quantité du produit</strong></td>
<td><strong>Prix du produit</strong></td>
<td><strong>Montant du produit</strong></td>
</tr>";
$fichier=fopen("produits.txt","r");
while(!feof($fichier))
    {
        $ligne=fgets($fichier);
    $element=explode(",",$ligne);
    if(!empty($_POST["nom"])){
      if($_POST['nom']==$element[0])
      {
        echo "<tr>
        <td>$element[0]</td>
        <td>$element[1]</td>
        <td>$element[2]</td>";
        echo"<td>".$element[1]*$element[2]."</td>
        </tr>";
      }
  }
  
  if(!empty($_POST['quantite'])){
    if($_POST['quantite']==$element[1])
    {
      echo "<tr>";
     echo "<td>$element[0]</td>";
     echo "<td>$element[1]</td>";
     echo "<td>$element[2]</td>";
      echo "<td>".$element[1]*$element[2]."</td>";
   echo   "</tr>";
    }
}


if(!empty($_POST['prix_min'])){
  if($_POST['prix_min']<=$element[2])
  {
    echo "<tr>
    <td>$element[0]</td>
    <td>$element[1]</td>
    <td>$element[2]</td>";
  echo  "<td>".$element[1]*$element[2]."</td>
    </tr>";
  }
}


if(!empty($_POST["prix_max"])){
  if($_POST['prix_max']>=$element[2])
  {
    echo "<tr>
    <td>$element[0]</td>
    <td>$element[1]</td>
    <td>$element[2]</td>";
 echo   "<td>".$element[1]*$element[2]."</td>
    </tr>";
  }
}
    }
    $fichier=fopen("produits.txt","r");
while(!feof($fichier))
    {
        $ligne=fgets($fichier);
    $element=explode(",",$ligne);
       
       
    if($element[1]<10){
          echo "<tr id='rouge'>";
       echo "<td>$element[0]</td>";
       echo "<td>$element[1]</td>";
       echo "<td>$element[2]</td>";
       echo "<td>".$element[3]."</td>";
       echo "</tr>";
    }else{
        echo "<tr>";
        echo "<td>$element[0]</td>";
       echo "<td>$element[1]</td>";
       echo "<td>$element[2]</td>";
       echo "<td>".$element[3]."</td>";
       echo "</tr>";
    }
    
    }
    fclose($lignes);

echo "</table></center>";
?>
</table>
    </body>
</html>