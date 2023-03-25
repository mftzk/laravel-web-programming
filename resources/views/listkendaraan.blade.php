@extends('layouts.master')

@section('content')
<head>
	<title>List Kendaraan Kelas Mengemudi Roda 5</title>
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
        .matic {
            background-color: #ccf5ff;
        }
        .manual {
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
				<th>Merk Kendaraan</th>
				<th>Tipe Kendaraan</th>
				<th>Transmisi</th>
			</tr>
		</thead>
		<tbody>
			<tr class="matic">
				<td colspan="4"><strong>Matic</strong></td>
			</tr>
			<tr class="matic">
				<td>1</td>
				<td>Toyota</td>
				<td>Avanza Veloz</td>
				<td>Matic</td>
			</tr>
			<tr class="matic">
				<td>2</td>
				<td>Suzuki</td>
				<td>Ertiga</td>
				<td>Matic</td>
			</tr>
			<tr class="matic">
				<td>3</td>
				<td>Honda</td>
				<td>Mobilio</td>
				<td>Matic</td>
			</tr>
			<tr class="manual">
				<td colspan="4"><strong>Manual</strong></td>
			</tr>
			<tr class="manual">
				<td>4</td>
				<td>Toyota</td>
				<td>Avanza</td>
				<td>Manual</td>
			</tr>
			<tr class="manual">
				<td>5</td>
				<td>Suzuki</td>
				<td>Ertiga Dreza</td>
				<td>Manual</td>
			</tr>
			<tr class="manual">
				<td>6</td>
				<td>Honda</td>
				<td>BR-V</td>
				<td>Manual</td>
			</tr>
		</tbody>
	</table>
</body>
@endsection
    