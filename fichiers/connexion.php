<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
        <style>
        body{
    background-image:url(j.jpg);
    background-repeat:repeat;
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
    color:black;
    text-align:center;
  }
  </style>
    </head>
    <body>
        <h1>page d'authentification</h1>
    <div id="form1">
<form action="connexion.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" id="email" >Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3"  name="email" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label" id="pass">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="mdp" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="submit">connexion</button>
    </div>
  </div>
</form>
</div>
      <?php
      $test=false;
      $login=$_POST['email'];
      $password=$_POST['mdp'];
      
      if(isset($_POST['submit'])){
        $auth=fopen('fichier2.txt', 'r') ;

      while(!feof($auth)){
      $affi = trim(fgets($auth));
      $user = explode(",",$affi);
      if($user[5]=="admin" && $login==$user[1] && $password==$user[2]){
        header("location:accueiluti.php");
      }
      elseif($user[5]=="utilisateur" && $login==$user[1] && $password==$user[2]){
        header("location:accueil.php");
      }
      
     
      }
    
      fclose($auth);
    
    
      }
    
      ?>
        
    </body>
</html  