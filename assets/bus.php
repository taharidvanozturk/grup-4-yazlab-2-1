<!DOCTYPE HTML>
<html lang="tr">

<head>
	<title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Bus :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script src="js/script.js"></script>
	<script>function change_country(value) {
		}
		new WOW().init();
	</script>
</head>

<body>
<script>
	$(document).ready(function() {
		var selectedSeats = []; // Seçilen koltukları saklayacak dizi

		$('button').click(function() {
			var seferId = $(this).data('sefer-id');
			$('#seatDiv').empty();
			$('#seatDiv').load('get_seats.php?sefer_id=' + seferId);
			$(this).after($('#seatDiv'));

			// Devam et butonuna tıklandığında seçilen koltukları post et
			$(document).on('click', '.devamEtButton', function() {
				// Seçilen koltukları post etmek için bir form oluştur
				var form = $('<form action="enter_details.php" method="post"></form>');

				// JSON encode the selectedSeats array
				var selectedSeatsJson = JSON.stringify(selectedSeats);

				// Add the JSON-encoded array to the form as a hidden input
				form.append('<input type="hidden" name="seats" value="' + selectedSeatsJson + '">');

				console.log(selectedSeatsJson);
				// Formu sayfaya ekle ve submit et
				$('body').append(form);
				form.submit();
			});
		});

		// Koltuklara tıklandığında seçilenleri diziye ekle
		$(document).on('click', '.seat-button', function() {
			var seatNumber = $(this).text(); // Koltuk numarasını içeren metin
			var seatNumberOnly = seatNumber.replace(/\D/g,''); // Sadece rakamları al
			if (!selectedSeats.includes(seatNumberOnly)) {
				selectedSeats.push(seatNumberOnly); // Sadece rakamları diziye ekle
			} else {
				// Koltuk zaten seçiliyse, seçimi kaldır
				var index = selectedSeats.indexOf(seatNumberOnly);
				if (index !== -1) {
					selectedSeats.splice(index, 1);
				}
			}
			console.log(selectedSeats);
		});

	});
</script>

<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"></li>

		</ul>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.html">Umuttepe <span>Turizm</span></a>
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
			<a href="index.html" class="buses active">BUSES</a>
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s">
			<li><i class="fa fa-lock"></i></li>
			<li>
				<div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div>
			</li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
		<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.html">About</a></li>
							<li><a href="faq.html">Faq</a></li>
							<li><a href="apps.html">Apps</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="travels.html">Travels</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
							<li><a href="agent.html">Agent Registration</a></li>
							<li><a href="terms.html">Terms of Use</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a> </li>
							<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner-1 ---->
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Umuttepe Turizm - Sizin Konforunuz Bizim Önceliğimiz</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- bus-tp ---->
<div class="bus-tp">

</div>


<div class="bus-btm">

</div>
<!--- /bus-btm ---->
<!--- bus-midd ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container boyutlan"><br>
		<?php
		include 'get_seats.php';
		// Veritabanı bağlantısı
		$servername = "localhost"; // Veritabanı sunucusu
		$username = "root"; // Veritabanı kullanıcı adı
		$password = "fd49db33b2"; // Veritabanı şifre
		$dbname = "otobusbiletuygulama"; // Veritabanı adı

		// Form verilerini al ve kontrol et
		$origin = isset($_POST['origin']) ? $_POST['origin'] : '';
		$destination = isset($_POST['destination']) ? $_POST['destination'] : '';
		$date = isset($_POST['date']) ? $_POST['date'] : '';
		$date2 = isset($_POST['date2']) ? $_POST['date2'] : '';

		// Formdan gelen verileri kontrol et
		if (empty($origin) || empty($destination) || (empty($date) && empty($date2))) {
			die("Lütfen gerekli tüm alanları doldurun.");
		}

		// Veritabanı bağlantısını oluştur
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Bağlantıyı kontrol et
		if ($conn->connect_error) {
			die("Veritabanına bağlanılamadı: " . $conn->connect_error);
		}

		// Otobüs bilgilerini almak için sefer tablosunu ve otobüs tablosunu birleştirerek sorgu hazırla
		$sql_otobus = "SELECT sefer.*, otobus.koltuk_sayisi FROM sefer INNER JOIN otobus ON sefer.otobus_id = otobus.otobus_id WHERE sefer.sefer_id = ?";
		$stmt_otobus = $conn->prepare($sql_otobus);

		// Gidiş Seferleri
		if (!empty($date)) {
			// Veritabanı sorgusunu hazırla ve çalıştır
			$sql = "SELECT *,otobus_cesidi FROM sefer,otobus WHERE sefer_kalkis = ? AND sefer_varis = ? AND DATE(tarih) = ?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sss", $origin, $destination, $date);
			$stmt->execute();
			$result = $stmt->get_result();

			// Verileri yazdır
			echo "<h2>Gidiş Seferleri</h2>";
			$sefer_ids = array(); // Daha önce oluşturulan sefer_id'lerini saklayacak dizi


