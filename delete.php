<?php 
session_start();
require("includes/database.php");

    if (isset($_POST['delete'])) {
        $no = mysqli_real_escape_string ($connection, $_POST['no']);

        $sql = "DELETE FROM orders " .
               "WHERE no='$no' ";

               $results =$connection->query($sql);

               if ($results) {
                $_SESSION['message'] = "Order deleted successfull";
                header("Location:dashboard.php");
               } else {
                $_SESSION['message'] = "Order not deleted";
                header("Location:dashboard.php");
               }
    }