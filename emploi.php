<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>جدول أوقاتي </title>
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
                                العودة إلى الصفحة الرئيسية
                            </a>
                        </div>
            </nav>
        </div>


        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">جدول أوقاتي </h1>
                    <br>
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <form class="needs-validation" name="aff" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="id">ادخل المعرف</label>
                                        <input type="number" class="form-control" name="idprof" required pattern='[0-9]' min="0" max="100000">
                                    </div>
                                    <div id="corps"></div>
                                    <div align="right">
                                        <button class="btn btn-secondary" type="button" onclick="window.location.href ='prof.php';" name="annuler">إلغاء</button>
                                        <button class="btn btn-primary" type="submit" name="envoyer">إرسال</button>
                                    </div>
                            </form>
                        </ol>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            السنة دراسية
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'adm1';
$db_host     = 'localhost';
// Connexion à MySQL
$connection = mysqli_connect("localhost", "root", "", "adm1");

if (!empty($_POST)) {
    if (isset($_POST['envoyer'])) {
        // Réecriture des variables
        $id = $_POST['idprof'];
    }
    // Requête de recherche d'emploi
    $sql = "SELECT jour ,heure_debut,heure_fin,salle,classe FROM aff
   WHERE idens = '$id' ";


    // Exécution de la requête
    $resultat = mysqli_query($connection, $sql);

    //while($ligne=mysqli_fetch_array($resultat)){
    //echo $spl;}
//echo "<table border='1'>";
   // echo "<tr><td>username</td><td>numero</td></tr>";

  

// Fin du test isset



                            echo"    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                echo"    <thead>
                                        <tr>
                                            <th>الأيام</th>
                                            <th>ساعة البداية</th>
                                            <th>ساعة النهاية</th>
                                            <th>القاعة</th>
                                            <th>القسم</th>

                                        </tr>
                                    </thead>";
                                    if(!$resultat) {
                                        die('Erreur SQL !');
                                       }
                                       else {
                                        while ($row = mysqli_fetch_assoc($resultat)) {
                                  echo"  <tbody>";
                                    echo"  <tr>
                                    <td>{$row['jour']} </td>
                                    <td>{$row['heure_debut']}</td>
                                    <td>{$row['heure_fin']}</td>
                                    <td>{$row['salle']}</td>
                                    <td>{$row['classe']}</td>
                                    </tr>";
                                  echo"  </tbody>";}
                              echo"  </table>";
                                        
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        </main>

    </div>
    </div>


</html>