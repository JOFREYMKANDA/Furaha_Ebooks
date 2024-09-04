<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Create Order</title>
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
                        <h4>New Order</h4>
                        <a class="btn btn-danger float-end" href="dashboard.php">BACK</a>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="">Customer Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Contacts</label>
                                <input type="text" name="contacts" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Book title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Author</label>
                                <input type="text" name="author" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Delivery Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Delivery Fee</label>
                                <input type="text" name="fee" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Delivery Time</label>
                                <input type="text" name="time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Total</label>
                                <input type="text" name="total" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" name="submit_order">
                                    Create Order
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php");?>