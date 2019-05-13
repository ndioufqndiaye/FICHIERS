<!DOCTYPE html>
<html>
<head>
<title>liste utilisateur</title>
<style>
       body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
  #t2 th{
      font-size:30px;
      color:white;
  }
  h1{
    font-size:50px;
      color:white;
      text-align:center;  
  }
 #t1 td{
    font-size:20px;

  }
  #buton{
    width:100%;
    height:30px;
    background-color:grey;
  }
  #buton a{
    font-size:20px;
    text-decoration:none;
    color:black;
  }
</style>

</head>
<body>

<h1>liste de nos utilisateurs</h1>
<center><table border='1' width='80%'>
<tr id='t2'>
<th>Nom</th>
<th>login</th>
<th>password</th>
<th>telephone</th>
<th>adresse</th>
<th>profil</th>
<th>statut</th>
</tr>
<?php

 $lignes = fopen("fichier2.txt",'r');
while(!feof($lignes)){
      $open=fgets($lignes);
      $pro=explode(",",$open);

   
   
echo "<tr id='t1'>";
    echo "<td>".$pro[0]."</td>";
   echo "<td>".$pro[1]."</td>";
   echo "<td>".$pro[2]."</td>";
   echo "<td>".$pro[3]."</td>";
   echo "<td>".$pro[4]."</td>";
   echo "<td>".$pro[5]."</td>";
   echo "<td>
<a href='traiter.php?login=$pro[1]'><button name='buton' id='buton'>$pro[6]</button></a>
  </td>";
echo "</tr>";
}

fclose($lignes);
 
 ?>
 </table>
 </center>
 
</body>
</html>