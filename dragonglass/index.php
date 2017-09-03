<?php
// get request
if(isset($_GET['type'])){
	$type = 'catchData';
}elseif(isset($_GET['type']) && isset($_GET['i'])){
	$type = 'catchData';
}else{
	$type = 'catchData';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>coinman</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="js/scripts.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/table-style.css">
</head>
<body>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="results"></div>
				<input type="hidden" id="getType" value="<?php echo $type; ?>" name="">
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// when docs is ready load data
		var getType = $("#getType").val()
		$("document").ready(function (){
			$("#results").load("start.php");
		});

		// refresh data every 1 mins
		var refreshData = function (){
			$("#results").load("class/load-data.php?type="+getType);
		}
		// onload fresh data
		window.setInterval(refreshData, 1000 * 60);
	</script>
</body>
</html>


