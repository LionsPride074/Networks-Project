<?php
	session_start();
?>
<html>
	<head>
		<style>
			header, footer {
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
			
			#flexContainer1 {
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
				box-sizing: border-box;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
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
			
			h1 {
				text-align: center;
			}
			
			.btn:hover {background-color: darkgrey}
		</style>
		<title>This is the home page.</title>
	</head>
	
	<body>
		<header>Welcome to my site!</header>
		<div id = "nav">
			<div id = "flexContainer1">
				<a class = "btn" id = "data" href = "Data.php">Data</a>
				<a class = "btn" id = "about" href = "About.php">About</a>
			</div>
		</div>
		<div id="main">
			<h1>Using the navigation buttons above, you can view data or the about page.</h1>
		</div>
		<footer>Thank you for visiting!</footer>
	</body>
</html>