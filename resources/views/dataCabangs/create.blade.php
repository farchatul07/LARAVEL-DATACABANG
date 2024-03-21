<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background: lightgray;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('dataCabangs.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <a href="{{route ('dataCabangs.index')}}"><i class="bi bi-arrow-left-circle-fill">KEMBALI</a></i>
                            </div>
                            <div class="form-group">
                                <label for="nama_cabang">Nama Cabang</label>
                                <input type="text" name="nama_cabang" class="form-control">
                                @error('nama_cabang')
                                <div class="text-danger">Nama Cabang Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                                @error('alamat')
                                <div class="text-danger">Alamat Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" name="kota" class="form-control">
                                @error('kota')
                                <div class="text-danger">Kota Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control">
                                @error('provinsi')
                                <div class="text-danger">Provinsi Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control">
                                @error('kode_pos')
                                <div class="text-danger">Kode Pos Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nomer_telepon">Nomer Telepon</label>
                                <input type="text" name="nomer_telepon" class="form-control">
                                @error('nomer_telepon')
                                <div class="text-danger">Nomer Telepon Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                                @error('email')
                                <div class="text-danger">Email Harus di isi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi" id="summernote"></textarea>
                                @error('deskripsi')
                                <div class="text-danger">Deskripsi Harus di isi</div>
                                @enderror
                            </div>
                            <div>
                                <br>
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>