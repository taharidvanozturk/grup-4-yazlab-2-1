<!DOCTYPE HTML>
<html>

<head>
    <title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        function initMap() {
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7,
                center: { lat: 40.18, lng: 30.26 },
                disableDefaultUI: true,
            });
            directionsRenderer.setMap(map);

            const originInput = document.getElementById('origin');
            const destinationInput = document.getElementById('destination');

            const onOriginChange = () => {
                calculateAndDisplayRoute(directionsService, directionsRenderer);
            };

            originInput.addEventListener('change', onOriginChange);
            destinationInput.addEventListener('change', () => calculateAndDisplayRoute(directionsService, directionsRenderer));
        }

        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            const origin = document.getElementById('origin').value;
            const destination = document.getElementById('destination').value;
            const request = {
                origin: origin,
                destination: destination,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function(result, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(result);
                    var distance = result.routes[0].legs[0].distance.text;
                    document.getElementById('distance').innerHTML = 'Mesafe: ' + distance;
                } else {
                    //window.alert('Directions request failed due to ' + status);
                }
            });
        }

        window.onload = () => {
            document.querySelector('form').reset();
            initMap(); // sayfa yüklendiğinde haritayı oluştur

            const radioButtons = document.getElementsByName('gidis_tipi');
            const donusTarihiInput = document.getElementById('date2');
            const gidisTarihiInput = document.getElementById('date');

            // Dönüş tarih alanını devre dışı bırak ve gizle
            donusTarihiInput.disabled = true;
            donusTarihiInput.style.display = 'none';

            // Formun gönderilmesini engelle ve kontrol yap
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault(); // Formun gönderilmesini engelle

                const origin = document.getElementById('origin').value;
                const destination = document.getElementById('destination').value;
                const gidisTarihi = gidisTarihiInput.value;
                const donusTarihi = donusTarihiInput.value;
                const gidisTipi = document.querySelector('input[name="gidis_tipi"]:checked').value;

                if (origin === "Seçiniz" || destination === "Seçiniz") {
                    alert("Lütfen nereden ve nereye seyahat edeceğinizi seçin.");
                    return;
                }

                if (gidisTipi === "Gidisdonus" && (!gidisTarihi || !donusTarihi)) {
                    alert("Lütfen gidiş ve dönüş tarihlerini seçin.");
                    return;
                } else if (gidisTipi === "Tekyon" && !gidisTarihi) {
                    alert("Lütfen gidiş tarihini seçin.");
                    return;
                }

                // Eğer kontrol başarılı ise formu gönder
                this.submit();
            });

            // Tek yön butonu varsayılan olarak seçili olsun
            radioButtons[0].checked = true;

            // Tek yön butonuna tıklandığında dönüş tarih alanını devre dışı bırak ve gizle
            radioButtons[0].addEventListener('click', function() {
                donusTarihiInput.disabled = true;
                donusTarihiInput.style.display = 'none';
            });

            // Gidiş-dönüş butonuna tıklandığında dönüş tarih alanını etkinleştir ve göster
            radioButtons[1].addEventListener('click', function() {
                donusTarihiInput.disabled = false;
                donusTarihiInput.style.display = 'block';
            });

            // Çıkış yap butonuna tıklandığında index.php sayfasına yönlendir
            document.getElementById('logout_button').addEventListener('click', function() {
                window.location.href = 'index.php';
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-WHm1Bndk5zsPfd1da1CUrD-Oq4Wl_ak&callback=initMap" async defer></script>
    <style>
        /* Stil ekleme */
        .user-options {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
        }

        .user-options a {
            margin-left: 10px;
            color: green;
        }
    </style>
</head>

<body>
    <!--- header ---->
    <div class="header">
        <div class="container">
            <div  class="logo wow fadeInDown animated" data-wow-delay=".5s">
                <a href="index.html">Umuttepe <span>Turizm</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- Biletlerim ve Çıkış Yap Butonları -->
            <div class="user-options">
                <a href="#" id="logout_button">Çıkış Yap</a>
                <a href="biletlerim.php">Biletlerim</a>
            </div>
            <!-- /Biletlerim ve Çıkış Yap Butonları -->
        </div>
    </div>
    <!--- /header ---->
    <!--- banner ---->
    <div class="banner">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Umuttepe Turizm - Sizin Konforunuz Bizim Önceliğimiz</h1>
        </div>
    </div>
    <div class="container">
        <div class="bann-info1 wow fadeInLeft animated col-md-5" data-wow-delay=".5s">
            <div class="harita2" id="map" style="height: 400px; width:500px;"></div>
            <p id="distance"></p>
        </div>
        <div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
            <h2>Sıfır Rezervasyon Ücreti ile Online Bilet</h2>
            <div class="ban-top">
                <form action="bus.php" method="post" onsubmit="return validateForm()">
                    <div class="bnr-left">Nereden
                        <label for="origin">&nbsp;</label>
                        <select name="origin" id="origin" onchange="initMap()">
                            <option selected disabled value="Seçiniz">Seçiniz</option>
                            <option value="Kocaeli">Kocaeli</option>
                            <option value="Ankara">Ankara</option>
                            <option value="Istanbul">İstanbul</option>
                            <option value="Izmir">İzmir</option>
                        </select>
                    </div>
                    <div class="bnr-left bnr-newleft">Nereye
                        <label for="destination">&nbsp;</label>
                        <select name="destination" id="destination" onchange="initMap()">
                            <option selected disabled value="Seçiniz">Seçiniz</option>
                            <option value="Kocaeli">Kocaeli</option>
                            <option value="Ankara">Ankara</option>
                            <option value="Istanbul">İstanbul</option>
                            <option value="Izmir">İzmir</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="bnr-right">Gidiş Tarihi:
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="clearfix">
                        <p class="col-md-3">Dönüş Tarihi:</p>
                        <!-- Dönüş tarih alanını ekleyin ve varsayılan olarak devre dışı bırakın -->
                        <input type="date" name="date2" id="date2" disabled> <br>
                    </div>
                    <p class="butonlar">
                        <label>
                            <input type="radio" name="gidis_tipi" value="Tekyon" id="seferler_buton_0">
                            Tek Yön</label>
                        <br>
                        <label>
                            <input type="radio" name="gidis_tipi" value="Gidisdonus" id="seferler_buton_1">
                            Gidiş Dönüş</label>
                        <br>
                    </p>
                    <div class="sear">
                        <button type="submit" class="seabtn">Otobüs Ara</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <div class="holiday">
            <div class="clearfix"></div>
        </div>
    </div>
    <!---/holiday---->
    <!---track---->
    <div class="container">
        <div class="track"></div>
        <div class="container">
            <div class="rupes"> </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>

</html>
