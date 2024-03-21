<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data Cabang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: lightgray">
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center" <b>Data Cabang</b></h1>
                        <hr>
                        <h4>Kode Cabang: {{ $dataCabangs->kode_cabang }}</h4>
                        <h4>Nama Cabang: {{ $dataCabangs->nama_cabang }}</h4>
                        <h4>Alamat: {{ $dataCabangs->alamat }}</h4>
                        <h4>Kota: {{ $dataCabangs->kota }}</h4>
                        <h4>Provinsi: {{ $dataCabangs->provinsi }}</h4>
                        <h4>Kode Pos: {{ $dataCabangs->kode_pos }}</h4>
                        <h4>Nomer Telepon: {{ $dataCabangs->nomer_telepon }}</h4>
                        <h4>Email: {{ $dataCabangs->email }}</h4>
                        <h4>Deskripsi: {{ strip_tags($dataCabangs->deskripsi) }}</h4>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('dataCabangs.index') }}" class="btn btn-md btn-success ">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>