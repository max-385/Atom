<?php

//session start:
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}

?>

<?php
include_once('config/setup.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page['title'].' | '.$site_title; ?></title>

    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php
    include_once(ROOT_DIR.'config/js.php');
    include_once(ROOT_DIR.'config/css.php');
    ?>

</head>


<body class="d-flex flex-column">
<?php include_once (D_TEMPLATE.'/navigation.php'); //Main navigation ?>

<H1>Admin Dashboard</H1>


<div class="row">

        <div class="col-4">
            <div class="list-group">

                <?php
                if (isset($_POST['submitted']) == 1) {
                    $q = "INSERT INTO pages (title, label, header, body) VALUES ('$_POST[addtitle]', '$_POST[addlabel]', '$_POST[addheader]', '$_POST[addbody]')";
                    $r = mysqli_query($dbc, $q);
                    if($r) {echo 'New page was added!';}
                        else {
                            echo '<br> Insert page error: '.mysqli_error($dbc);
                            echo '<br>'.$q;
                            }
                }?>

                <?php
                $q = "SELECT * FROM pages ORDER BY title";
                $r = mysqli_query($dbc, $q);

                while ($title_list = mysqli_fetch_assoc($r)) { ?>

                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?php echo $title_list['title'];?></h5> <!-- All page titles -->
                    <p class="mb-1"><?php echo mb_strimwidth(strip_tags($title_list['body']), 0, 150, "...");?></p> <!-- Titles body text preview without tags -->
                </a>

                <?php } ?>

            </div> <!-- list group end -->
        </div> <!-- first column end -->

        <div class="col-8"> <!-- second column beginning -->

            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" id="title" name= "addtitle" placeholder="Page title ">
                </div>

                <div class="form-group">
                    <label for="label">Label:</label>
                    <input class="form-control" type="text" id="label" name= "addlabel" placeholder="Page label ">
                </div>

                <div class="form-group">
                    <label for="header">Header:</label>
                    <input class="form-control" type="text" id="header" name= "addheader" placeholder="Page header ">
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="addbody" rows="3" placeholder="Page body"></textarea>
                </div>


                <button type="submit" class="btn btn-secondary">Submit</button>

                <input type="hidden" value="1" name="submitted">
            </form>
        </div> <!-- second column end -->

</div>


<?php include_once (D_TEMPLATE.'/footer.php'); // footer ?>

<?php if ($debug == 1) { include_once (ROOT_DIR.'Widgets/Debug.php'); } //If debug status is 1, then "debug" button is visible and data available ?>


</body>
</html>