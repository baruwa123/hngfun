<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Cosmas Profile</title>
	<style type="text/css">
	#bck{background-image: url(profile folder/img/img1.jpg);}
	.img{height: 200px;

				width:200px;
				border-radius:20px;
				border:8px solid #aaa;}
	#body{
		border-radius: 20px;
		background-color: #blue; 
		width:500px;
		height:200px;
		margin:0px auto;
		margin-top: 20px;
		margin-bottom: 10px;
		padding:10px;
		border:5px solid #AAAAAA ;
		text-align: center;
	}
	button{background-color: red;
            font-size:20px;
            border-radius: 5px;
	}
	li{float: center;
		}
	.fa{font-size: 50px;
		color: black;
		padding: 7px;
		background-color: #F2D9A4;
	}
	body{
		background-color: #efefef;
	}
	form {
		width: 60%;
		margin: 30px auto;
		color: #000;
	}
	form input {
		width: 100%;
		padding: 12px;
		border: #ededed;
		border-radius: 3px;
	}

	form button {
		border: transparent;
		background: blue;
	}
	</style>
</head>
<body id="bck">
	
	<center>
		<div><img class="img" src="https://pbs.twimg.com/profile_images/873174341911023616/9hZeE2wB.jpg"></div><br>
		<H1></H1>
	</center>
	<h3 id="body"><br>I am a budding entrepreneur. A graduate of Physics/Electronis from the University of Port Harcourt.<b> I come from Abak, Akwa Ibom State.   </b> <br><br>
					I love coding. I am presently doing my internship with hotels.ng<br><br></h3><center><center><p>	</p>
		        <P><a href="https://github.com/udom19" target="_blank" class="fa fa-github social github"></a>
                  <a href="https://twitter.com/udomcosmas" target="_blank" class="fa fa-twitter social twitter"></a>
		          <ul></P>		</center><button class=" btn-lg " id="AboutMe">Stage1 Task</button>
	<button class=" btn-lg " id="AboutMe"><a href="https://drive.google.com/open?id=0B17__D8maVgcU3AxSHl4aDNCdG8">My Android App</a></button>
</center>
	<form action="udom19.php" method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="Enter Your Name" />
		<label for="message">Message</label>
		<textarea id="message" name="message"></textarea>
		<button type="submit" name="submit">Send</button>
	</form>

</body>
</html>
