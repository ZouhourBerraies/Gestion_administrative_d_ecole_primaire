<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>اختيار القسم</title>
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
                    <h1 class="mt-4">اختيار القسم</h1>
                    <br>





                    <div class="container">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-info" type="button" onclick="window.location.href ='sta.php';" id="bouton-texte">موافق</button>
                            </div>
                            <label type="checkbox" name="1a" class="form-control" aria-describedby="bouton-texte"> أ1</label>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-danger" type="button" id="bouton-texte">موافق</button>
                            </div>
                            <label type="checkbox" name="2b" class="form-control" aria-describedby="bouton-texte"> ب2</label>
                        </div>
                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-success" type="button" id="bouton-texte">موافق</button>
                            </div>
                            <label type="checkbox" name="4a" class="form-control" aria-describedby="bouton-texte"> أ4
                            </label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-warning" type="button" id="bouton-texte">موافق</button>
                            </div>
                            <label type="checkbox" name="5b" class="form-control" aria-describedby="bouton-texte"> 5 ب
                               </label>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-danger" type="button" id="bouton-texte">موافق</button>
                            </div>
                            <label type="checkbox" name="d" class="form-control" aria-describedby="bouton-texte">أ6
                            </label>
                        </div>

                    </div>

            </main>

        </div>
    </div>
</body>

</html>