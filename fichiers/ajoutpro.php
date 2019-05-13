<!DOCTYPE html>
<html>
<head>
<meta charget="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>AJOUTER produits</title>
<style>
        .rouge{
            background-color:red;
        }
        body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
  #t1 th{
      font-size:30px;
      color:white;
  }
  h1{
    font-size:50px;
      color:white;  
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
  #nom1,#email,#pass,#adresse{
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
    </style>
</head>
<body>
</form>
<center><h1>page d'ajout de produits</h1></center>
<div id="form1">
<form action="ajoutpro.php" method="POST">
<div class="form-group row">
    <label for="inputnom3" id="nom1" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">quantité</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="quantité" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">prix</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="prix" placeholder="">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="ajout">Ajouter</button>
    </div>
  </div>
</form>
</div>

<?php
$nom=$_POST["nom"];
$quantité=$_POST["quantité"];
$prix=$_POST["prix"];
$montant=$quantité*$prix;



        $ligne = fopen("produits.txt",'a+');
      $open=fgets($ligne);
      $pro=explode(",",$open);
  fwrite($ligne, $nom.','.$quantité.','.$prix.','.$montant.','."\n");

          
      
    
           

?> 
</body>
</html>