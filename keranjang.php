<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "toko");

if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('Keranjang kosong. Silahkan belanja dulu!'); </script>";
	echo "<script>location='index.php'; </script>";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>D'Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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


<section class="konten">
	<div class="container">
		<h1>Keranjang Belanja</h1>
		<hr style="border-color: black">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Produk</center></th>
					<th><center>Harga</center></th>
					<th><center>Jumlah</center></th>
					<th><center>Subharga</center></th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor = 1; ?>
				<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?> 
				<?php 
				$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah["harga_produk"]*$jumlah;
				?>
				<tr>
					<td><center><?php echo $nomor; ?></center></td>
					<td><?php echo $pecah["nama_produk"]; ?></td>
					<td><center>Rp <?php echo number_format($pecah["harga_produk"],0,',','.'); ?></center></td>
					<td><center><?php echo $jumlah; ?></center></td>
					<td><center>Rp <?php echo number_format(($subharga),0,',','.'); ?></center></td>
					<td>
						<center><a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a></center>
					</td>
				</tr>
				<?php $nomor++; ?>
			<?php endforeach ?>
			</tbody>
		</table>

		<a href="checkout.php" class="btn btn-primary">Checkout</a>

	</div>
</section>

<br/>
<br/>
<br/>

<div id="footer">
        Copyright &copy; 2014
        Designed by Dicky A. Manurung
</div>

</body>
</html>