// Gidiş Seferleri
			if (!empty($date)) {
				// Veritabanı sorgusunu hazırla ve çalıştır
				$sql = "SELECT *,otobus_cesidi FROM sefer,otobus WHERE sefer_kalkis = ? AND sefer_varis = ? AND DATE(tarih) = ?";
				$stmt = $conn->prepare($sql);
				$stmt->bind_param("sss", $origin, $destination, $date);
				$stmt->execute();
				$result = $stmt->get_result();

				// Verileri yazdır
				if ($result->num_rows > 0) {
					// Sonuçlar üzerinde döngü
					while ($row = $result->fetch_assoc()) {
						// Eğer bu sefer_id daha önce ekrana yazdırılmadıysa
						if (!in_array($row["sefer_id"], $sefer_ids)) {
							$sefer_ids[] = $row["sefer_id"];
							echo "<button data-sefer-id='" . $row["sefer_id"] . "' style='background-color: #4CAF50; border: none;
                        color: black; 
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 24px;
                        margin: 4px 2px;
                        cursor: pointer;
                        width: 100%;'>";
							echo "<p style=\"color: black;\">Kalkış Şehri: " . htmlspecialchars($row["sefer_kalkis"]) . "</p>";
							echo "<p style=\"color: black;\">Varış Şehri: " . htmlspecialchars($row["sefer_varis"]) . "</p>";
							echo "<p style=\"color: black;\">Kalkış Zamanı: " . htmlspecialchars($row["tarih"]) . "</p>";
							echo "<p style=\"color: black;\">Otobüs Çeşidi: ".htmlspecialchars($row["otobus_cesidi"]) ."</p>";
							echo "</button>";
							echo "<br>";
						}
					}
				} else {
					// Yeni bir sefer oluştur
					$sql_insert = "INSERT INTO sefer (sefer_kalkis, sefer_varis, tarih) VALUES (?, ?, ?)";
					$stmt_insert = $conn->prepare($sql_insert);
					$stmt_insert->bind_param("sss", $origin, $destination, $date);
					if ($stmt_insert->execute()) {
						// Yeni sefer oluşturulduğunda ekrana yazdır
						while ($row = $result->fetch_assoc()) {
							// Eğer bu sefer_id daha önce ekrana yazdırılmadıysa
							if (!in_array($row["sefer_id"], $sefer_ids)) {
								$sefer_ids[] = $row["sefer_id"]; // Bu sefer_id'yi diziye ekle
								echo "<button data-sefer-id='" . $row["sefer_id"] . "' style='background-color: #4CAF50; border: none;
                        color: black; 
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 24px;
                        margin: 4px 2px;
                        cursor: pointer;
                        width: 100%;'>";
								echo "<p style=\"color: black;\">Kalkış Şehri: " . htmlspecialchars($row["sefer_kalkis"]) . "</p>";
								echo "<p style=\"color: black;\">Varış Şehri: " . htmlspecialchars($row["sefer_varis"]) . "</p>";
								echo "<p style=\"color: black;\">Kalkış Zamanı: " . htmlspecialchars($row["tarih"]) . "</p>";
								echo "<p style=\"color: black;\">Otobüs Çeşidi: ".htmlspecialchars($row["otobus_cesidi"]) ."</p>";
								echo "</button>";
								echo "<br>";
							}
						}
					} else {
						echo "Gidiş seferi oluşturulurken hata oluştu: " . $stmt_insert->error;
					}
				}
			}


		}

		$donussefer_ids = array(); // Daha önce oluşturulan dönüş seferi sefer_id'lerini saklayacak dizi
		if (!empty($date2)) {
			// Veritabanı sorgusunu hazırla ve çalıştır
			$sql2 = "SELECT *, otobus_cesidi FROM sefer, otobus WHERE sefer_kalkis = ? AND sefer_varis = ? AND DATE(tarih) = ?";
			$stmt2 = $conn->prepare($sql2);
			$stmt2->bind_param("sss", $origin, $destination, $date2);
			$stmt2->execute();
			$result2 = $stmt2->get_result();

			echo "<h2>Dönüş Seferleri</h2>";
			if ($result2->num_rows > 0) {
				// Sonuçlar üzerinde döngü
				while ($row2 = $result2->fetch_assoc()) {
					if (!in_array($row2["sefer_id"], $donussefer_ids)) {
						$donussefer_ids[] = $row2["sefer_id"]; // Bu sefer_id'yi diziye ekle
						// Her sefer için bir buton oluştur
						echo "<button data-sefer-id='" . $row2["sefer_id"] . "' style='background-color: #4CAF50; border: none;
                        color: black; 
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 24px;
                        margin: 4px 2px;
                        cursor: pointer;
                        width: 100%;'>";
						echo "<p style=\"color: black;\">Kalkış Şehri: " . htmlspecialchars($row2["sefer_kalkis"]) . "</p>";
						echo "<p style=\"color: black;\">Varış Şehri: " . htmlspecialchars($row2["sefer_varis"]) . "</p>";
						echo "<p style=\"color: black;\">Kalkış Zamanı: " . htmlspecialchars($row2["tarih"]) . "</p>";
						echo "<p style=\"color: black;\">Otobüs Çeşidi: ".htmlspecialchars($row2["otobus_cesidi"]) ."</p>";
						echo "</button>";
						echo "<br>";
					}
				}
			} else {
				// Yeni bir dönüş seferi oluştur
				$sql_insert2 = "INSERT INTO sefer (sefer_kalkis, sefer_varis, tarih) VALUES (?, ?, ?)";
				$stmt_insert2 = $conn->prepare($sql_insert2);
				$stmt_insert2->bind_param("sss", $origin, $destination, $date2);
				if ($stmt_insert2->execute()) {
					// Yeni dönüş seferi oluşturulduğunda ekrana yazdır
					echo "<button style='background-color: #4CAF50;
                    border: none;
                    color: black; /* Yazı rengi siyah */
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 24px;
                    margin: 4px 2px;
                    cursor: pointer;
                    width: 100%;'>";
					echo "<p style=\"color: black;\">Kalkış Şehri: " . htmlspecialchars($origin) . "</p>";
					echo "<p style=\"color: black;\">Varış Şehri: " . htmlspecialchars($destination) . "</p>";
					echo "<p style=\"color: black;\">Kalkış Zamanı: " . htmlspecialchars($date2) . "</p>";
					echo "<p style=\"color: black;\">Otobüs Çeşidi: 2+1 </p>";
					echo "</button>";
					echo "<br>";
				} else {
					echo "Dönüş seferi oluşturulurken hata oluştu: " . $stmt_insert2->error;
				}
			}
		}



		// Bağlantıyı ve statement'ları kapat
		$stmt->close();
		if(isset($stmt2)) {
			$stmt2->close();
		}
		$conn->close();
		?>


		<div id="seatDiv" class="bus-details">
		</div>




	</div>
