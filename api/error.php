<?php
if (isset($_GET['get'])){
    $page=$_GET['get'];
    exec("php $page", $output, $return_val);
    if($return_val !=0){
        include 'error.php';
        exit();
    }
}

?>