<?php
	session_start();
?>
<html>
	<head>
		<style>
			header, footer, #main {
				box-sizing: border-box;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			#nav {
				box-sizing: border-box;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			
			#flexContainer {
				display: flex;
				align-items: center;
				justify-content: center;
			}
			
			header {
				height: 10%;
			}
			
			footer, #nav {
				height: 5%;
			}
			
			#main {
				flex-direction: column;
				height: 80%;
			}
			
			header {
				border: 5px double black;
				font-size: 30px;
				background-color: green;
			}
			
			footer, #main, #nav{
				border: 1px solid black;
				font-size: 20px;
				background-color: lightgray;
			}
			
			.btn {
				text-decoration: none;
				border: 1px solid;
				color: black;
				margin-right: 5px;
				padding: 4px 5px;
			}
			
			.btn:hover {background-color: darkgrey}
		</style>
		<title>This is the about page.</title>
	</head>
	
	<body>
		<header>About me</header>
		<div id = "nav">
			<div id = "flexContainer">
				<a class = 'btn' id = "home" href = "HomePage.php">Home</a>
				<a class = "btn" id = "upcoming" href = "Data.php">Data</a>
			</div>
		</div>
		<div id="main">
			<h1>History of this website</h1>
			<p>I created this site for a computer networks project while in my senior year of college. We are learning about networking between computers.</p>
			
		</div>
		<footer>Thank you for visiting!</footer>
	</body>
</html>