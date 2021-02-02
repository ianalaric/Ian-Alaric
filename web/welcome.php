<html>
<head>	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		
footer {
	margin-top: 550px;
}

		.copyright {
	background: #000;
	color: #fff;
	text-align: center;
	padding: 10px;
}
	</style>
</head>
<body>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="index.html"><span><strong>PORTFOLIO</strong></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="about.php#about">About</a>
      <a class="nav-link" href="service.php#service">Service</a>
      <a class="nav-link" href="kontak.php#contact">Contact</a>
    </div>
  </div>
</nav>

	<br><br>
		<div class="row col-sm-offset-2 col-sm-10">
			<div class="panel-group col-sm-10">
			<div class="panel panel-success">
				<div class="panel-heading">
					</div>
					<div class="panel-body">
						<h2>Input Data</h2>
						<div class="row">
							<label class="control-label col-sm-2" for="nama">Nama:</label>
							<div class="col-sm-10"><?php echo $_GET["nama"]; ?>
								
							</div>
							</div>
							
							<div class="row">
								<label class="control-label col-sm-2" for="nama">Email:</label>
								<div class="col-sm-10"><?php echo $_GET["email"]; ?>
									
								</div>
							</div>
							
							<div class="row">
								<label class="control-label col-sm-2" for="nama">Pesan:</label>
								<div class="col-sm-10"><?php echo $_GET["pesan"]; ?>
									
								</div>
							</div>
							
						</div>
					
						
					</div>
				</div>
			</div>
		</div>

<footer>
	<div class="copyright"> 
		<p>Copyright @ BY Kartorius Website 2021.</p>
	</div>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

	

</html> 