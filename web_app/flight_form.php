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

    $sql = "SELECT * FROM cities;";

	$results = $mysqli->query($sql);

	if (!$results) {
		echo $mysqli->error;
		$mysqli->close();
		exit();
	}

    $sql_away = "SELECT * FROM cities;";

	$results_away = $mysqli->query($sql_away);

	if (!$results_away) {
		echo $mysqli->error;
		$mysqli->close();
		exit();
	}
    

	$sql_air = "SELECT * FROM airlines;";

	$results_air = $mysqli->query($sql_air);

	if (!$results_air) {
		echo $mysqli->error;
		$mysqli->close();
		exit();
	}


	$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Search Page </title> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
            width: 330px; 
            margin: 0px; 
        }
    
        #option li {
            width: 90px; 
            margin: 10px; 
            line-height:22px;
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

        #hotel_opt{
            padding-left: 20px;
        }

        #main {
            margin-top: 90px; 
            margin-left: auto;
            margin-right: auto; 
            width: 1200px; 
            position: relative;
            text-align: center;
        }

        #first {
            width: 1100px; 
            height: 600px; 
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #description {
            font-size: 50px; 
            color: white; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 1px 1px 5px black;
        }

        #foot {
            bottom: 0;
            background-color: #EBEBEB;
            text-align: center;
            width: 100%;
            height: 30px;
            line-height: 30px;
        }

        #location {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 800px;

        }

        #start_text {
            width: 800px;
            font-size: 1.5em;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        #end_text {
            width: 800px;
            font-size: 1.5em;
            letter-spacing: 3px;
        }
        #criteria {
            text-align: center;
            font-size: 2.5em;
            margin-left: auto;
            margin-right: auto;

        }

        .input_group {
            margin-left: auto;
            margin-right: auto;
            width: 600px;
            text-align: center;
        }

        #transportation {
            width: 600px;
        }

        #continent {
            width: 600px;
        }

        #price {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        #dates {
            margin-left: auto;
            margin-right: auto;
            width: 600px;
            
        }

        #models {
            padding-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 600px;

        }

        .clearfloat {
		    clear: both;
	    }

        #buttons {
            padding-top: 25px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #buttons button {
            margin-left: 15px;
        }

        #help {
            width: 1115px;
            margin-left: auto;
            margin-right: auto;
            background-color: whitesmoke;
            padding-bottom: 50px;
        }

        #help h2, h3 {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #imgs {
            width: 1100px;
            display: flex;
        }

        #one, #two, #three {
            background-color: blue;
            width: 345px;
            margin: 10px;
        }

        .section {
            width: 345px;
            margin: 10px;
            position: relative;
            text-align: center;
        }

        .name {
            font-size: 30px; 
            color: white; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-40%, -50%);
            text-shadow: 1px 1px 5px black;
        }
   

        </style>
    </head>

    <body>
        <!-- Navbar -->
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
        <!-- End of Navbar -->

        <!-- Header -->
        <div id="main">
            <img id="first" src="img/flight_main.jpeg" alt="main_pic"> 

            <p id ="description"> GOING HOME? WHERE DO YOU WANT TO FLY? </p>
        </div>
        <!-- End of Header  -->

        <br>
        <br>

        <!-- Beginning of Content -->
        <form action="flight_search_results.php" method="GET">

            
            <div class="form-group row" id="location">
            <div class="col-sm-9">
					<select name="from_city_id" id="start_text" class="form-control">
						<option value="" selected>Enter Starting City...</option>

						<!-- TODO: Output all teams from the DB here. -->
						<?php while ($row = $results->fetch_assoc()) : ?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['city_name']; ?>
							</option>
						<?php endwhile; ?>

					</select>

			</div>
            <div class="col-sm-9">
            <select name="to_city_id" id="end_text" class="form-control">
						<option value="" selected>Enter Destination...</option>

						<!-- TODO: Output all teams from the DB here. -->
						<?php while ($row = $results_away->fetch_assoc()) : ?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['city_name']; ?>
							</option>
						<?php endwhile; ?>

					</select>
            </div>
			</div> <!-- .form-group -->
        <br>

        <br>

        <div class="form-group row" id="dates">
            <label class="col-sm-3 col-form-label text-sm-right"> Starting Date: </label>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col">
                        <label class="form-check-label my-1">
                            <input type="date" class="form-control mt-2" name="from">
                        </label>
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div> <!-- .col -->
        </div> <!-- .form-group -->

        <br>

        <div class="form-group row" id="price">
            <label class="col-sm-3 col-form-label text-sm-right"> Starting Budget:</label>
            <div class="col-sm-9">
                <input type="input" class="form-control" name="price" placeholder="Search by starting price">
            </div>
        </div> <!-- .form-group -->

        <div class="form-group row" id="models">
            <label class="col-sm-3 col-form-label text-sm-right"> Airline: </label>
            <div class="col-sm-9">
					<select name="airline_id" id="car_model" class="form-control">
						<option value="" selected>-- All --</option>

						<!-- TODO: Output all venues from the DB here. -->
						<?php while ($row = $results_air->fetch_assoc()) : ?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['airline_name']; ?>
							</option>
						<?php endwhile; ?>
					</select>
				</div>
        </div> <!-- .form-group -->
        </div> <!-- .form-group -->

        <div id="buttons">
            <button type="submit" class="btn btn-primary">Search</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </div>

        </form>

        <br>

        <br>

        <div id="help">
            <br> 

            <h2> Need help searching? </h2>

            <br> 

            <h3> Locations most visited by students: </h3>

            <br> 
            
            <div id="imgs">

                <div class="section">
                    <img id="one" src="img/paris.jpeg" alt="paris">
                    <p class="name"> Paris </p>
                </div>

                <div class="section">
                    <img id="two" src="img/nyc.jpeg" alt="nyc">
                    <p class="name"> New York City </p>
                </div>

                <div class="section">
                    <img id="three" src="img/cancun.jpeg" alt="cancun">
                    <p class="name"> Cancun </p>
                </div>
            </div>
        </div>

        <br>


       

        <div id="foot"> 
            <p> TRAVELEASY &copy; 2023 </p>
        </div>

    </body>
</html>
