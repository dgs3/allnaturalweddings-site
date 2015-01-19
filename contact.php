<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<title>New York City Unique Event, NY Fun Creative Wedding | All Natural Weddings and Events</title>
<?php include('head.php');?>



</head>
<body  onload="MM_preloadImages('images/nav/home2.png','images/nav/offerings2.png','images/nav/about2.png','images/nav/contact2.png', 'images/nav/blog2.png')">


<div id="whitefade"></div>

	<div id="header">
	
		<div id="logo">
			<h1><a href="index.php"><img src="images/logo2.png" width="250" border="0" title="All Natural Weddings and Events" alt="All Natural Weddings and Events"></a></h1>
		</div>
	
		<?php include('header.php');?>
			
	
	</div><!--END HEADER-->

<div id="wrapper">

	
		<div id="main">
        		        		
        		
        	
        	

	        	

<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$contactmethod = $_POST['contactmethod'];
	$eventdate = $_POST['eventdate'];
	$eventtype = $_POST['eventtype'];
	$budget = $_POST['budget'];
	$howdid = $_POST['howdid'];
	$message = $_POST['message'];
	$submit = $_POST['submit'];
	
	
if($submit != NULL) {	
	if ($name != NULL && $phone != NULL && $email != NULL) {
		
		
		//define the receiver of the email
		$to = 'info@allnaturalweddingsandevents.com';
		//define the subject of the email
		$subject = 'Message Sent from All Natural Weddings and Events';
		//define the message to be sent. Each line should be separated with \n
		$emailmessage = "NAME: ".$_POST['name']."\n\nE-MAIL ADDRESS: ".$_POST['email']."\n\nPHONE NUMBER: ".$_POST['phone']."\n\nPREFERRED METHOD OF CONTACT: ".$_POST['contactmethod']."\n\nDATE OF EVENT: ".$_POST['eventdate']."\n\nTYPE OF EVENT: ".$_POST['eventtype']."\n\nBUDGET: ".$_POST['budget']."\n\nHOW DID YOU HEAR ABOUT ALL NATURAL WEDDINGS AND EVENTS: ".$_POST['howdid']."\n\nQUESTIONS: ".$_POST['message'];
		//define the headers we want passed. Note that they are separated with \r\n
		$headers = "From:".$_POST['email']."\r\nReply-To:".$_POST['email'];
		//send the email
		$mail_sent = @mail( $to, $subject, $emailmessage, $headers );
		
		$errormessage = '<div id="errormessage" style="margin:50px 0;"><p>Thank you for contacting All Natural Weddings and Events! <br/><br/>We will be in touch with you soon.</p></div>';
		
		$hideform = 'style="display:none;"';
		
	} else {
		$errormessage = '<div id="errormessage"><p>The name, phone number and email are required to submit this form.</p></div>';
	}
}

	
?>
			<div id="contact">
				<?php print($errormessage);?>
				<form name="input" action="contact.php" method="post" <?php print($hideform);?>>
				<fieldset>
				<ul>
					<li>
						<label>Name *</label>
						<input type="text" class="formstyle" name="name" value="<?php print($name); ?>">
					</li>
					<li>
						<label>Email Address *</label>
						<input type="text" class="formstyle" name="email" value="<?php print($email); ?>">
					</li>
					<li>
						<label>Phone Number *</label>
						<input type="text" class="formstyle" name="phone" value="<?php print($phone); ?>">
					</li>
					<li>
						<label>Preferred Method of Contact</label><br/>
						<input type="radio" name="contactmethod" value="Email"> Email <input type="radio" name="contactmethod" value="Phone"> Phone
					</li>
					<li>
						<label>Date of Event</label>
						<input type="text" class="formstyle" name="eventdate" value="<?php print($eventdate); ?>">
					</li>
					<li>
						<label>Type of Event</label>
						<input type="text" class="formstyle" name="eventtype" value="<?php print($eventtype); ?>">
					</li>
					<li>
						<label>Budget</label>
						<input type="text" class="formstyle" name="budget" value="<?php print($budget); ?>">
					</li>
					<li>
						<label>How did you hear about All Natural Weddings and Events?</label>
						<input type="text" class="formstyle" name="howdid" value="<?php print($howdid); ?>">
					</li>
					
					<li>
						<label>Questions:</label>
						<textarea class="fulltext" name="message"><?php print($message); ?></textarea>
					</li>
					<li>
						<input class="submitbuttonnew" type="submit" name="submit" value="Submit">
					</li>
				</ul>
				</fieldset>
				</form>
			</div>
				
				<h1 class="title"><img src="images/contacttitle.png" alt="Contact All Natural Weddings and Events" width="170"></h1>
        		<p>All Natural Weddings and Events can be reached through the form on the right. Please fill out every field and we will be in touch with you promptly.</p>
        		
        		<p>All Natural Weddings and Events can be reached through email at:<br/>
        		<a href="mailto:info@allnaturalweddingsandevents.com">info@allnaturalweddingsandevents.com</a></p>
				<br/>
				<table cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td>
							<div class="special"><img src="images/contact1.jpg" width="235"></div>
						</td>
						<td>
							<div class="special"><img src="images/contact2.jpg" width="235"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="special"><img src="images/contact3.jpg" width="235"></div>
						</td>
						<td>
							<div class="special"><img src="images/contact4.jpg" width="235"></div>
						</td>
					</tr>
				</table>
			
			<div style="clear:both;"></div>
       </div>
	
		<!--<div style="position:relative; width:400px;">
	
			<p>All Natural Weddings and Events wants to help you make the smallest impact as possible on the earth while ensuring that you still have a truly unique, and high quality event.  From the selection of vendors who use organic ﬂowers, recycled fabrics, farm to table food, and among other details, it is our job to bring these wonderful vendors to you to ensure your event is not only eco-friendly, but also stylish, creative and unforgettable.</p>
		</div>-->
		
		<!--<div id="phototree">
			<img src="images/phototree2.png">
		</div>-->
	</div>

</div>

<?php include ('footer.php');?>

</body>
</html>