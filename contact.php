 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"> 
<html>
	<head>
		<title>Robotics for Space Exploration</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<meta name="keywords" content="Robotics, Space, Exploration, Rover, Skule, Univeristy of Toronto, Competition, URC, Mars, Astronomy">	
		<meta name = "author" content="Robotics for Space Exploration"/>

		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="contact.css">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		<script type="text/javascript">

			function validateForm( )
			{
				// Validating name input field
				var x = document.forms["contact-form"]["your_name"].value;
				if (x==null || x=="") {
  					alert("Name must be filled out");
  					return false;
  				}

				// Validating your_email input field
				x=document.forms["contact-form"]["your_email"].value;
				atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
  					alert("Not a valid e-mail address input for your email");
  					return false;
  				}

				// Validating receiver_email input field
				x=document.forms["contact-form"]["receiver_email"].value;
				atpos=x.indexOf("@");
				dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
  					alert("Not a valid e-mail address input for receiver's email");
  					return false;
  				}
			}
					
			$(document).ready(function()	{
				$(".menu-option").mouseenter( function () {
					$("#" + this.id).css("opacity", "0.75"); 
				})
				$(".menu-option").mouseleave( function () {
					$("#" + this.id).css("opacity", "1.0"); 
				})			
				
			});
		</script>
	</head>
	
	<body>
		<div id="header-area">
			<a href="index.html"><img id="header-logo" src="http://farm6.staticflickr.com/5451/9652412154_6c97a0643d_o.png"/></a>
		</div>
		
		<div id="page-content">
		
			<div id="left-side">
				<div id="nav-menu">
					<a href="index.html"><div class="menu-option" id="menu-home">Home</div></a>
					<a href="about.html"><div class="menu-option" id="menu-about-us">About Us</div></a>
					<a href="urc.html"><div class="menu-option" id="menu-urc">URC</div></a>
					<a href="team.html"><div class="menu-option" id="menu-team">Meet the Team</div></a>
					<a href="contact.html"><div class="menu-option" id="menu-contact-us">Contact Us</div></a>
				</div>
				
				<div id="left-side-bottom-image-container">
					<img id="left-side-bottom-image" src="http://farm4.staticflickr.com/3781/9645090001_d0df987d0a_o.png"/>
				</div>
			</div>
			
			<div id="right-side">
				<div class="right-general-text" id="contact-text">
					Whether you are a student wanting to join, a potential sponsor, or martian, we'd love to hear from you!
					<br/><br/>
					General contact (cc this address, if possible): <a class="link">contact [at] rsx-utoronto.com</a>
					<br/><br/>
					<table> 
						<tr>
							<td> General Contact </td>
							<td> <a class="link">contact [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> Mechanical Team </td>
							<td> <a class="link">mech [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> Electrical Team </td>
							<td> <a class="link">electrical [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> Embedded Team </td>
							<td> <a class="link">embedded [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> Strategy Team </td>
							<td> <a class="link">strategy [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> External Relations </td>
							<td> <a class="link">strategy [at] rsx-utoronto.com</a> </td>
						</tr>
						<tr>
							<td> Webmaster </td>
							<td> <a class="link">webmaster [at] rsx-utoronto.com</a> </td>
						</tr>
					</table>
				
					<hr>

					<?php

						$to = $_POST["recipients"];
						$subject = $_POST["your_name"];
						$message = $_POST["your_message"];
						$from = $_POST["your_email"];
						$headers = "RSX-Web Messages";
						if (mail($to,$subject,$message,$headers)) {
							echo "Thank you ".$_POST["name"]." for your input. We are happy to get back to you ASAP!";
						}
						else {
							echo "Oops! Message failure. Please kindly email us your message. Sorry for the inconvenience";
						}
					?>
				</div>
				
			</div>
		
		</div>			
	</body>
</html>

