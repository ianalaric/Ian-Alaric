<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title> Welcome to my website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		function validate(){
			var nama = document.getElementById("nama");
			var huruf =  /^[A-Za-z]+$/;
			var errors = false;
			if (nama.value.trim()=="") {
				alert("Isi ki dlu bos kudikolom nama ");
				return false;
			}
			if (nama.value.match(huruf)){
				alert("Betul mi dikolom nama");
			
			if(document.getElementById("nama").val().length() ! = 6){
				errors = true;
				alert("harus minimal 6 karakter");
			}	
			else {
				errors = false;
			}
			if(errors==false){
				document.getElementById("form").submit();
			}
			
				return true;
			}

			else {
				alert("hanya bisa huruf dikolom nama")
				return false;
			}
		}
		
			
		
	</script>
</head>
<body>
	<header>
		  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
  <a class="navbar-brand" href="#"><span><strong>PORTFOLIO</strong></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#about">About</a>
      <a class="nav-link" href="#service">Galeri</a>
      <a class="nav-link" href="#contact">Contact</a>
    </div>
  </div>
  </div>
</nav>


	</header>
	<section class="banner" id="home">
		<div class="textBx">
			<h2>Halo Bro, Gue<br><span> Ian A. Goenardy</span></h2>
			<h3>Cita-cita gue jadi Web Developer</h3>
			<a href="#about" class="btn">Tentang Gue</a>
		</div>
	</section>

		<section class="about" id="about">
		<div class="heading">
		 	<h2>Tentang Gue</h2>
		</div> 
		<div class="content">
			<div class="contentBx w50">
				<h3>Cita-cita gue jadi Web Developer</h3>
				<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  Ian Alaric Goenardy<br>Fakultas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Teknologi Informasi<br>Stambuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1861020<br>Tempat, Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Makassar, 10 Maret 2000<br><br>Website ini dibuat sejak bulan Desember 2020 berdasarkan tugas dari mata kuliah <b>Rekayasa Sistem Multimedia</b>yang akan menjadi tugas akhir.</p>
			</div>
			<div class="w50">
			 <img src="images/ian.jpeg" class="img">
			</div>
		</div>
	</section>

	
	<section class="services" id="service"> 
		<div class="heading white">
		 	<h2>Galeri</h2>
		</div> 
		<div class="content">
			<a class="servicesBx" href="quotes.php">
				<br><br>
			 	<img src="images/94902.png">
			 	<h2><br>Quotes<br><br><br></h2>
			 </a>
			 <a class="servicesBx" href="https://www.google.co.id/maps/@-5.1798997,119.4283811,21z">
			 	<br><br>
			 	<img src="images/maps.png">
			 	<h2><br>Location</h2>
			 </a>
			 <a class="servicesBx" href="https://www.instagram.com/ianalaric/">
			 	<br><br>
			 	<img src="images/ig.png">
			 	<h2><br>Instagram</h2>
			 </a>
			 <a class="servicesBx" href="fotografi.php">
			 	<br><br>
			 	<img src="images/icon4.png">
			 	<h2><br>Fotografi<br><br><br></h2>
			 </a>
			 <a class="servicesBx" href="artikel.php">
			 	<br><br>
			 	<img src="images/icon5.png">
			 	<h2><br>Artikel</h2>
			 </a>
			 <a class="servicesBx" href="film.php">
			 	<br><br>
			 	<img src="images/icon6.png">
			 	<h2><br>Film</h2>
			 </a>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="heading white"> 
			<h2>Hubungi Gue</h2>
			<p>Jika ingin mengetahui lebih lanjut silahkan hubungi gue siapa tahu ingin saling sharing</p>
		</div> 
		<div class="content"> 
			<div class="contactInfo"> 
				<h3>Kontak Info</h3>
				<div class="contactInfoBx"> 
				<div class="box"> 
					<div class="icon"> 
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="text"> 
						<h3>Alamat</h3>
						<p>Btn Tabaria C5/1,<br>Makassar, Sulawesi Selatan,<br>90244</p>
					</div>
				</div>
				<div class="box"> 
					<div class="icon"> 
						<div class="icon"> 
							<i class="fa fa-phone"></i>
						</div>
					</div>
					<div class="text"> 
						<h3>Nomor Telepon</h3>
						<p>081354525933</p>
					</div>
				</div>
				<div class="box"> 
					<div class="icon"> 
						<div class="icon"> 
							<i class="fa fa-envelope-o"></i>
						</div>
					</div>
					<div class="text"> 
						<h3>Email</h3>
						<p>ianalaricgoenardy@gmail.com</p>
					</div>
				</div>
				</div>
			</div>
			<div class="formBx"> 
				<form action="proses.php" method="POST" id="form" onsubmit="return validate()"> 
					<h3>Kirimkan Pesan</h3>
					<input type="text" name="namalengkap" id="nama" onblur="checkLength(this)" placeholder="Nama Lengkap" required minlength="6" maxlength="10">
					<input type="email" name="email" placeholder="Email" required>
					<textarea name="pesan" placeholder="Pesan Anda" required></textarea>
					<input type="submit" value="Kirim">
				</form>
			</div>
		</div>
	</section>
	<div class="copyright"> 
		<p>Copyright @ 2021 Website Ampas. All Right Reserved.</p>
	</div>
	
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>