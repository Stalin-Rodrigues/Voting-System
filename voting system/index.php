<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Voting System</title>
<style>
  body{
	background-color: #90EE90;
	font-family: sans-serif;
}
.login_form {
    text-align: center;
}
.login_form .box{
    text-align: center;
	max-width: 500px;
	margin: auto;
	background:#D7BFDC;
	padding: 80px;
	border: 10px solid black;
}
.login_form button{
	width: 75px;
	font-size: 20px;
	color: white;	
	cursor: pointer;
	font-weight: bold;
	background: #1A237E;
	border: 1px solid #3949AB;
	transition: .5s;
}
</style>	
</head>
<body> 
    <marquee>Welcome To Online Voting System</marquee>
	<form action="vote.php" class="login_form" method="POST">
	    <?php
	       if(isset($_SESSION['status']))
	        {
	           echo "<h4>".$_SESSION['status']."</h4>";
		       unset($_SESSION['status']);
	        }
	    ?>
	    <h1>Vote for Your Candidate</h1>
		<div class="box" >
	    <div class="font"><b>Email</b></div>
	       <input autocomplete="off" type="text" name="email"><br><br>   
		<div class="font2"><b>Password</b></div>
		   <input type="password" name="password"><br><br>
		<div class="font3"><b>Gender</b></div>
		   <input type="radio" name="gender" value="Male">Male<br>
		   <input type="radio" name="gender" value="Female">Female<br><br>
		<div class="font4"><b>Candidate</b></div>   
		   <input type="radio" name="candidate" value="Cycle">Cycle<br>
		   <input type="radio" name="candidate" value="Flower">Flower<br>
		   <input type="radio" name="candidate" value="Umbrella">Umbrella<br>
		   <input type="radio" name="candidate" value="Clock">Clock<br><br>
		<button type="submit" name="submit">Vote</button>
		<button type="submit" name="submit">Result</button>
		</div>
	</form>
</body>
</html>