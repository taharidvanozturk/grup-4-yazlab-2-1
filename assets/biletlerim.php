    <?php 
    require_once("config.php");

    session_start();

    // Oturumda olan kullanıcının adını al
    $currentUser = $_SESSION['user_email'];

    // Kullanıcının biletlerini çek
    $query = "SELECT bilet.yolcu_ad, bilet.yolcu_soyad, sefer.sefer_kalkis, sefer.sefer_varis, sefer.tarih AS sefer_tarih, bilet.koltuk_numara, bilet.bilet_alimtarihi, bilet.bilet_id
            FROM bilet
            INNER JOIN kullanici ON bilet.musteri_id = kullanici.kullanici_id
            INNER JOIN sefer ON bilet.sefer_id = sefer.sefer_id
            WHERE kullanici.kullanici_email = '$currentUser'";

    $result = mysqli_query($conn, $query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

    <main class="d-flex flex-column align-items-center p-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h2>Biletlerim</h2>
                    <hr>
                    <table id="biletler" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ad</th>
                                <th scope="col">Soyadı</th>
                                <th scope="col">Kalkış</th>
                                <th scope="col">Varış</th>
                                <th scope="col">Tarih</th>
                                <th scope="col">Koltuk</th>
                                <th scope="col">Alım Tarihi</th>
                                <th scope="col">İptal Et</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($row = mysqli_fetch_assoc($result)) {
                                $ad = $row['yolcu_ad'];
                                $soyad = $row['yolcu_soyad'];
                                $kalkis = $row['sefer_kalkis'];
                                $varis = $row['sefer_varis'];
                                $tarih = $row['sefer_tarih'];
                                $koltuk = $row['koltuk_numara'];
                                $alim_tarihi = $row['bilet_alimtarihi'];
                                $bilet_id = $row['bilet_id'];
                            ?>
                            <tr>
                                <td><?php echo $ad ?></td>
                                <td><?php echo $soyad ?></td>
                                <td><?php echo $kalkis ?></td>
                                <td><?php echo $varis ?></td>
                                <td><?php echo $tarih ?></td>
                                <td><?php echo $koltuk ?></td>
                                <td><?php echo $alim_tarihi ?></td>
                                <td><button type="button" class="btn btn-danger btn-close" aria-label="Sil" data-bs-toggle="modal" data-bs-target="#deleteConfirm" data-biletid="<?php echo $bilet_id ?>"></button></td>
                            </tr>
                            <?php 
                            }  
                            ?>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <a href="travels.php" class="btn btn-primary">Geri Dön</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteConfirm" tabindex="-1" aria-labelledby="deleteConfirmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteConfirmLabel">Emin misiniz?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <p>Biletinizi iptal etmek istediğinize emin misiniz?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        <button id="confirmDelete" type="button" class="btn btn-danger">Sil</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // JavaScript kodunu buraya ekleyebilirsiniz
    </script>

    </body>
    </html>
