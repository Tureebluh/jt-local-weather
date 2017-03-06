var lat;
var lon;
var currentTemp;
var timestamp;

$(document).ready(function(){
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(function(position){
			lat =  position.coords.latitude;
			lon = position.coords.longitude;
			getWeather();
		});
	}
	setInterval(function(){
			timestamp = new Date();
			$("#timestamp").html("Current time:<br> " + timestamp.toLocaleTimeString());
	}, 1000);
});

function getWeather(){
	$.ajax( {
		url: 'http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon=' + lon + '&appid=c0b465e34d79b6eb1187c246c6822716',
		success: function(data) {
			$("#city-state").text(data.name + ", " + data.sys.country);
			$("#weather-icon").attr("src", "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png");
			$("#humidity").text("Humidity: " + data.main.humidity + "%");
			$("#wind").text("Wind: " + Math.round(data.wind.speed * 2.23694)+ "mph");
			
			switch( Math.floor(data.weather[0].id / 100) ){
				case 2:
					$("body").css("background-image", 'url("img/thunderstorm.jpg")');
					break;
				case 3:
					$("body").css("background-image", 'url("img/drizzle.jpg")');
					break;
				case 5:
					$("body").css("background-image", 'url("img/rain.jpg")');
					break;
				case 6:
					$("body").css("background-image", 'url("img/snow.jpg")');
					break;
				case 8:
					if(data.weather[0].id === 800){
						$("body").css("background-image", 'url("img/clear.jpg")');
					} else {
						$("body").css("background-image", 'url("img/cloudy.jpg")');
					}
					break;
				default:
					$("body").css("background-image", 'url("img/cloudy.jpg")');
					break;
			}
			
			currentTemp = data.main.temp;
			changeTemp(data.main.temp);
		}
	});
}

function changeTemp(temperature){
	var convertedTemp = 0;
	
	if($("#temp-toggle").is(':checked')){
		convertedTemp = 1.8 * (temperature - 273) + 32;
		$("#temperature").html(Math.round(convertedTemp) + "&deg;F");
	} else {
		convertedTemp = temperature - 273;
		$("#temperature").html(Math.round(convertedTemp) + "&deg;C");
	}
}

$("#temp-toggle").change(function(){
	changeTemp(currentTemp);
});