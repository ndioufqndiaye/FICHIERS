  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier un produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<style>
        body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
  #rouge{
            background-color:red;
        }
  #nom3{
    width:50%;
  }
  #inputEmail3{
    width:50%;
  } 
  #inputPassword3{
    width:50%; 
  }
  #nom1,#email,#pass{
    font-size:20px;
    font-family:verdana;
  
  } 
  #form1{
    border:0px solid black;
    width:60%;
    margin-top:50px;
    margin-left:300px;
  }
  #conn{
    margin-left:200px;
  }
  h1{
    font-size:60px;
    font-family:verdana;
    color:white;
    text-align:center;
  }
  </style>
</head>
<body>
<center><h1>vous voulez modifier un produit:</h1></center>
  <div id="form1">
  <form class="form-inline" action="modify.php" method="POST">
    <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only" id="nom1">nom</label>
    <input type="text" class="form-control" id="nom3"  id="inputPassword2" name="nom" placeholder="nom">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="email" class="sr-only">prix minimal</label>
    <input type="text" class="form-control" id="inputEmail3"  name="prix" placeholder="prix">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="pass" class="sr-only">quantité</label>
    <input type="number" class="form-control" id="inputPassword3" name="quantité" placeholder="quantité">
  </div>
  <button type="submit" class="btn btn-primary mb-2" id="conn" name="modifier">modifier</button>
</form>
</div>
</body>  
<?php


echo "<table class='tete' border=1 width='80%' >";
  echo "<tr class='titre'>
  
      <th>Nom du produit</th>
      <th>Prix (FCFA)</th>
      <th>Quantité</th>
      <th>Montant(FCFA)</th>
  
  </tr>";
  if(isset($_POST['modifier'])){
  $nom=$_POST['nom'];
  $prix=$_POST['prix'];
  $quant=$_POST['quantité'];
  $mont=$prix * $quant;
  
  $prod=fopen("produits.txt", 'r' );
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($nom==$fichier[0]){
            $fichier[1]=$prix;
            $fichier[2]=$quant;
            $fichier[3]=$mont;
            $effacer=$fichier[0].",".$fichier[1].",".$fichier[2].",".$fichier[3]."\n";
           
        }else {
            $effacer=$lines;
        }
       $newlines=$newlines.$effacer;
    }

    fclose($prod);
    $prod=fopen("produits.txt", 'w+' );
          
            fwrite($prod,$newlines);
      
    fclose($prod);
    }

    
    $prod=fopen("produits.txt", 'r' );
    
    while(!feof($prod)){
        $lines=fgets($prod);
        $fichier=explode(',', $lines);
        if($fichier[2]<10){             
          echo "<tr id='rouge'>";				
   
            echo "<td>" . $fichier[0] . "</td>";
            echo "<td>" . $fichier[1] . "</td>";
            echo "<td>" . $fichier[2] . "</td>";
            echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
          echo "</tr>";
       } else{
           echo "<tr >";				
   
                 echo "<td>" . $fichier[0] . "</td>";
                 echo "<td>" . $fichier[1] . "</td>";
                 echo "<td>" . $fichier[2] . "</td>";
                 echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
          echo "</tr>";
       }
   

    }



    fclose($prod);
 

echo "</table>";
?>


</body>
</html>