
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>قائمة الحضور</title>
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
                            <a class="nav-link" href="presence.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                العودة إلى الصفحة الرئيسية
                            </a>
                        </div>
            </nav>
        </div>


        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">
قائمة الحضور </h1>
                    <br>
                    
<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'adm1';
$db_host     = 'localhost';
session_start();
   
    $date=$_POST["date"];
    echo"<div class='card mb-4'>
    <div class='card-header'>
        <i class='fas fa-table mr-1'></i>
         $date
    </div>
    <div class='card-body'>
        <div class='table-responsive'>";
    $connection=mysqli_connect("localhost", "root", "", "prof");
    //$date .="Classe1a";
    $sql="CREATE TABLE IF NOT EXISTS $date (
     id int(11) NOT NULL AUTO_INCREMENT,
     ideleve int(11)
     nom varchar(255) NOT NULL,
     prenom varchar(255) NOT NULL,
     presence varchar(255) NOT NULL,PRIMARY KEY (id)
   );";
    $sql="CREATE TABLE $date AS SELECT * FROM classea ;";
    $sql .="SELECT * from $date ;";

    // Exécution de la requête
    
 echo"</br>";
                            echo"    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                echo"    <thead>
                                        <tr>
                                        
                                        <th>المعرف</th>
                                        <th>الاسم</th>
                                        <th>لقب</th>
                                       
                                        <th>الحضور</th>
            
                                        </tr>
                                    </thead>";
                                    if (mysqli_multi_query($connection, $sql)) {
                                         do { $tab=array();
                                            if ($result= mysqli_store_result($connection)) {
                
                                                while ($row = mysqli_fetch_row($result)) {
                                           
                               
                                  echo"  <tbody>";
                                    echo"  <tr>
                                    
                                    <td>{$row['1']}</td>
                                    <td>{$row['2']}</td>
                                    <td>{$row['3']}</td>
                                    <td>{$row['7']}</td>
                                    </tr>";
                                  echo"  </tbody>";}
                              echo"  </table>";
                                        
                                    
                                
                            mysqli_free_result($result);
                        
                        /* Affichage d'une séparation */
                            }
                   } while (mysqli_next_result($connection));
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