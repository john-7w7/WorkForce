<!DOCTYPE html>
<html>
<head>
	<title>Maps</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--================================ Main STYLE SHEETs====================================-->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="images/12.png" type="image/x-icon">
    <style>
        #map {
	height: 500px;
	width: 100%;
}
a {
            font-size: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <center><h3>Aquí nos ubicamos</h3></center>
	<div id="map"></div>
<script src="script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
<a href="contact.php">Regresar a la página de contacto</a>
</body>
</html>