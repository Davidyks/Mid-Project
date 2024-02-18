<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Chipi Chapa</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/karyawan.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="left">
            <img src="{{ asset('asset/logo.avif') }}" alt="Logo">
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="#">Karyawan</a>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="judul">
            <div class="kiri">
            <h1>LIST</h1>
            </div>
            <div class="kanan">
                <a href="/add-karyawan">Add karyawan</a>
            </div>
        </div>
        <hr>
        <div class="karyawan">
            @forelse($karyawan as $k)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$k->Photo) }}" class="card-img-top" alt="{{ $k->Photo }}">
                <div class="card-body">
                    <p>Nama : {{ $k->Nama }}</p>
                    <p>Umur : {{ $k->Umur }}</p>
                    <p>Alamat : {{ $k->Alamat }}</p>
                    <p>Nomor Telpon : {{ $k->Telpon }}</p>
                    <div class="tombol" style="display: flex; align-items: center">
                        <button class="btn btn-info" style="margin-right: 20px">
                            <a href="/edit-karyawan/{{ $k->id }}" style="text-decoration: none; color: black">Update</a>
                        </button>
                        <form action="/delete-karyawan/{{ $k->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" style="margin-top: 15px">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
                <p>{{ "No Karyawan Hired." }}</p>
            @endforelse
        </div>
 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>