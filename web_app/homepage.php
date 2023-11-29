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

        #main {
            margin-top: 90px; 
            margin-left: auto;
            margin-right: auto; 
            width: 1200px; 
            position: relative;
            text-align: center;
        }

        #first {
            width: 1200px; 
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
        }

        #both {
            margin-top: 50px;
            width: 1200px; 
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        #car, #fly {
            width: 6000px; 
        }

        #car h2, #car h3, #fly h2, #fly h3 {
            text-align: center; 
            margin-left: auto;
            margin-right: auto;
        }

        #car_photo, #bag_photo {
            width: 600px;
        }

        #car_link, #flight_link, #hotel_link {
            text-align: center;
            position: relative;
            left: 250px;
            text-decoration: none;
            color: darkslateblue;
        }

        #foot {
            background-color:#EBEBEB; 
            text-align: center; 
            height: 30px;
            line-height: 30px;
        }

        #hotel {
            margin-top: 50px; 
            margin-left: auto;
            margin-right: auto; 
            width: 1200px; 
            position: relative;
            text-align: center;
        }

        #hotel_pic {
            width: 1200px; 
            height: 400px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #info {
            font-size: 20px; 
            color: white; 
            position: absolute; 
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #hotel_link {
            color: white; 
            position: absolute; 
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
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

        <div id="main">
            <img id="first" src="img/sunset.jpeg" alt="main_pic"> 

            <p id ="description"> THE BEST TRAVEL OFFERS IN ONE PLACE. FILTERED ON A STUDENT BUDGET. </p>
        </div>

        <div id="both">
            <div id="car">
                <h2> CAR RENTALS </h2>

                <h3> RESERVE A CAR FOR WHEREVER YOU'RE GOING.  </h3>

                <a id="car_link" href="car_form.php"> Find Rentals > </a>

                <img id="car_photo" src="img/cars.jpeg" alt="car_pic">
            </div>

            <div id="fly">
                <h2> BOOK FLIGHTS </h2>

                <h3> SEE FLIGHT INFORMATION TO YOUR DESTINATION. </h3>

                <a id="flight_link" href="flight_form.php"> See Flights > </a>

                <img id="bag_photo" src="img/bags.jpeg" alt="bag_pic">
            </div>
        </div>

        <div id="hotel">
            <img id="hotel_pic" src="img/hotel.jpeg" alt="hotel_photo">

            <p id="info"> SECURE HOTEL RESERVATIONS IN YOUR AREA OF CHOICE </p>
            <a id="hotel_link" href="hotel_form.php"> Explore Hotels > </a>
        </div>

        <div id="foot"> 
            <p> TRAVELEASY &copy; 2023 </p>
        </div>

    </body>
</html>