</div>

<div class="footer-top">
	<div class="container" >
		<form action="enter_details.php" method="post">
			<button type="submit" class="devamEtButton">Devam Et</button>
		</form>
		<div class="clearfix"></div>
	</div>
</div>

<div class="copy-right">
	<div class="container">

		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-left">
								<ul>
									<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
									<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
									<li><a class="linkin" href="#"><i></i>Sign in with LinkedIn</a></li>
								</ul>
							</div>
							<div class="login-right">
								<form>
									<h3>Create your account </h3>
									<label>
										<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Name';}" required="">
									</label>
									<label>
										<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Mobile number';}" required="">
									</label>
									<label>
										<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Email id';}" required="">
									</label>
									<label>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Password';}" required="">
									</label>
									<input type="submit" value="CREATE ACCOUNT">
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
						<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
						<div class="login-left">
							<ul>
								<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
								<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
								<li><a class="linkin" href="#"><i></i>Sign in with LinkedIn</a></li>
							</ul>
						</div>
						<div class="login-right">
							<form>
								<h3>Signin with your account </h3>
								<label>
									<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Enter your mobile number or Email';}" required="">
								</label>
								<label>
									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Password';}" required="">
								</label>
								<h4><a href="#">Forgot password</a></h4>
								<div class="single-bottom">
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span>Remember Me.</label>
								</div>
								<input type="submit" value="SIGNIN">
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
					<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body modal-spa">
					<div class="writ">
						<h4>HOW CAN WE HELP YOU</h4>
						<ul>
							<li class="na-me">
								<label>
									<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Name';}" required="">
								</label>
							</li>
							<li class="na-me">
								<label>
									<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Email';}" required="">
								</label>
							</li>
							<li class="na-me">
								<label>
									<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Mobile Number';}" required="">
								</label>
							</li>
							<li class="na-me">
								<label for="country"></label><select id="country" onchange="change_country(this.value)" class="frm-field required sect">
									<option value="null">Select Issue</option>
									<option value="null">Booking Issues</option>
									<option value="null">Bus Cancellation</option>
									<option value="null">Refund</option>
									<option value="null">Wallet</option>
								</select>
							</li>
							<li class="na-me">
								<label for="country"></label><select id="country" onchange="change_country(this.value)" class="frm-field required sect">
									<option value="null">Select Issue</option>
									<option value="null">Booking Issues</option>
									<option value="null">Bus Cancellation</option>
									<option value="null">Refund</option>
									<option value="null">Wallet</option>
								</select>
							</li>
							<li class="descrip">
								<label>
									<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Write Description';}" required="">
								</label>
							</li>
							<div class="clearfix"></div>
						</ul>
						<div class="sub-bn">
							<form>
								<button class="subbtn">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
</body>

</html>


