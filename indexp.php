<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>الحضور</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .box {
            width: 1270px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }
    </style>
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
                    <h1 class="mt-4"> القسم سنة الأولى أ</h1>
                    <br>
                    <div class="container box">
                        <h1 align="center">قائمة التلاميذ</h1>
                        <br />

                        <div class="container-fluid">
                            <div class="breadcrumb mb-4">
                                <form class="needs-validation" name="classea" method="post" action="tablep.php">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label>إضافة تاريخ اليوم</label>
                                            <input type="text" class="form-control" name="date" placeholder="jour00mois">
                                        </div>
                                        <div id="corps"></div>
                                        <div align="right">

<button class="btn btn-secondary" type="button" onclick="window.location.href ='prof.php';" name="annuler">إلغاء</button>
<button class="btn btn-info" type="submit" name="envoyer">إرسال</button>

</div>
</form>

                            </div>
                        </div>

                        <div id="result" class="table-responsive">
                            <!-- Data will load under this tag!-->
                        </div>
                    </div>

                    <!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
                    <div id="customerModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">إضافة تاريخ اليوم</h4>
                                </div>
                                <div class="modal-body">

                                    <label> المعرف</label>
                                    <input type="number" name="ideleve" id="ideleve" class="form-control" />
                                    <br />
                                    <label> الاسم</label>
                                    <input type="text" name="nom" id="nom" class="form-control" />
                                    <br />
                                    <label>لقب</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" />
                                    <br />
                                    <label>حضور</label>
                                    <select name="presence" id="presence" class="form-control">
                                        <option valeur="present"> present(e)</option>
                                        <option valeur="absent"> absent(e)</option>
                                    </select>

                                    <br />
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="customer_id" id="customer_id" />
                                    <input type="submit" name="action" id="action" class="btn btn-success" />
                                    <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

        </main>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            fetchUser(); //This function will load all data on web page when page load
            function fetchUser() // This function will fetch data from table and display under <div id="result">
            {
                var action = "Load";
                $.ajax({
                    url: "actionp.php", //Request send to "action.php page"
                    method: "POST", //Using of Post method for send data
                    data: {
                        action: action
                    }, //action variable data has been send to server
                    success: function(data) {
                        $('#result').html(data); //It will display data under div tag with id result
                    }
                });
            }

            //This JQuery code will Reset value of Modal item when modal will load for create new records
            $('#modal_button').click(function() {
                $('#customerModal').modal('show'); //It will load modal on web page
                $('#ideleve').val(''); //This will clear Modal first name textbox
                $('#nom').val(''); //This will clear Modal last name textbox
                $('#prenom').val(''); //This will clear Modal last name textbox
                $('#presence').val(''); //This will clear Modal last name textbox

                $('.modal-title').text("إضافة تلميذ جديد"); //It will change Modal title to Create new Records
                $('#action').val('Create'); //This will reset Button value ot Create
            });

            //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
            $('#action').click(function() {
                var ideleve = $('#ideleve').val(); //Get the value of first name textbox.
                var nom = $('#nom').val(); //Get the value of last name textbox
                var prenom = $('#prenom').val(); //Get the value of last name textbox
                var presence = $('#presence').val(); //Get the value of last name textbox


                var id = $('#customer_id').val(); //Get the value of hidden field customer id
                var action = $('#action').val(); //Get the value of Modal Action button and stored into action variable
                if (ideleve != '' && nom != '' && prenom != '' && presence != '') //This condition will check both variable has some value
                {
                    $.ajax({
                        url: "actionp.php", //Request send to "action.php page"
                        method: "POST", //Using of Post method for send data
                        data: {
                            ideleve: ideleve,
                            nom: nom,
                            prenom: prenom,
                            presence: presence,
                            id: id,
                            action: action
                        }, //Send data to server
                        success: function(data) {
                            alert(data); //It will pop up which data it was received from server side
                            $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
                            fetchUser(); // Fetch User function has been called and it will load data under divison tag with id result
                        }
                    });
                } else {
                    alert("يجب تعمير جميع المعطيات !"); //If both or any one of the variable has no value them it will display this message
                }
            });

            //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
            $(document).on('click', '.update', function() {
                var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
                var action = "Select"; //We have define action variable value is equal to select
                $.ajax({
                    url: "actionp.php", //Request send to "action.php page"
                    method: "POST", //Using of Post method for send data
                    data: {
                        id: id,
                        action: action
                    }, //Send data to server
                    dataType: "json", //Here we have define json data type, so server will send data in json format.
                    success: function(data) {
                        $('#customerModal').modal('show'); //It will display modal on webpage
                        $('.modal-title').text("تحديث قائمة التلاميذ"); //This code will change this class text to Update records
                        $('#action').val("Update"); //This code will change Button value to Update
                        $('#customer_id').val(id); //It will define value of id variable to this customer id hidden field
                        $('#ideleve').val(data.ideleve); //It will assign value to modal first name texbox
                        $('#nom').val(data.nom);
                        $('#prenom').val(data.prenom); //It will assign value of modal last name textbox
                        $('#presence').val(data.presence); //It will assign value of modal last name textbox

                    }
                });
            });


        });
    </script>

</body>

</html>