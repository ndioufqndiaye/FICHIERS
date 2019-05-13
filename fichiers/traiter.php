<?php
$login=$_GET['login'];
$vide="";
$lignes = fopen("fichier2.txt",'r');
while(!feof($lignes)){
      $open=fgets($lignes);
      $pro=explode(",",$open);

if($login==$pro[1])
{
    if($pro[6]=="actif")
    {
    
        $pro[6]="inactif";

    }
    else{
        $pro[6]="actif";
    }
    if($login=="ndioufaj@gmail.com"){
        $pro[6]="actif";
    }
}
$rempli=$pro[0].','.$pro[1].','.$pro[2].','.$pro[3].','.$pro[4].','.$pro[5].','.$pro[6].','."\n";
$vide=$vide.$rempli;
}
fclose($lignes);
$lignes=fopen('fichier2.txt','w+');
fwrite($lignes,trim($vide));
fclose($lignes);
unlink("fichier2.txt");//supprime fichier BDD
rename("fichier.txt","fichier2.txt");//renommer BDD en BDD1
header('location:listeuti.php');
?>