
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>إنشاء حساب</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
            <?php
session_start();

    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'prof';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    if(!empty($_POST)) {
        print_r($_POST);
      if(isset($_POST['envoyer'])) {
         // Réecriture des variables
    $id = $_POST['id'];
    $genre = $_POST['genre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $username = $_POST['username'];
    $password = $_POST['password'];}

// Requête de modification d'enregistrement
$Modifier=" INSERT INTO `profil_enseignant` (`id`, `genre`, `nom`, `prenom`, `mail`, `username`, `password`) VALUES (
'$id','$genre','$nom','$prenom','$mail','$username','$password')";
// Requête de modification login


// Exécution de la requête
$resultat=mysqli_query($db, $Modifier);

// Contrôle sur la requête
if(!$resultat) {
 die('Erreur SQL !');
}
else {
  echo " <h1> Requête validée !</h1>";
  header('Location: index.php');
}

// Fin du test isset
    }
?>
    
    

                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">إنشاء حساب</h3></div>
                                    <div class="card-body">
                                        <form name="profil_enseignant" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-row">
                                                
    
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputgenre">الجنس</label>
                                                        <select class="form-control py-4"  name="genre" >
                                                            <option valeur="femme"> femme</option>
                                                            <option  valeur="homme"> homme</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputid">المعرف</label>
                                                        <input class="form-control py-4" id="inputid" type="number" name="id" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                
    
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">لقب</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" name="nom"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">الاسم</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" name="prenom" />
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">بريد الالكتروني</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="mail"  />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputusername">اسم المستخدم</label>
                                                <input class="form-control py-4" id="inputusername" type="text" name="username"  />
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword"> تأكيد كلمة العبور</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" name="password"  />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">كلمة العبور</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password"  />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button type="submit" name="envoyer" class="btn btn-primary btn-block" >إنشاء حساب</button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="index.php">هل لديك حساب؟ انتقل إلى تسجيل الدخول</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
