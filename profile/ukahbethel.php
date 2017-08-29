

<?php

<!doctype html>
   <html lang="en">
<head> 
     <meta charset="utf-8">
    <title>Ukahbethel Profile | HNG Interns</title>
	<link rel="stylesheet" href="ukahbethel\ukahbethel.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
	<div class="photo">
	   <img src="http://res.cloudinary.com/dv5tn986s/image/upload/v1503887475/ukahbethel_qshfta.jpg" alt="ukahbethel" title="Ukah Bethel"/>
	</div>
	<h2>Ukah Bethel</h2>
	   <p id="biography">I am a Final Year Computer Science Student in Michael Okpara University of Agriculture Umudike<br/>
	                     I am a Web Developer, an absolute tech lover and I'm also certified in CompTIA. .<br>
						 I am very much interested in software development and I'm working on venturing deep into it.<br/><br>
						 
						 I am a music lover, a good listener and a passionate tech blogger.
						
						  
						  </p>
	
	<div id="socials">
	
	<h4><span class="fa fa-slack"> </span> <i>Slack:</i><a href="https://hnginterns.slack.com/team/ukahbethel" target="parent">@ukahbethel</a></h4>
			<h4><span class="fa fa-github"> </span> <i>GitHub:</i><a href="https://github.com/bethel-u" target="parent">bethel-u</a></h4>
	    
	    <h4>Email: <a href="mailto:ukahbethel@gmail.com">Ukahbethel@gmail.com</a></h4>
	
	
	</div>
	
	<div class="box">
	<h3>Leave A Message</h3>
	
	<form method="POST" action="/ukahbethel.php" >
	   <label for="name">Name:</label> <br/>
	   <input type="text" id="name" name="Name" size="70" required ><br/>
	   <label for= "email">Email:</label><br/>
	   <input type="email" id="email" name="Email" size="70" required><br/>
	   <label for="subject">Subject</label><br/>
	   <input type="text" id="subject" name="Subject" size="70" required><br/>
	   <label for ="message">Message:</label><br/>
	   <textarea id="message" name="Message" rows="10" cols="70"placeholder="Write your message here..." required></textarea><br/>
	   <input type="submit" id="submit" value="Submit Message">
	 
	   
	<?php

  $config = include('../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $result = $con->query('SELECT * FROM password LIMIT 1');
  $data = $result->fetch();
  
  $password = $data['password'];
  $subject = $_POST['subject'];
  $body = $_POST['message'];
    
  header("location:../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ukahbethel@gmail.com");

  
?>
	
	
	</form>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>

</html>


?>


