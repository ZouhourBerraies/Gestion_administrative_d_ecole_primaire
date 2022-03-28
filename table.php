<?php

$db_username = 'root';
$db_password = '';
$db_name     = 'prof';
$db_host     = 'localhost';
// Connexion à MySQL

$connection = mysqli_connect("localhost", "root", "", "prof");

  $affi="SELECT nom , prenom  FROM presencea";
   $resu = mysqli_query($connection, $affi);
   if(!$resu) {
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
  
// Fin du test isset
?>
<?php  
//$connect = mysqli_connect("localhost", "root", "", "adm1");  
 //$query ="SELECT * FROM enseignant ORDER BY ID DESC";  
 //$result = mysqli_query($connect, $query);  
 /*session_start();
   
    $date=$_POST["date"];
    echo "$date </br>";
    $connection=mysqli_connect("localhost", "root", "", "prof");
    /*$sql="CREATE TABLE IF NOT EXISTS $date (
     id int(11) NOT NULL AUTO_INCREMENT,
     ideleve int(11)
     nom varchar(255) NOT NULL,
     prenom varchar(255) NOT NULL,
     presence varchar(255) NOT NULL,PRIMARY KEY (id)
   );";*/
   /* $sql="CREATE TABLE $date AS SELECT * FROM presencea ;";
    $sql .="SELECT * from $date ;";
     if (mysqli_multi_query($connection, $sql)) {
         do { $tab=array();
             /* Stockage du premier résultat */
            /* if ($result= mysqli_store_result($connection)) {
                 while ($row = mysqli_fetch_row($result)) {
                     ///printf("%s\n,%s\n,%s\n,%s\n,%s\n", $row[0], $row[1], $row[2],$row[3],$row[4]);
                     echo"    <table border='1'>";
                     echo"  
                             <tr>
                                 <th>id</th>
                                 <th>ideleve</th>
                                 <th>nom</th>
                                 <th>prenom</th>
                                 <th>presence</th>

                             </tr>
                         ";
                         
                      
                         echo"  <tr>
                         <td>{$row['0']} </td>
                         <td>{$row['1']}</td>
                         <td>{$row['2']}</td>
                         <td>{$row['3']}</td>
                         <td>{$row['4']}</td>
                         </tr>";
                       
                   echo"  </table>";
                             
                         
                   
                 }
                 mysqli_free_result($result);
             }
             /* Affichage d'une séparation */
             
        /* } while (mysqli_next_result($connection));
     }*/
?>