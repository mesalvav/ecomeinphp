<?php require_once("../resources/config.php"); ?> 
<?php require_once("cart.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php


if(isset($_GET['tx'])) {

    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transaction = $_GET['tx'];
    $status = $_GET['st'];

    echo  $currency. "  " . $amount . " tx " . $_GET['tx'] . " status " . $status;
    
    $query = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES('{$amount}','{$transaction}','{$status}','{$currency}')");

    confirm($query);

    session_destroy();
} else {
        redirect("index.php");

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



