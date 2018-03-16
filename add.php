<?php 
include('server.php'); 
if(isset($_POST['add'])){
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$img =$_FILES['img'];
		if(empty($name)){
			array_push($errors,"name is required");
		}
		if(empty($type)){
			array_push($errors,"type is required");
		}
		if(empty($brand)){
			array_push($errors,"brand is required");
		}
		if(empty($price)){
			array_push($errors,"price is required");
		}
		
			if(count($errors) == 0){
			$sql = "INSERT INTO product (name, brand, type,price,image) VALUES ('$name','$type','$brand','$price','image')";
			mysqli_query($db, $sql);
			
			header('location:home.php');
		}
		
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"> 
	</head>
	<body>
	<div class="e">
	<h1>Add products </h1>
	<form method="POST" action="" >
	<?php include('error.php'); ?>
	<div class="input">
	<label>name : </label>
	<input type="text" name="name" placeholder="name">
	</div>
	<div class="input">
	<label>brand : </label>
	
	<input type="text" name="brand" placeholder="brand">
	</div>
	<div class="input">
	<label>type : </label>
	
	<input type="text" name="type" placeholder="type">
	</div>
	<div class="input">
	<label>price: </label>
	<input type="text" name="price" placeholder="price">
	<input type="file" name="image">
	<button name = "add">add</button>
	</div>
	</body>
	
</html>
