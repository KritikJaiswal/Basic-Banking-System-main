<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "test");
?> 
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 80px;
			color: white;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			
		}
		.container{
			width: 500px;
			
			padding-left: 400px;
			
		}
		.container input{
			width:90%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: white;
			margin-left: 700px;
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("index4.jpg");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.click{
			width: 300px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
			margin-left: 500px;
			margin-top:30px;
			height:40px;
		}
		.click:hover{
			background-color: rgba(19, 135, 243, 0.74);	
		}
		a{
      color: white;
      font-size:20px;
    	}
	</style>
  <link rel="stylesheet" type="text/css" href="navstylebar.css">
</head>
<body>
<div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>

	<div class="container">
		<form action="transfer.php" method="post">
			<label><b>SENDER:</b></label>
			<input list="names" id="sender_name1" type="text" name="sender_name1", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Sneha jaiswal"></option>
				<option value="Kritik jaiswal"></option>
				<option value="uttam Jaiswal"></option>
				<option value="Sadhana Jaiswal"></option>
				<option value="Akshay Dutt"></option>
				<option value="Ajay Singh"></option>
				<option value="Anita Uniyal"></option>
				<option value="Mansi Patel"></option>
				<option value="Divita Phadakle"></option>
				<option value="Quency Gonsalves"></option>
				
			</datalist>
		</br>
			<label><b>RECIEVER:</b></label>
			<input list="namess" type="" id="receiver_name1" name="receiver_name1" placeholder="Enter name here"  required>
			<datalist id="namess">
                <option value="Sneha jaiswal"></option>
				<option value="Kritik jaiswal"></option>
				<option value="uttam Jaiswal"></option>
				<option value="Sadhana Jaiswal"></option>
				<option value="Akshay Dutt"></option>
				<option value="Anita Uniyal"></option>
				<option value="Ajay Singh"></option>
				<option value="Mansi Patel"></option>
				<option value="Divita Phadakle"></option>
				<option value="Quency Gonsalves"></option>
			</datalist>
		</br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>