@extends('layouts.master')

@section('content')
<head>
	<title>Trainer Kelas Mengemudi</title>
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
				<th>Nama</th>
				<th>Alamat</th>
				<th>No. Telepon</th>
				<th>Jumlah Kelas</th>
				<th>Rating</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John Doe</td>
				<td>Jl. Merdeka No. 12</td>
				<td>08123xxx</td>
				<td>50</td>
				<td>4.5/5</td>
			</tr>
			<tr>
				<td>Jane Smith</td>
				<td>Jl. Sudirman No. 45</td>
				<td>082345678901</td>
				<td>30</td>
				<td>4/5</td>
			</tr>
			<tr>
				<td>Bob Johnson</td>
				<td>Jl. Thamrin No. 78</td>
				<td>08345678xxx</td>
				<td>40</td>
				<td>4.2/5</td>
			</tr>
			<tr>
				<td>Alice Lee</td>
				<td>Jl. Gatot Subroto No. 90</td>
				<td>0845678xxx</td>
				<td>35</td>
				<td>4.8/5</td>
			</tr>
			<tr>
				<td>Tom Wong</td>
				<td>Jl. Hayam Wuruk No. 112</td>
				<td>08567890xxx</td>
				<td>45</td>
				<td>4.6/5</td>
			</tr>
		</tbody>
	</table>
</body>
@endsection
    