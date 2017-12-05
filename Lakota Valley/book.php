<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email_message = "Booking from lakotavalley.com: "."\n";
		$email_message .= "First Name: ".$_POST['first_name']."\n";
	    $email_message .= "Last Name: ".$_POST['last_name']."\n";
    	$email_message .= "Number of Guests: ".$_POST['num_guest']."\n";
    	$email_message .= "Check In: ".$_POST['check_in']."\n";
    	$email_message .= "Check Out: ".$_POST['check_out']."\n";
    	$email_message .= "Phone Number: ".$_POST['phone_num']."\n";
    	$email_message .= "E-mail: ".$_POST['email']."\n";    	    	
    	$email_message .= "Note: ".$_POST['note']."\n";
    	
    	mail("lakotavalleyresort@gmail.com", "Booking Request", $email_message, "From: lakotavalleyresort@gmail.com");
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
            <a href="lVHome.html">
            	<img src="Img/Head.png" alt="Lakota Valley Banner" height="150px" width ="900px" />
            </a>
        </span>

        <nav class="nav_main">
            <ul>
            	<li><a href="home.html">Home</a></li>
                <li><a href="book.php" class="nav_selected">Book a Visit</a></li>
                <li><a href="tours.html">Tours</a></li>                
                <li><a href="maps.html">Tour Maps</a></li>
                <li><a href="products.html">Natural Products</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>



        <div class="div_main">
        
        	<div class="bookingMessage"> 
        		<h1 align="center">Sorry, we are not taking booking requests at this time. </h1> 
        	</div>  
        
	        <div class="booking_side">
	        	<h1> Book a Visit </h1>
				<form method="post" action="book.php">
					<fieldset disabled>
			  			<label> First Name: </label> 
			  			<input  type="text" name="first_name"> <br />
					  	<label> Last Name: </label>
					  	<input type="text" name="last_name"> <br />
					  	<label> Number of Guests: </label> 
			  			<select name="num_guest">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
						</select> <br />
						<label> Check In Date: </label>
						<input type="date" name="check_in" min="2017-6-28"><br />
						<label> Check Out Date: </label>
						<input type="date" name="check_out" min="2017-6-28"><br />
						<label> Phone Number: </label> 
			  			<input type="text" name="phone_num"> <br />
			  			<label > Email: </label> 
			  			<input  name="email" type="text"> <br />
						<label> Notes: </label> 
						<textarea name="note"> </textarea> <br /> 
						<br /><br /><br /> 					
	  				    <input class="submitButton" type="submit" value="Book">
					</fieldset>
				</form>
			</div>
			
			<div class="bookings_main">
				<h1>Availability Calendar</h1>
				<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=lakotavalleyresort%40gmail.com&amp;color=%232F6309&amp;src=iscf6l7unm00ff6jfvdcbvodrr3p9p06%40import.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
</body>