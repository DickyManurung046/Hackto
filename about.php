<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "toko")
?>

<!DOCTYPE html>
<html>
<head>
	<title>D'Store</title>
	<link rel="stylesheet" href="bootstrap.css">
	<style type="text/css">

		#header {
			width: 100%;
			height: 310px;
			background-color: #02a2d8;
			position: relative;
		}
		

		#footer{
    		height:50px;
    		line-height:50px;
    		background:#dcdcdc;
   			color:#000;
   			text-align: center;
   			border-color: blue;
   			border-radius: 5px;
		}

		.header {
			width: 100%;
			height: 310px;
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: auto;
			text-align: center;
			font-family: arial;
			border: 20px solid white;
			background-color: url('A.jpg');
			border-radius: 10px;
			}


		button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: black;
			background-color: #DCDCDC;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
			border-radius: 10px;
			}

			a {
				text-decoration: none;
				font-size: 22px;
				color: black;
				}

		button:hover, a:hover {
								opacity: 0.7;
								}
		
	</style>
</head>
<body>

			<div id="header">
				<img src="25.jpg" class="header">
			</div>


	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li style="font-family: Verdana"><a href="index.php"><button class="btn btn-info" style="width:250px"><font size="5" font color="#fff">Home</button></font></a></li>
				<li style="font-family: Verdana"><a href="keranjang.php"><button class="btn btn-info" style="width: 250px"><font size="5" font color="#fff">Keranjang</font></button></a></li>
				<li style="font-family: Verdana"><a href="checkout.php"><button class="btn btn-info" style="width: 250px"><font size="5" font color="#fff">Checkout</font></button></a></li>
				<li style="font-family: Verdana"><a href="about.php"><button class="btn btn-info" style="width: 250px"><font size="5" font color="#fff">About</font></button></a></li>
			</ul>
		</div>
	</nav>

	<br/><br/>

	<div class="card">
			<div>
				<img src="Potoo.jpg" style="width:100%">
			</div>

			<br/><br/>
			<h4><font color="#10abc4">Nama saya adalah Dicky A. Manurung.</font></h4>
			<p style="text-align: justify"><font color="#000" font size="3">Saya berkuliah di Universitas Sumatera Utara, Fakultas Ilmu Komputer dan Teknologi Informasi, jurusan Ilmu Komputer. Saat ini sedang berada di semester 4. Saya berharap web yang saya buat ini dapat bermanfaat bagi masyarakat. </font></p>
			<br/>
			<div style="margin: 24px 0;">
			</div>

  	
  	<div>
  		<p></p><button class="btn btn-info" style="font-size: 20px">Contact</button></p>
  		<button style="background-color: white" style="color: blue"><img src="ig3.jpg" style="max-width: 50px">
  			<font color="blue">@dickyyarmando</font></button>
  	</div>
	</div>
  	<br/><br/><br/>
 	
	<div id="footer">
        Copyright &copy; 2014
        Designed by Dicky A. Manurung
	</div>

</body>
</html>