<?php include "../include/header.php" ?>

<!-- Kontakt -->
<?php include "../kontakt/index.php" ?>

<!-- O nas -->
<?php include "../oNas/index.php" ?>

<!-- Pizze -->
<?php //include "../denneMenu/index.php" ?>

<!-- Ceny -->
<?php include "../ceny/index.php" ?>


<!-- Služby -->
<?php include "../sluzby/index.php" ?>

	<!-- Final -->
	<script src="../../assets/jquerry/jquery-3.4.1.min.js"></script>
	<script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
        function nwm() {
    		var xhttp = new XMLHttpRequest();
    		xhttp.onreadystatechange = function() {
    			if (this.readyState == 4 && this.status == 200) {
    				var data = JSON.parse(this.responseText);
    				var iconPath = "http://openweathermap.org/img/wn/" + data.weather[0].icon + ".png";
    				var casMerania = new Date(data.dt * 1000);
    				document.getElementById("cas").innerHTML = casMerania.getDate() + "." + (casMerania.getMonth() + 1) + "." + casMerania.getFullYear();
    				document.getElementById("weather_icon").src = iconPath;
    				document.getElementById("mesto").innerHTML = data.name + ", " + data.sys.country;
    				document.getElementById("teplota").innerHTML = data.main.temp + " °C";
    				document.getElementById("vlhkost").innerHTML = data.main.humidity + "%";
    				document.getElementById("popis").innerHTML = data.weather[0].description;
    			}
    		}
    		xhttp.open("GET", "http://api.openweathermap.org/data/2.5/weather?q=Tvrdošín,sk&lang=sk&units=metric&appid=acbd781e031d2ee5f734e15ee6641aad", true);
    		xhttp.send();
    		setInterval(this, 500);
        }
	</script>

<?php include "../include/footerOK.php" ?>
<?php include "../include/footer.php" ?>