<?php 
    session_start();
    require("includes/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Edit Order</title>
	<link rel="stylesheet" href="/styles/dashboard_styles.css">
	<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="container my-5">
        <?php include('message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Order</h4>
                        <a class="btn btn-danger float-end" href="dashboard.php">BACK</a>
                    </div>
                    <div class="card-body">
                        <?php
                            if (isset($_GET['no'])) {
                                $order_no = mysqli_real_escape_string($connection, $_GET['no']);
                                $sql = "SELECT * FROM orders WHERE no = '$order_no'";
                                $results = $connection->query($sql);

                                if (mysqli_num_rows($results) > 0) {
                                    $order = mysqli_fetch_array($results);
                                    //print_r($order);   This code prints the data from the database
                                    ?>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="order_no" value="<?php echo $order_no;?>">
                                        <div class="mb-3">
                                            <label for="">Customer Name</label>
                                            <input type="text" name="name" value="<?php echo $order['name'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Contacts</label>
                                            <input type="text" name="contacts" value="<?php echo $order['contacts'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Book title</label>
                                            <input type="text" name="title" value="<?php echo $order['books'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Author</label>
                                            <input type="text" name="author" value="<?php echo $order['author'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Price</label>
                                            <input type="text" name="price" value="<?php echo $order['price'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Location</label>
                                            <input type="text" name="location" value="<?php echo $order['location'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Fee</label>
                                            <input type="text" name="fee" value="<?php echo $order['fee'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Time</label>
                                            <input type="text" name="time" value="<?php echo $order['time'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Total</label>
                                            <input type="text" name="total" value="<?php echo $order['total'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Status</label>
                                            <input type="text" name="status" value="<?php echo $order['status'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary" name="update_order">
                                                Update Order
                                            </button>
                                        </div>
                                    </form>
                                    <?php

                                } else {
                                    echo "<h4>Order Not Found</h4 >";
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include("include/footer.php");