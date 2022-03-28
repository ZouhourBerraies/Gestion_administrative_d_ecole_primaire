<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>فضاء المعلمون</title>
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
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                تسجيل خروج
                            </a>
                        </div>
            </nav>
        </div>


        <div id="layoutSidenav_content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
            session_start();
            if ($_SESSION['username'] !== "") {
                $user = $_SESSION['username'];
                // afficher un message

            }
            ?>
            <!-- tester si l'utilisateur est connecté -->
            <?php

            if (isset($_GET['deconnexion'])) {
                if ($_GET['deconnexion'] == true) {
                    session_unset();
                    header("location:index.php");
                }
            } else if ($_SESSION['username'] !== "") {
                $user = $_SESSION['username'];
                // afficher un message
            }
            ?>
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">فضاء المعلمون</h1>
                    <br>

                    <div class="row">
                        <div id="corps"></div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <button type="button" class="card-body" onclick="window.location.href = 'profil.php';">المعلومات الشّخصيّة </button>
                            </div>
                        </div>
                        <div id="corps"></div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <button type="button" class="card-body" onclick="window.location.href='emploi.php';">جدول أوقاتي </button>
                            </div>
                        </div>
                        <div id="corps"></div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <button type="button" class="card-body" onclick="window.location.href = 'presence.php';"> الحضور </button>
                            </div>

                        </div>
                        <div id="corps"></div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <button type="button" class="card-body" onclick="window.location.href = 'gestionEleve.php';">التصرف في التلاميذ </button>

                            </div>
                        </div>

                        <div id="corps"></div>

                        <div id="corps"></div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-final text-white mb-4">
                                <button type="button" class="card-body" onclick="window.location.href = 'choixsta.php';">إحصائيّات </button>
                            </div>
                        </div>

                    </div>

            </main>

        </div>
    </div>

</body>

</html>