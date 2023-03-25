<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>Example Laravel App</title>
        @endif
    </head>
    <body>
        <div><a href="/home">Home</a> | <a href="/jadwal">Jadwal</a> | <a href="/paket">Paket</a> | <a href="/trainer">Trainers</a> | <a href="/list-kendaraan">List Kendaraaan</a> | <a href="/lokasi-dan-kontak">Lokasi dan kontak</a> 
        <hr/>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>