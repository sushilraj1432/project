<!DOCTYPE html>
<html>
<head>
	<title>men's Aprons</title>

	<meta charset="utf-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="https://font-googleapis.com/css?/family=Abril+fatface|Dancing+script" 
  	rel="stylesheet">
</head>
<body class="container-flut">
	
<?php include("header.php")  ?>
<div>
	<?php 

		$con = mysqli_connect('localhost','root','id');
		mysqli_select_db($con,'aprontable');

		if ($con)
		 { 
		echo "connection sucusfull";
		} else{
			echo "no connection";
		}
		$query =SELECT `id`, `name`, `price`, `discount` FROM `aprontable` order by id ASC";

		$querylist= mysqli_query($con,$query);

		$num= mysqli_num_rows($querylist);

		if ($num > 0)
		{

		while ($prod= myspli_fetch_array($querylist) {

			print_r($prod);

			}
		}

	 ?>
	


</div>



</body>
</html>