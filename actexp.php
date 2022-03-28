<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'prof';
$db_host     = 'localhost';
// Connexion à MySQL
$connection = mysqli_connect("localhost", "root", "", "prof");


    if (isset($_POST['ajouter']))
     {
        // Réecriture des variables
    $date = $_POST['date'];
    }

echo "$date </br>";
//$jour= mysqli_real_escape_string($connection,htmlspecialchars($_POST['date'])); 
  // $affi="SELECT * FROM presncea";
   //$resu = mysqli_query($connection, $affi);
  // define ('DATE_ATOM', "Y-m-d\TH:i:sP");
//echo $stringDate = $date->format(DATE_ATOM);

   //$jour=$date->format('Y-m-d H:i:s');
   //echo $jour;
   $ajouter="ALTER TABLE presencea
   ADD $date text ";
   $resultat = mysqli_query($connection, $ajouter);
        
   
   if(!$resultat) {
      die('Erreur SQL !');
    }
     else {
      die('ok SQL !');
     
      //echo"<button type='submit' name='ok' onclick='window.location.href ='table.php''>ok</button>";
      // header('Location: table.php');
      $affi ="SELECT nom , prenom  FROM presencea";
      $resu = mysqli_query($connection, $affi);
      if(!$resu)
       {
       die('Erreur SQL !');
     }
     else{
      echo"<table border='1'>";
      echo"<tr>
      <td>nom</td>
      <td>prenom</td>
      
      </tr>";
      
      while ($row=mysqli_fetch_assoc($resu))
      {
          echo"<tr>
          <td>{$row['nom']} </td>
          <td>{$row['prenom']}</td>
          
   
          </tr>";
      }
          echo"</table>";
   }
     


     }
 
   
// Fin du test isset


?>
</body>
</html>