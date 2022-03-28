
<?php 
/*session_start();
$db_username = 'root';
$db_password = '';
$db_name     = 'prof';
$db_host     = 'localhost';
// Connexion à MySQL
$connection = mysqli_connect("localhost", "root", "", "prof");

if (!empty($_POST)) {
    if (isset($_POST['envoyer'])) {
        // Réecriture des variables
        $date = $_POST['date'];
    }
$i=0;

$sql ="select count(*) as present from $date where presence='present(e)' ;";
$sql .="select count(*) as absent from $date where presence='absent(e)' ;";
$sql .="select count(*) as nbeleve from $date  ;";
$sql .="select count(*) as nbgarçon from $date where sexe='homme' ;";
$sql .="select count(*) as nbfille from $date where sexe='femme ;";


echo'<h1>**************إحصائيات حول المدرسة الابتدائية بشارع الحبيب بورقيبة****************</h1>' ;



if (mysqli_multi_query($connection, $sql)) {
    do { $tab=array();
        /* Stockage du premier résultat 
        if ($result = mysqli_store_result($connection)) {
            while ($row = mysqli_fetch_row($result)) {
                

                printf("%s\n", $row[0]);
              
            }
            mysqli_free_result($result);
        }
        /* Affichage d'une séparation **
        if (mysqli_more_results($connection)) {
          
           echo' &nbsp &nbsp </br>' ;
        }
    } while (mysqli_next_result($connection));
}
                    
                    


}*/
?>
<html>
  
  <head>
<link rel="stylesheet" href="style_stat.css">

<body>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>إحصائيّات</title>
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
                            <a class="nav-link" href="choixsta.php">
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
                    إحصائيات القسم سنة الأولى أ
 </h1>
                    <br>
                    
<?php
session_start();
$db_username = 'root';
$db_password = '';
$db_name     = 'prof';
$db_host     = 'localhost';
// Connexion à MySQL
$connection = mysqli_connect("localhost", "root", "", "prof");

if (!empty($_POST)) {
    if (isset($_POST['envoyer'])) 
    {
        // Réecriture des variables
        $date = $_POST['date'];
    }
$i=0;

$sql ="select count(*) as nbreleve from $date ;";
$sql .="select count(*) as absent from $date where presence='present(e)' ;";
$sql .="select count(*) as absent from $date where presence='absent(e)' ;";
$sql .="select count(*) as nbgarçon from $date where sexe='homme' ;";
$sql .="select count(*) as nbfille from $date where sexe='femme ;";

    echo"<div class='card mb-4'>
    <div class='card-header'>
        <i class='fas fa-table mr-1'></i>
         $date
    </div>
    <div class='card-body'>
        <div class='table-responsive'>";
    
    
 echo"</br>";
                            echo"    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                echo"    <thead>
                                        
                                        <tr>
                                        <th>عدد التلاميذ </th>
                                        <th>عدد التلاميذ الحاضرين</th>
                                        <th>عدد التلاميذ الغائبين </th>
                                        <th>عدد ذكور</th>
                                        <th>عدد الفتيات</th>


                                        </tr>
                                    </thead>";
                                    echo"<tbody>";
                                    echo"<tr>";
                                    if (mysqli_multi_query($connection, $sql)) {
                                    
                                      do { $tab=array();
                                          /* Stockage du premier résultat */
                                          
                                          if ($result = mysqli_store_result($connection)) {
                                              while ($row = mysqli_fetch_row($result)) 
                                              {
                                
                                    echo" <td>{$row['0']}</td>";}
                                    
                                
                            mysqli_free_result($result);
                        }
                        
                        /* Affichage d'une séparation */
                        if (mysqli_more_results($connection)) 
                        {
                          //echo' &nbsp &nbsp </br>' ;
                        }
                    } while (mysqli_next_result($connection));
                }
                echo" </tr> ";
                echo"  </tbody>";
               echo"  </table>";                   
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