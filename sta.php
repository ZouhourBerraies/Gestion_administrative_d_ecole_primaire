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
                    <h1 class="mt-4">إحصائيّات</h1>
                    <br>



                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <form class="needs-validation" name="prof" method="post" action="actionsta.php">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="date">اختار التاريخ
</label>
                                        <input type="text" class="form-control" name="date" placeholder="jour00mois">
                                    </div>
                                    <div id="corps"></div>
                                    <div align="right">
                                        <button class="btn btn-secondary" type="button" onclick="window.location.href ='prof.php';" name="annuler">إلغاء</button>
                                        <button class="btn btn-primary" type="submit" name="envoyer">إرسال</button>
                                    </div>
                            </form>
                        </ol>
                    </div>






                </div>
            </main>

        </div>
    </div>

</body>

</html>