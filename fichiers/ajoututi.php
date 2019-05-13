<!DOCTYPE html>
<html>
<head>
<meta charget="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>AJOUTER UTILISATEUR</title>
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
<center><h1>page d'ajout d'utilisateur</h1></center>
<div id="form1">
<form action="ajoututi.php" method="POST">
<div class="form-group row">
    <label for="inputnom3" id="nom1" class="col-sm-2 col-form-label">Nom utilisateur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">login utilisateur</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="login" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">mots de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputEmail3" name="passe" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" id="pass" class="col-sm-2 col-form-label">Téléphone utilisateur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="inputPassword3" name="tel" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">adresse utilisateur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="inputPassword3" name="adresse" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">profil utilisateur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="inputPassword3" name="profil" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">statut utilisateur</label>
    <div class="col-sm-10">
    <select name="statut">
    <option  value="actif">actif</option>
    <option  value="inactif">inactif</option>
    </select>
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
$login=$_POST["login"];
$passe=$_POST["passe"];
$tel=$_POST["tel"];
$adresse=$_POST["adresse"];
$profil=$_POST["profil"];
$statut=$_POST["statut"];

   

        $ligne = fopen("fichier2.txt",'a+');
      $open=fgets($ligne);
      $pro=explode(",",$open);
  fwrite($ligne, $nom.','.$login.','.$passe.','.$tel.','.$adresse.','.$profil.','.$statut."\n");


  $lignes = fopen("fichier2.txt",'r');
  while(!feof($lignes)){
        $open=fgets($lignes);
        $pro=explode(",",$open);
  
  if($login==$pro[1]){
        echo "ajout impossible";
  }   
}    
    
           

?> 
</body>
</html>