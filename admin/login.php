<?php

//Start Session
session_start();

//Database connection
include_once('Config/connection.php');

if($_POST){

    $q= "SELECT * FROM users WHERE email='$_POST[emailnow]' AND password=SHA1('$_POST[passnow]')";
    $r= mysqli_query($dbc, $q);

    if(mysqli_num_rows($r)==1){
        $_SESSION['username'] = $_POST['emailnow'];
        header('location:index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login</title>

    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php
    include_once(ROOT_DIR.'config/js.php');
    include_once(ROOT_DIR.'config/css.php');
    ?>

</head>


<body class="d-flex flex-column">
<?php //include_once (D_TEMPLATE.'/navigation.php'); //Main navigation ?>

    <div class="container">

        <div class = "row">
                <div class="col-md-4 offset-md-4">
                    <div class="card">
                        <H4 class="card-header text-center">Login</H4>

                        <div class="card-body">
                        <form action="login.php" method="post">

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name= "emailnow" placeholder="Your e-mail">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" class="form-control" id="pass" name="passnow" placeholder="Password">
                            </div>

                            <!-- <div class="form-group form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                             </div> -->

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div> <!--end card body -->
                    </div> <!-- end card -->
                </div> <!-- end column ( login form center) -->
        </div> <!-- end row -->


    </div>


<?php include_once (D_TEMPLATE.'/footer.php'); // footer ?>

<?php// if ($debug == 1) { include_once (ROOT_DIR.'Widgets/Debug.php'); } //If debug status is 1, then "debug" button is visible and data available ?>


</body>
</html>