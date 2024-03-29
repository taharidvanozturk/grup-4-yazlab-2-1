<!DOCTYPE HTML>
<html lang="tr">
<head>
	<title>Enter Details and Payment</title>
</head>
<body>
<h2>Enter Your Details and Make Payment</h2>

<form action="process_payment.php" method="post" id="details_form">
	<input type="hidden" name="seats" id="seats" value="<?php echo isset($_POST['seats']) ? stripslashes($_POST['seats']) : ''; ?>">
	<div id="details_container"></div>
	<button type="submit">Proceed to Payment</button>
</form>

<script>
	function generateInputFields(seats) {
		var container = document.getElementById('details_container');
		container.innerHTML = ''; // Clear previous input fields

		for (var i = 0; i < seats.length; i++) {
			var seatNumber = seats[i];
			var div = document.createElement('div');

			div.innerHTML = '<h3>Details for Seat ' + seatNumber + '</h3>' +
				'<input type="text" name="kullanici_ad[]" required placeholder="Ad">' +
				'<br>' +
				'<input type="text" name="kullanici_soyad[]" required placeholder="Soyad">' +
				'<br>' +
				'<input type="text" name="kullanici_tcno[]" required placeholder="TC NO">' +
				'<br>' +
				'<input type="tel" name="kullanici_telefon[]" required placeholder="Telefon">' +
				'<br>' +
				'<input type="email" name="kullanici_email[]" required placeholder="Email">' ;
			container.appendChild(div);
		}
	}


	window.onload = function () {
		var seatsElement = document.getElementById('seats').value;
		var seats = seatsElement ? JSON.parse(seatsElement) : [];
		generateInputFields(seats);
		console.log(seatsElement);
	};
	var seatsElement = document.getElementById('seats').value;
	var seats = seatsElement ? JSON.parse(seatsElement) : [];
	generateInputFields(seats);
	console.log(seatsElement);
</script>

</body>
</html>
