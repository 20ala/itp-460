<?php
	$host = "304.itpwebdev.com";
	$user = "traveleasy_user1";
	$pass = "usc460itp";
	$db = "traveleasy_info_db";

	$mysqli = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}

	$sql = "SELECT cars.price AS 'price', 
				cars.start_date AS 'start_date', 
				car_models.model_name AS 'model_name', 
				cities.city_name AS 'city_name' 
			FROM cars
			LEFT JOIN car_models
				ON cars.model_id = car_models.id
			LEFT JOIN cities
				ON cars.city_id = cities.id
			WHERE 1 = 1";

	if (isset($_GET['model_id']) && trim($_GET['model_id']) != '') {
		$model_id = $_GET['model_id'];
		$sql = $sql . " AND cars.model_id = $model_id";
	}

    if (isset($_GET['city_id']) && trim($_GET['city_id']) != '') {
		$city_id = $_GET['city_id'];
		$sql = $sql . " AND cars.city_id = $city_id";
	}

    if (isset($_GET['from']) && trim($_GET['from']) != '') {
		$from = $_GET['from'];
		$sql = $sql . " AND cars.start_date = $from";
	}

	if (isset($_GET['price']) && trim($_GET['price']) != '') {
		$price = $_GET['price'];
		$sql = $sql . " AND cars.price = $price";
	}

	$sql = $sql . ";";

	$results = $mysqli->query($sql);

	if (!$results) {
		echo $mysqli->error;
		$mysqli->close();
		exit();
	}

	$mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> TravelFly Home </title> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <style>   
        body {
            font-family: 'Open Sans', sans-serif;
        }

        #nav {
            position: fixed; 
            background-color: #EBEBEB; 
            margin-left: auto; 
            margin-right: auto;
            height: 75px; 
            top: 0px; 
            left: 0px; 
            right: 0px; 
            z-index: 1; 
        }

        #home {
            width: 300px; 
            margin-left: 20px; 
            padding: 10px;
            text-align: left; 
            font-size: 30px; 
            text-decoration: none; 
            position: relative; 
            top: 20px; 
            color: black; 
        }

        #home:hover {
            color: white; 
        }

        #option {
            width: 300px; 
            margin: 0px; 
        }
    
        #option li {
            width: 80px; 
            margin: 10px; 
        }

        #flight_opt {
            padding-left: 10px; 
            padding-right: 25px; 
        }

        #option a {
            color: black; 
            text-decoration: none; 
            font-size: 20px; 
        }

        #option ul {
            display: flex; 
            list-style: none; 
            position: absolute; 
            right: 50px;
            bottom: 0px; 
        }

        #option a:hover {
            color: white; 
        }


        #foot {
            background-color:#EBEBEB; 
            text-align: center; 
            height: 30px;
            line-height: 30px;
        }

        #table {
            width: 1000px;
            margin-top: 80px;
            margin-left: auto;
            margin-right: auto;
        }

        #table p {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px; 
        }

      
        .logo {
            width: 90px;
            height: 50px;
        }
        
        .wifi {
            width: 50px;
            height: 50px;
        }

        table {
        border-collapse: separate; 
        border-spacing: 0; 
        }

        td, th {
        margin-right: 10px;
        }

        table th {
            margin-left: 10px; 
        }

        #pic {
            margin-top: 100px; 
            margin-left: auto;
            margin-right: auto; 
            width: 1100px; 
            position: relative;
            text-align: center;
        }

        #res_pic {
            width: 1100px; 
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #pic h2{
            font-size: 60px; 
            color: white; 
            position: absolute; 
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        table {
            border-spacing: 15px;
        }

        </style>
    </head>

    <body>
        <div id="nav">
            <a id="home" href="homepage.php"> TRAVELEASY </a>
    
            <div id="option">            
                <ul>
                    <li id="car_opt"> <a href="car_form.php"> CARS </a> </li>
                    <li id="flight_opt"> <a href="flight_form.php"> FLIGHTS </a> </li>
                    <li id="hotel_opt"> <a href="hotel_form.php"> HOTELS </a> </li>
                </ul>
            </div>
        </div>

        <div id="pic">
            <img id="res_pic" src="https://images.unsplash.com/photo-1433838552652-f9a46b332c40?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D" alt="results">
            <h2> RESULTS </h2>
        </div>

        </div> <!-- .container -->
	<div class="container">
		<div class="row mb-4">
			<div class="col-12 mt-4">
				<a href="car_form.php" role="button" class="btn btn-primary">Back to Form</a>
			</div> <!-- .col -->
		</div> <!-- .row -->
		<div class="row">
			<div class="col-12">

				<!-- TODO: Replace '1' with actual number of results -->
				Showing <?php echo $results->num_rows; ?> result(s).

			</div> <!-- .col -->
			<div class="col-12">
				<table class="table table-hover table-responsive mt-4">
					<thead>
						<tr>
							<th>Date</th>
							<th>Price</th>
                            <th>City</th>
							<th>Model</th>
						</tr>
					</thead>
					<tbody>

						<!-- TODO: Loop through DB results and output them here. Modify or remove hard-coded output below. -->

						<?php while ($row = $results->fetch_assoc()) : ?>
						<tr>
							<td><?php echo $row['start_date']; ?></td>
							<td><?php echo "$",$row['price']; ?></td>
							<td><?php echo $row['city_name']; ?></td>
                            <td><?php echo $row['model_name']; ?></td>
                           
						</tr>
						<?php endwhile; ?>

					</tbody>
				</table>
			</div> <!-- .col -->
		</div> <!-- .row -->
		<div class="row mt-4 mb-4">
			<div class="col-12">
				<a href="car_form.php" role="button" class="btn btn-primary">Back to Form</a>
			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->



        <div id="foot"> 
            <p> TRAVELEASY &copy; 2023 </p>
        </div>

    </body>
</html>
