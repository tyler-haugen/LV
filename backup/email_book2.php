<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		unset($messageError);
		if("" != trim($_POST["message"])) {
		    mail("lakotavalleyresort@gmail.com", "Booking Request", $_POST["message"], "From: lakotavalleyresort@gmail.com");
		}
		else
		{
			$messageError = "Required";
		}
	}

?>

<!doctype html>
<html lang="en">


    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="LV.css">
        
        <title>Lakota Valley Resort</title>
    </head>

    <body class="body">

        <span class="banner_main">
            <a href="home.html">
            	<img src="Img/Head.png" alt="Lakota Valley Banner" height="150px" width ="900px" />
            </a>
        </span>

        <nav>
            <ul class="nav_main">
            	<li><a href="home.html">Home</a></li>
                <li><a href="book.php" class="nav_selected">Book a Visit</a></li>
                <li><a href="tours.html">Tours</a></li>                
                <li><a href="maps.html"">Tour Maps</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>



        <div class="div_main">
        
	        <div class="booking_side">
	        	<h1> Book a Visit </h1>
				<form method="post" action="email_book.php">
		  			<label> First Name: </label> 
		  			<input type="text" name="firstname"> <br />
				  	<label> Last Name: </label>
				  	<input type="text" name="lastname"> <br />
				  	<label> Number of Guests: </label> 
		  			<select>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
					</select> <br />
					<label> Check In Date: </label>
					<input type="date" name="checkIn" min="2017-6-28"><br />
					<label> Check Out Date: </label>
					<input type="date" name="checkOut" min="2017-6-28"><br />
					<label> Notes: </label> 
					<textarea name="message"> </textarea> <br /> 
					<br /><br /><br /> 					
  				    <input type="submit">

				</form>
			</div>
			
			<div class="bookings_main">
				<h1>Availability Calendar</h1>
				<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=lakotavalleyresort%40gmail.com&amp;color=%232F6309&amp;src=iscf6l7unm00ff6jfvdcbvodrr3p9p06%40import.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
</body>