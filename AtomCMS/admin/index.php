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
                $q = "SELECT * FROM pages ORDER BY title";
                $r = mysqli_query($dbc, $q);

                while ($title_list = mysqli_fetch_assoc($r)) { ?>

                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?php echo $title_list['title'];?></h5>
                    <p class="mb-1"><?php echo mb_strimwidth(strip_tags($title_list['body']), 0, 150, "...");?></p>
                </a>

                <?php } ?>
            </div>
        </div>

        <div class="col-8">Page form</div>

</div>


<?php include_once (D_TEMPLATE.'/footer.php'); // footer ?>

<?php if ($debug == 1) { include_once (ROOT_DIR.'Widgets/Debug.php'); } //If debug status is 1, then "debug" button is visible and data available ?>


</body>
</html>