<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Current Weather</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Bootstrap toggle CSS -->
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
		
        <!-- Custom styles for this template -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
	
    <body>
        <div class="container text-center">
			<h1 id="title">Current Weather</h1>
			<h2 id="city-state"></h2>
			<h3 id="temperature"></h3>
			<input type="checkbox" checked id="temp-toggle" data-toggle="toggle" 
				data-offstyle="info" data-on="&deg;F" data-off="&deg;C">
			<img id="weather-icon" class="img responsive center-block"></img>
			<h3 id="timestamp"></h3>			
			<h3 id="humidity"></h3>
			<h3 id="wind"></h3>
			<h3 id="update-time"></h3>
		</div>
		
        <!-- JQuery Plugin -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	
		<!-- Bootstrap JS Plugin -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Bootstrap JS Toggle Plugin -->
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
    </body>
</html>
