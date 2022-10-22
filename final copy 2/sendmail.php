<!doctype html>

<html lang="en">
<head>
	  <title> Saroo'ah Cafe | Cozy lively cafe serving delicious drinks for everyone to enjoy</title>
	  <meta charset="utf-8">
      <meta name="description" content="Warm lively cafe with delicious specialty drinks for everyone to enjoy">
	  <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/Kanit/Kanit-Black.ttf"/>
    <link rel="stylesheet" href="styles/navigation.css">
  

  </head>
	
<body>
  <nav id="nav_menu_1">
    <ul>
      <li> <a href="index.html">Home</a></li>
        <li> <a href="drinks.html">Drink menu</a></li>
        <li> <a href="food.html">Food Menu</a></li>
        <li> <a class="current" href="reserve.html">Reserve</a></li>
        <li> <a href="events.html">Events</a></li>
        <li> <a href="about.html">About</a></li>
    </ul>
  </nav>
	  <header>
      <img src="images/cozycafe2.jpeg" alt="Inside of Cafe" width="250">
		  <h1>Saroo'ah Cafe</h1>
      <h2>A homey and warm ambient with suroundng greenery and a tasty variety of drinks to enjoy</h2>

    </header>

    <main>
        <h2>Want to reserve the Saroo'ah Cafe space?</h2>
          <p>At Saroo'ah Cafe, our cafe is designed to give a homey and warm atmosphere for guests to enjoy with their visit. This space is beautiful for events like weddings, get-togethers, events, etc.
             <br> To book our space, please fill out your information below and someone will contact you within one business day only on normal operation hours.</p>
             
        <section>
        <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Contact Information</legend>
    		<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    		<legend>Message Information</legend>
			<label for="reservation_date">Today's  Date:</label>
			<input type="date" name="reservation_date" id="reservation_date" value="<?php echo $_REQUEST['reservation_date'] ?>" disabled><br>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message:</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
<!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "murrye2@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
    $reservation_date = $_REQUEST['reservation_date']; //Request subject that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Phone: " . $phone . "\n"; //Continue the email body
    $body .= "Reservation Date:" . $reservation_date . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</h2>
        </section>
    </main>

    <footer>
      <p>&copy; Copyright 2022 Saroo'ah Cafe</p>
    </footer>
</body>
</html>