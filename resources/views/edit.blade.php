<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin: 200px; background-color: azure; padding: 40px">
        <h1>Update Karyawan</h1>
        <form action="/update-karyawan/{{ $karyawanx->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" aria-describedby="emailHelp" name="Nama" value="{{ $karyawanx->Nama }}">
        </div>
        @error('Nama')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="Umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="Umur" aria-describedby="emailHelp" name="Umur" value="{{ $karyawanx->Umur }}">
        </div>
        @error('Umur')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Alamat" aria-describedby="emailHelp" name="Alamat" value="{{ $karyawanx->Alamat }}">
        </div>
        @error('Alamat')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="Telpon" class="form-label">Nomor Telpon</label>
            <input type="text" class="form-control" id="Telpon" aria-describedby="emailHelp" name="Telpon" value="{{ $karyawanx->Telpon }}">
        </div>
        @error('Telpon')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="Photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="Photo" aria-describedby="emailHelp" name="Photo">
        </div>
        @error('Photo')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>