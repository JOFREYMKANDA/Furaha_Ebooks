<?php 
    require("includes/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>View Order</title>
	<link rel="stylesheet" href="/styles/dashboard_styles.css">
	<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Order</h4>
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
                                        <div class="mb-3">
                                            <label for="">Customer Name</label>
                                            <p class="form-control"><?php echo $order['name'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Contacts</label>
                                            <p class="form-control"><?php echo $order['contacts'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Book title</label>
                                            <p class="form-control"><?php echo $order['books'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Author</label>
                                            <p class="form-control"><?php echo $order['author'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Price</label>
                                            <p class="form-control"><?php echo $order['price'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Location</label>
                                            <p class="form-control"><?php echo $order['location'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Fee</label>
                                            <p class="form-control"><?php echo $order['fee'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Delivery Time</label>
                                            <p class="form-control"><?php echo $order['time'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Total</label>
                                            <p class="form-control"><?php echo $order['total'];?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Status</label>
                                            <p class="form-control"><?php echo $order['status'];?></p>
                                        </div>
                                        <div class="mb-3">
                                        </div>
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

<?php include("footer.php");?>    