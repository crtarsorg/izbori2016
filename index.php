<?php include_once "templates/header.php"; ?>

<?php

$url_params = array_slice( explode($base,$_SERVER["REQUEST_URI"]), 1);
$page = $url_params[0];

        print_r("<pre>");
            var_dump($page);
            print_r("</pre>");
            die();


include_once 'router.php';  ?>

<?php include_once 'templates/footer.php';  ?>