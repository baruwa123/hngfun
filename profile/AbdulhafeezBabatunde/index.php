<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
   $subject = $_POST['subject'];
    $to  = 'abdulhafeez.ola@gmail.com';
    $body = $_POST['message'];
   if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
   if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
   if(empty($error)) {
     $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
     $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
     $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
     header("location: $uri");
   }
  }
 ?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Abdulhafeez's Profile</title>
<br>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"></script>
</head>
<body>
<div class="wrapper">
<div class="hiwrapper">HELLO!<br></div>
<br>
<img src="http://res.cloudinary.com/mista-oba/image/upload/v1505402773/abdul_pgstbc.jpg" alt="Abdulhafeez Babatunde" width="300" height="250">
<h1><span class="namewrapper"> Abdulhafeez Babatunde 
<a href="#contact"> <img src="http://res.cloudinary.com/mista-oba/image/upload/v1505516925/message_uppomw.png" class="button">
</a> </span></h1>
<br>
<div class="biowrapper">
<p>I am Abdulhafeez Babatunde, a passionate tech enthusiast with a primary focus on android and full-stack web development.
I believe learning is a continous process. And yea, I just completed my undergraduate study in Biochemistry from the University of Ilorin!</p>
</div>
<div class="prof-section" id="prof">
		<div class="container">
			<div class="prof-grids">
				<a href="https://github.com/mistaOba">
					<div class="col-md-1 prof-grid">
						<img src="http://res.cloudinary.com/mista-oba/image/upload/v1505516927/github_lc45ci.png" width="150" height="150" class="icon">
						<h4>mistaOba</h4>
						<span> </span>
						<p>Git Hub Profile</p>
					</div>
				</a>
				<a href="http://slack.com/mista-oba">
					<div class="col-md-6 prof-grid">
						<img src="http://res.cloudinary.com/mista-oba/image/upload/v1505516926/slack-chat_aec8qt.png" width="150" height="150" class="icon">
						<p>Slack Profile</p>
					</div>
				</a>
				</div>
		</div>
	</div>
<br>
<a href="https://github.com/mistaOba/hnginterns" class="button">Stage 1 project</a>
</div>
<div class="contact-section" id="contact">
	<form autocomplete="off" class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="container">
                    
                    <input type="text" class="input" name="fullname" placeholder="YourName" >                
                   
                    <input type="text" class="input" name="subject" placeholder="Subject*" required>
                    
                    <textarea name="message" placeholder="Type your message here*" id="message" cols="30" rows="10" style="height:100px" required></textarea>

                    <button type="submit" name="send">Send</button> 

                </div>

            </form>
	</div>
</body>
<footer>Copyright © 2017 Mista Oba</footer>
</html>

