<!DOCTYPE html>
<html>
<head>
<title>nos produits</title>
</head>
<style>
#rouge{
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
      text-align:center;  
  }
 #t2 td{
    font-size:20px;

  }
</style>
<body>
<h1>données fichiers dans un tableau</h1>
<center><table border='1' width='80%'>
<tr>
<th>nom produit</th>
<th>quantité produit</th>
<th>prix produit</th>
<th>montant produit</th>
</tr>
<?php

 $lignes = fopen("produits.txt",'r');
while(!feof($lignes)){
      $open=fgets($lignes);
      $pro=explode(",",$open);

   
   
if($pro[1]<10){
      echo "<tr id='rouge'>";
   echo "<td>$pro[0]</td>";
   echo "<td>$pro[1]</td>";
   echo "<td>$pro[2]</td>";
   echo "<td>".$pro[3]."</td>";
   echo "</tr>";
}else{
    echo "<tr>";
    echo "<td>$pro[0]</td>";
   echo "<td>$pro[1]</td>";
   echo "<td>$pro[2]</td>";
   echo "<td>".$pro[3]."</td>";
   echo "</tr>";
}

}
fclose($lignes);

 ?>
 </table></center>

</body>
</html>