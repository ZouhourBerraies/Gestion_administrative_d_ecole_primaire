<?php
//Database connection by using PHP PDO
$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=prof', $username, $password );
 // Create Object of PDO class by connecting to Mysql database

if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
 //For Load All Data
 if($_POST["action"] == "Load") 
 {
  $statement = $connection->prepare("SELECT * FROM classea ORDER BY id DESC");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">
    <tr>
    <th width="10%">المعرف</th>
    <th width="20%">الاسم</th>
    <th width="20%">لقب</th>
    <th width="10%">الجنس</th>
     <th width="20%">تاريخ الميلاد</th>
     <th width="10%">رقم التسجيل</th>
     
     <th width="10%">تحديث</th>
     <th width="10%">حذف</th>
    </tr>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tr>
     <td>'.$row["ideleve"].'</td>
     <td>'.$row["nom"].'</td>
     <td>'.$row["prenom"].'</td>
     <td>'.$row["sexe"].'</td>
     <td>'.$row["datenaissance"].'</td>
     <td>'.$row["numero"].'</td>
     

     <td><button type="button" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button></td>
     <td><button type="button" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 //This code for Create new Records
 if($_POST["action"] == "Create")
 {
  $statement = $connection->prepare("
   INSERT INTO classea (ideleve, nom,prenom,sexe,datenaissance,numero) 
   VALUES (:ideleve, :nom, :prenom, :sexe, :datenaissance, :numero)
  ");
  $result = $statement->execute(
   array(
    ':ideleve' => $_POST["ideleve"],
    ':nom' => $_POST["nom"],
    ':prenom' => $_POST["prenom"],
    ':sexe' => $_POST["sexe"],
    ':datenaissance' => $_POST["datenaissance"],
    ':numero' => $_POST["numero"]
     

   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }

 //This Code is for fetch single customer data for display on Modal
 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $connection->prepare(
   "SELECT * FROM classea 
   WHERE id = '".$_POST["id"]."' 
   LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["ideleve"] = $row["ideleve"];
   $output["nom"] = $row["nom"];
   $output["prenom"] = $row["prenom"];
   $output["sexe"] = $row["sexe"];
   $output["datenaissance"] = $row["datenaissance"];
   $output["numero"] = $row["numero"];
    

  }
  echo json_encode($output);
 }

 if($_POST["action"] == "Update")
 {
  $statement = $connection->prepare(
   "UPDATE classea 
   SET ideleve = :ideleve, nom = :nom ,prenom = :prenom, sexe= :sexe,datenaissance= :datenaissance,numero= :numero
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':ideleve' => $_POST["ideleve"],
    ':nom' => $_POST["nom"],
    ':prenom' => $_POST["prenom"],
    ':sexe' => $_POST["sexe"],
    ':datenaissance' => $_POST["datenaissance"],
    ':numero' => $_POST["numero"],
     
    ':id'   => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }

 if($_POST["action"] == "Delete")
 {
  $statement = $connection->prepare(
   "DELETE FROM classea WHERE id = :id"
  );
  $result = $statement->execute(
   array(
    ':id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Deleted';
  }
 }

}

?>