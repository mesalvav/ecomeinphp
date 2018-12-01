<?php require_once("../resources/config.php"); ?> 
<?php require_once("cart.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php

// echo  $_POST['amt']. "   " . $_POST['cc'];
//    echo $_POST['txn_id'] . "   " . $_POST['st'];
   echo $_REQUEST['txn_id'] . "   " ;

if(isset($_GET['txt'])) {

    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transaction = $_GET['tx'];
    $status = $_GET['st'];

} else {
    //    redirect("index.php");

}


?>


<!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
<h4 class="text-center bg-warning">thank you</h4>


 </div><!--Main Content-->


    </div>
    <!-- /.container -->

 
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>



