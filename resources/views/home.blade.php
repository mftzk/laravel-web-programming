@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Kelas Mengemudi Roda 4</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #ccf5ff;
			padding: 20px;
			text-align: center;
			color: #333;
			font-size: 36px;
		}
		nav {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}
		nav li {
			display: inline-block;
			margin-right: 20px;
		}
		nav a {
			color: #fff;
			text-decoration: none;
			font-size: 20px;
		}
		.banner {
			background-image: url('banner.jpg');
			background-size: cover;
			background-position: center;
			height: 300px;
		}
		.main {
			padding: 20px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.box {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 20px;
			margin-bottom: 20px;
			flex-basis: calc(33.3% - 20px);
			box-sizing: border-box;
		}
		.box h2 {
			font-size: 24px;
			margin-top: 0;
		}
		.box p {
			font-size: 16px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		.box a {
			display: block;
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.3s ease-in-out;
		}
		.box a:hover {
			background-color: #ccf5ff;
			color: #333;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Kelas Mengemudi Roda 4</h1>
	</header>
	<nav>
		<ul>
			<li><a href="/home">Home</a></li>
			<li><a href="/about">Tentang Kami</a></li>
			<li><a href="/paket">Paket Belajar</a></li>
			<li><a href="/jadwal">Jadwal Kelas</a></li>
			<li><a href="/lokasi-dan-kontak">Kontak</a></li>
		</ul>
	</nav>
	<div class="banner"></div>
	<div class="main">
		<div class="box">
			<h2>Paket Belajar</h2>
			<p>Kami menyediakan berbagai macam paket belajar mengemudi untuk roda 4, mulai dari paket dasar hingga paket lanjutan dan spesialis. Pilihlah paket yang sesuai dengan kebutuhan Anda dan segera daftar untuk memulai perjalanan belajar mengemudi Anda!</p>
                        <a href="/paket">Lihat Paket Belajar</a>
</div>
<div class="box">
        <h2>Jadwal Kelas</h2>
        <p>Cek jadwal kelas mengemudi roda 4 kami dan tentukan kapan waktu yang paling sesuai untuk Anda. Kami menyediakan jadwal kelas yang fleksibel dan dapat disesuaikan dengan kebutuhan Anda.</p>
        <a href="/jadwal">Lihat Jadwal Kelas</a>
        </div>
        <div class="box">
        <h2>Trainer Kami</h2>
                <p>Kami adalah sekolah mengemudi yang berpengalaman dan terpercaya dalam memberikan layanan belajar mengemudi roda 4. Kami memiliki instruktur yang berpengalaman dan dapat membantu Anda dalam belajar mengemudi dengan cepat dan mudah.</p>
                <a href="/trainer">Baca Selengkapnya</a>
        </div>
        </div>
<footer>
<p>© 2023 Kelas Mengemudi Roda 4. All rights reserved. by Aji Mufti Zakaria</p>
</footer>

</body>
</html>
@endsection
    