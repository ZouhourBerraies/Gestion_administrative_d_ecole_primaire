<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>المعلومات الشّخصيّة </title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div class="navbar-brand">المدرسة الابتدائية شارع الحبيب بورقيبة بنزرت</div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">  
                            
                    <div class="sb-sidenav-footer">
                        <a class="nav-link" href="prof.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            العودة إلى الصفحة الرئيسية                  </a>
                    </div>
                </nav>
            </div>
  
            <div id="layoutSidenav_content">
            <?php
session_start();

// Connexion à MySQL
$connection=mysqli_connect("localhost", "root", "", "prof");

if(!empty($_POST)) {
  print_r($_POST);
if(isset($_POST['envoyer'])) {
   // Réecriture des variables
   
  $prenom=$_POST['prenom'];
   $nom=$_POST['nom'];
   $mdp=$_POST['password'];
   $username=$_POST['username'];

   $mail=$_POST['mail'];

   
   $id=$_POST['id'] ;
}
   // Requête de modification d'enregistrement
   $Modifier="UPDATE profil_enseignant SET
   nom='$nom',
   prenom='$prenom',
   password='$mdp',
   mail='$mail',
   username='$username'
   WHERE id = '$id' ";
   

   // Exécution de la requête
   $resultat=mysqli_query($connection, $Modifier);
  

   // Contrôle sur la requête
   if(!$resultat) {
    die('Erreur SQL !');
   }
   else {
     echo " <h1> Requête validée !</h1>";
   }
}
 // Fin du test isset
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">   تعديل المعلومات الشّخصيّة</h1>
                        <br>
                        <div class="row"> 
                        <div class="container">     
                        <form class="needs-validation" name="enseignant" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <div class="form-row">
                 <div class="col-md-4 mb-3">
                         <label for="id">المعرف</label>
                         <input type="number" class="form-control" name="id"  required pattern = '[0-9]' min="0" max="10000">
                     </div>
                     <div id="corps"></div>
                     <div class="col-md-4 mb-3">
                         <label for="prenom">الاسم</label>
                         <input type="text" class="form-control" name="prenom"  required pattern="[0-9a-zA-Z-\.]{3,12}">
                     </div>
                     <div id="corps"></div>
                     <div class="col-md-4 mb-3">
                         <label for="nom">لقب</label>
                         <input type="text" class="form-control" name="nom"  required >
                     </div>
                     <div id="corps"></div>
                     
                     <div class="col-md-4 mb-3">
                         <label for="mail">بريد الالكتروني</label>
                         <input type="text" class="form-control" name="mail" placeholder="mail@serveur.com" required>
                        
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="password">اسم المستخدم</label>
                         <input type="text" class="form-control" name="username"  required>
                        
                     </div>
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="password">كلمة العبور</label>
                         <input type="password" class="form-control" name="password"  required>
                        
                     </div>
                     <div id="corps"></div>
                     <div class="form-row">
                 <button class="btn btn-secondary" type="button" onclick="window.location.href ='prof.php';" name="annuler">إلغاء</button>
                 <button class="btn btn-primary" type="submit" name="envoyer">إرسال</button>
                    
                     </div>
             </form>   
            </div>     
</div>   
                    </div>
 </main>   
</div>
    </body>
</html>
