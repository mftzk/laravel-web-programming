@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
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
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Hari</th>
				<th>Paket Dasar</th>
				<th>Paket Standard</th>
				<th>Paket Premium</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Senin</td>
				<td>08.00-10.00</td>
				<td>10.00-12.00</td>
				<td>14.00-16.00</td>
			</tr>
			<tr>
				<td>Selasa</td>
				<td>10.00-12.00</td>
				<td>14.00-16.00</td>
				<td>16.00-18.00</td>
			</tr>
			<tr>
				<td>Rabu</td>
				<td>08.00-10.00</td>
				<td>10.00-12.00</td>
				<td>14.00-16.00</td>
			</tr>
			<tr>
				<td>Kamis</td>
				<td>14.00-16.00</td>
				<td>16.00-18.00</td>
				<td>18.00-20.00</td>
			</tr>
			<tr>
				<td>Jumat</td>
				<td>08.00-10.00</td>
				<td>10.00-12.00</td>
				<td>14.00-16.00</td>
			</tr>
			<tr>
				<td>Sabtu</td>
				<td>08.00-10.00</td>
				<td>10.00-12.00</td>
				<td>14.00-16.00</td>
			</tr>
			<tr>
				<td>Minggu</td>
				<td>14.00-16.00</td>
				<td>16.00-18.00</td>
				<td>18.00-20.00</td>
			</tr>
		</tbody>
	</table>
</body>
@endsection
    