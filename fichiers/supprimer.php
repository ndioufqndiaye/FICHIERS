<!doctype html>
<html >
<head>
<style>
           body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
        .rouge{
            background-color:red;
        }
        #form2{
            border:0px solid;
            width:40%;
            height:150px;
            margin-left:300px;
        }
        h1{
    font-size:60px;
      color:white;  
  }
        #but{
            margin-top:-80px;
            margin-left:350px;
        }
        #inputPassword2{
            margin-top:20px;
        }
        #rouge{
            background-color:red;
        }
        #t1 th{
      font-size:30px;
      color:white;
  }
        #t2 td{
    font-size:20px;

  }
    </style>
  <meta charset="utf-8">
  <title>supprimer produit</title>
  <link rek="stylesheet" href="boostrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>

<center><h1>voulez-vous supprimer un produit:</h1></center>
<div id="form2">
<form class="form-inline" action="supprimer.php" method="POST">
    <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">nom</label>
    <input type="text" class="form-control" id="inputPassword2" name="nom" placeholder="nom produit">
  </div>

  </div>
  <button type="submit" class="btn btn-primary mb-2" id="but" name="supprimer">Supprimer</button>
</form>
</div>
<?php
 echo "<table border=1 width=80%>";
 echo "<tr>
    <th>nom</th> 
    <th>quantité</th>
    <th>prix</th>
    <th>montant</th>
    </tr>";
    $newline="";
    if(isset($_POST['supprimer'])){
        if(!empty($_POST['nom'])){            
            $fichier=fopen("produits.txt","r");
    $sup=$_POST['nom'];
   while(!feof($fichier))
      {
          $ligne=fgets($fichier);
          $element=explode(",",$ligne);
         if($sup==$element[0])
         {
             $supp="";
         }
         else{
             $supp=$ligne;
         }
         $newline=$newline.$supp;
        }
   
    fclose($fichier);
    $fichier=fopen("produits.txt","w+");
    fwrite($fichier,$newline);
    fclose($fichier);
}


$fichier=fopen("produits.txt","a+");
while(!feof($fichier))
{
    $ligne=fgets($fichier);
$element=explode(",",$ligne);
if($element[1]<10){
    echo "<tr class='rouge'>";
echo "<td>".$element[0]."</td>";
echo "<td>".$element[1]."</td>";
echo  "<td>".$element[2]."</td>";
echo "<td>".$element[1]*$element[2]."</td>";
echo "</tr>";
}
else{
echo "<tr>";
echo "<td>".$element[0]."</td>";
echo "<td>".$element[1]."</td>";
echo  "<td>".$element[2]."</td>";
echo "<td>".$element[1]*$element[2]."</td>";
echo "</tr>";
}
}
fclose($fichier);
}
echo "</table>";
                              
    
?>
</body>
</html>