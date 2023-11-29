
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

       /* #flight_opt {
            padding-right: 35px; 
        } */

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

        #location_text {
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
        h1{
            text-align: center;
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
            <img id="first" src="img/car_main.jpeg" alt="main_pic"> 

            <p id ="description"> DELUXE OPTIONS </p>
        </div>
        <!-- End of Header  -->

    <br>
    <br>
<h1>Coming Soon...</h1>
    <br>
    <br>


       

        <div id="foot"> 
            <p> TRAVELEASY &copy; 2023 </p>
        </div>

    </body>
</html>
