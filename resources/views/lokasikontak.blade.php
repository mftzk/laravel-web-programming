@extends('layouts.master')

@section('content')
<head>
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
        .contact {
            background-color: #ccf5ff;
        }
        .location {
            background-color: #ffdbdb;
        }
	</style>
</head>
<body>
        <h1>{{ $title }}</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kantor</th>
				<th>Alamat</th>
				<th>Kontak</th>
			</tr>
		</thead>
		<tbody>
			<tr class="contact">
				<td>1</td>
				<td>Kantor Pusat</td>
				<td>Jl. Kemang Timur Raya No. 5, Jakarta Selatan</td>
				<td>021-123456</td>
			</tr>
			<tr class="location">
				<td>2</td>
				<td>Cabang Depok</td>
				<td>Jl. Margonda Raya No. 56, Depok</td>
				<td>021-987654</td>
			</tr>
			<tr class="contact">
				<td>3</td>
				<td>Cabang Bekasi</td>
				<td>Jl. Ahmad Yani No. 78, Bekasi</td>
				<td>021-567890</td>
			</tr>
			<tr class="location">
				<td>4</td>
				<td>Cabang Tangerang</td>
				<td>Jl. Raya Serpong No. 13, Tangerang</td>
				<td>021-234567</td>
			</tr>
			<tr class="contact">
				<td>5</td>
				<td>Cabang Bandung</td>
				<td>Jl. Merdeka No. 45, Bandung</td>
				<td>022-345678</td>
			</tr>
			<tr class="location">
				<td>6</td>
				<td>Cabang Surabaya</td>
				<td>Jl. Raya Kebun Bibit No. 9, Surabaya</td>
				<td>031-456789</td>
			</tr>
		</tbody>
	</table>
</body>
@endsection
    