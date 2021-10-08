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
	<section class="konten">
		<div class="container">
			<hr style="border-color: red">
				<h1 style="font-family: Lucida handwriting" style="background-color: red"><center><font color="#00CED1" font size="8"><strong>Produk Terbaru Toko Kami</strong></font></center></h1>
				<hr style="border-color: red">
			
			<br/><br/>
			<div class="row">


				<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
				<?php while($perproduk = $ambil->fetch_assoc()) { ?>
					<div class="col-md-3">
						<div class="thumbnail">
							<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
							<div class="caption">
								<h3><?php echo $perproduk['nama_produk']; ?></h3>
								<h5>Rp <?php echo number_format($perproduk['harga_produk'],0,',','.'); ?></h5>
								<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
							</div>
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</section>

	<br/><br/><br/><br/>

	<div id="footer">
        Copyright &copy; 2014
        Designed by Dicky A. Manurung
	</div>

</body>
</html>