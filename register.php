<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {
                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
                                                 
                        } else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
                                                 
                        } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>


</head>

<body>

    <div class="brand">Business Casual</div>
    <div class="address-bar">459 Ton Duc Thang - Lien Chieu - Da Nang</div>

    <!-- Navigation -->
   <?php require_once 'nav.php';?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Register
                        <strong>form</strong>
                    </h2>
                    <hr>
                   <div id="add_err2"></div>
                    <form role="form" class="text-center">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" maxlength="25" >
                           <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                          </div>
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" maxlength="25">
                          
                          </div>
                           <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" maxlength="25">
                           
                          </div>
                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" maxlength="10">
                          </div>
                          
                          <button type="submit" id="register" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <p>&copy; UED 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
