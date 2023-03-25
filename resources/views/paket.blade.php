@extends('layouts.master')

@section('content')

<head>
	<title>Paket Kelas Mengemudi</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
			font-family: Arial, sans-serif;
		}
		td, th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: center;
		}
		th {
			background-color: #f2f2f2;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<h1>{{ $title }}</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Paket</th>
				<th>Jumlah Latihan</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Paket Dasar</td>
				<td>10</td>
				<td>Rp 1.000.000,-</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Paket Standard</td>
				<td>20</td>
				<td>Rp 2.000.000,-</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Paket Premium</td>
				<td>30</td>
				<td>Rp 3.000.000,-</td>
			</tr>
		</tbody>
	</table>
</body>
@endsection
    