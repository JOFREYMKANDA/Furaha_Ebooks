<?php
    session_start();
    require ("includes/database.php");

    if (isset($_POST['delete'])) {
      $no = mysqli_real_escape_string ($connection, $_POST['delete']);

      $sql = "DELETE FROM orders " .
             "WHERE no='$no' ";

             $results =$connection->query($sql);

             if ($results) {
              $_SESSION['message'] = "Order deleted successfull";
              header("Location:dashboard.php");
             } else {
              $_SESSION['message'] = "Order not deleted";
              header("Location:index.php");
             }
  }

    if (isset($_POST['update_order'])) {
      $order_no = mysqli_real_escape_string($connection, $_POST['order_no']);
      $name = mysqli_real_escape_string ($connection, $_POST['name']);
      $contacts = mysqli_real_escape_string ($connection, $_POST['contacts']);
      $title = mysqli_real_escape_string ($connection, $_POST['title']);
      $author = mysqli_real_escape_string ($connection, $_POST['author']);
      $price = mysqli_real_escape_string ($connection, $_POST['price']);
      $location = mysqli_real_escape_string ($connection, $_POST['location']);
      $fee = mysqli_real_escape_string ($connection, $_POST['fee']);
      $time = mysqli_real_escape_string ($connection, $_POST['time']);
      $total = mysqli_real_escape_string ($connection, $_POST['total']);
      $status = mysqli_real_escape_string ($connection, $_POST['status']);

      $sql = "UPDATE orders SET name='$name', contacts='$contacts', books='$title', author='$author', price='$price', location='$location', fee='$fee', time='$time', total='$total', status='$status' WHERE no='$order_no' ";

             $results = $connection->query($sql);

             if ($results) { 
              $_SESSION['message'] = "Order Updated successfull";
              header("Location:dashboard.php");
              exit(0);
            } else {
              $_SESSIN['message'] = "Order update failed";
              header("Location:dashboard.php");
              exit(0);
            }
    }


    if (isset($_POST['submit_order'])) {
        $name = mysqli_real_escape_string ($connection, $_POST['name']);
        $contacts = mysqli_real_escape_string ($connection, $_POST['contacts']);
        $title = mysqli_real_escape_string ($connection, $_POST['title']);
        $author = mysqli_real_escape_string ($connection, $_POST['author']);
        $price = mysqli_real_escape_string ($connection, $_POST['price']);
        $location = mysqli_real_escape_string ($connection, $_POST['location']);
        $fee = mysqli_real_escape_string ($connection, $_POST['fee']);
        $time = mysqli_real_escape_string ($connection, $_POST['time']);
        $total = mysqli_real_escape_string ($connection, $_POST['total']);
        $status = mysqli_real_escape_string ($connection, $_POST['status']);

        $sql = "INSERT INTO orders (name, contacts, books, author, price, location, fee, time, total, status ) " .
               "VALUES ('$name', '$contacts', '$title', '$author', $price, '$location', $fee, '$time', $total, '$status') ";

               $results = $connection->query($sql);

              if ($results) {
                $_SESSION['message'] = "Order created successfull";
                header("Location:dashboard.php");
                exit(0);
              } else { 
                $_SESSION["message"] = "An error occured";
                header("Location:create.php");
              }
            }