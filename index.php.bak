<?php 
/// koneksi ke database
$conn = mysqli_connect("sql306.epizy.com", "epiz_32972482", "ahlXVclRp3", "epiz_32972482_mestere");
// ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM pln");


// BERANTAKAN ? 
 // KARNA MASIH BELAJAR


 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>MsCell</title>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MsCell</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
				    <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Produk</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
			
        </nav>
</section>
<section id="marquee">
<div style="background: #B0E0E6; color: black; height: 30px; text-align: center; width: 100%;">
<p class="text-center"><marquee>Ayo Bergabung dengan kami,kamu bisa jualan pulsa dan kouta hanya dengan hpmu,harga mantap pasti untung</marquee></p>
</div>
</div>
</section>


	
</br>        
<center><h2>Tagihan</h2></center>

    <section id="katalog" class="sec katalog-width">
        <div class="container">
            <div class="container">
<table class="table">
            <thead>
              <tr>
              <th scope="col"><h6>Data Ke</6></th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tagihan</th>
              </tr>
            </thead>
                <tbody>
              <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                
                    <tr>
					<h6>
                    <th scope="row"><?php echo $row["id"]; ?> </th>
                     <th scope="row"><?php echo $row["date"]; ?></th>
                    <th scope="row"><?php echo $row["pln"]; ?></th>
					</h6>
                    </tr>
                    <?php endwhile; ?>
                 </tbody>
            </table>
            <br><br>
		</div>
        </div>
		</br>
		</br>
		<br>
    </section>

    

    

    <section id="footer">
        <div class="container">
            <h1 class="footer-title mb-4">MsCell</h1>
            <div class="row mb-4">
                <div class="col-md-4">
                    <h4 class="footer-left">Contact</h4>
                    <div class="footer-left-item">
                       <p><i class='bx bxs-phone'></i> 081578764717</p>
                       <p><i class='bx bx-mail-send'></i> mestersartono1975@gmail.com</p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="footer-left">Alamat</h4>
                    <div class="footer-left-item">
                        <p>Jl.Tegal Ngandong no 18, Tegal Ngandong, Ngandong, Gantiwarno, Klaten, Jawa Tengah, 57455</p>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="footer-left">Sosial Media Kami</h4>
                    <div class="footer-left-item">
                        <p><a 
						href="https://instagram.com/mestere_cell">INSTAGRAM</a></p>
            
                    </div>
                </div>
            </div>
            <p class="text-center copyright-text">ALL RIGHTS RESERVED BY MsCell 2020 & DESIGN BY <a
                    href="https://facebook.com/inoiz7">SIDIQ ALFIANSYAH</a></p>
			
        </div>
    </section>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>
</html>