<?php 
	session_start();
	require("includes/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="/styles/dashboard_styles.css">
	<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2<span><img src="/img/logo.png" alt=""></span> Furaha-Ebooks</h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-users"></span>
					<span>Customers</span></a>
				</li>
				<li>
					<a href=""><span class="las la-shopping-bag"></span>
					<span>Orders</span></a>
				</li>
				<li>
					<a href=""><span class="las la-book"></span>
					<span>Books</span></a>
				</li>
				<li>
					<a href=""><span class="las la-hand-holding-usd"></span>
					<span>Sales</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user-circle"></span>
					<span>Accounts</span></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h2>

			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>

			<div class="user-wrapper">
				<img src="/img/mkanda.png" width="40px" height="40px" alt="">
				<div>
					<h4>Jofrey Mkanda</h4>
					<small>Developer</small>
				</div>
			</div>
		</header>

		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>15</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>12</h1>
						<span>Orders</span>
					</div>
					<div>
						<span class="las la-shopping-bag"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>25</h1>
						<span>Books</span>
					</div>
					<div>
						<span class="las la-book"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>80,000/Tsh</h1>
						<span>Income</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>
			</div>
			<div class="container my-5">
				<?php include('message.php');?>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header d-inline">
								<h4>Today's Orders
									<a href="create.php" class="btn btn-primary float-end">Add new order</a>
								</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-bordered table-striped">
										<thead class="table-dark">
											<tr>
												<th scope="col">No</th>
												<th scope="col">Customer Name</th>
												<th scope="col">Contacts</th>
												<th scope="col">Status</th>
												<th scope="col">Action</t>
											</tr>
										</thead>
										<tbody class="table-group-divider">
											<?php
											$sql = "SELECT * FROM orders";
											$results = $connection->query($sql);

											if (mysqli_num_rows($results) > 0) {
												foreach ($results as $order) {
											?>
												<tr>
													<th scope="row"><?php echo $order['no'];?></th>
													<td><?php echo $order['name'];?></td>
													<td><?php echo $order['contacts'];?></td>
													<td class="overflow-x-auto"><?php echo $order['status'];?></td>
													<td>
														<a href="view.php?no=<?php echo $order['no'];?>" class="btn btn-info btn-sm d-inline">View</a>
														<a href="edit.php?no=<?php echo $order['no'];?>" class="btn btn-success btn-sm d-inline">Edit</a>
														<form action="code.php" method="post" class="d-inline">
															<button type="submit" name="delete" value="<?php echo $order['no'];?>" class="btn btn-danger btn-sm d-inline">
															Delete
															</button>
														</form>
													</td>													
												</tr>
												<?php
												}
											} else {
												echo "<h5>No Orders Found<?h5>";
											}
													?>
										</tbody>
									</table>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>   
		</main>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>