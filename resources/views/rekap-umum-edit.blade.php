<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
        <div class="col-7 mx-auto mt-5">
            <form action="/rekap-umum/{{$lpk->id}}" method="post">
                @method('PUT')
                @csrf
               
                <div class="form-group row mb-3">
                    <label for="nama_lpk" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_lpk" name="nama_lpk"  value="{{$lpk->nama_lpk}}" required>
                    </div>
                </div>
        
                <div class="form-group row mb-3">
                    <label for="nomor_ijin_lpk" class="col-sm-2 col-form-label">Nomor Ijin LPK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomor_ijin_lpk" name="nomor_ijin_lpk" value="{{$lpk->nomor_ijin_lpk}}">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="masa_berlaku_ijin_lpk" class="col-sm-2 col-form-label">Masa Berlaku Ijin LPK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="masa_berlaku_ijin_lpk" name="masa_berlaku_ijin_lpk" value="{{$lpk->masa_berlaku_ijin_lpk}}">
                    </div>
                </div>

                
                <div class="row g-3"> 
                    <div>Alamat</div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="kantor"></label>
                        <input type="text" class="form-control" placeholder="Kantor" id="kantor" name="kantor" value="{{$lpk->kantor}}">
                    </div>
                    <div class="form-group col-md-4 mb-3" >
                        <label for="telp"> </label>
                        <input type="text" class="form-control" placeholder="Telp" id="telp" name="telp" value="{{$lpk->telp}}">
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$lpk->email}}">
                    </div>
                </div>
                <div class="row g-3"> 
                    <div>Pimpinan</div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="nama_pimpinan"></label>
                        <input type="text" class="form-control" placeholder="Nama" id="nama_pimpinan" name="nama_pimpinan" value="{{$lpk->nama_pimpinan}}">
                    </div>
                    <div class="form-group col-md-4 mb-3" >
                        <label for="telp_pimpinan"> </label>
                        <input type="text" class="form-control" placeholder="Telp" id="telp_pimpinan" name="telp_pimpinan" value="{{$lpk->telp_pimpinan}}">
                    </div>
                </div>
                <div class="row g-3"> 
                    <div>Penanggung Jawab</div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="nama_pj"></label>
                        <input type="text" class="form-control" placeholder="Nama" id="nama_pj" name="nama_pj" value="{{$lpk->nama_pj}}">
                    </div>
                    <div class="form-group col-md-4 mb-3" >
                        <label for="telp_pj"> </label>
                        <input type="text" class="form-control" placeholder="Telp" id="telp_pj" name="telp_pj" value="{{$lpk->telp_pj}}">
                    </div>
                    <div class="form-group col-md-4 mb-3" >
                        <label for="jabatan_pj"> </label>
                        <input type="text" class="form-control" placeholder="Telp" id="jabatan_pj" name="jabatan_pj" value="{{$lpk->jabatan_pj}}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="tgl_menjabat" class="col-sm-2 col-form-label">Tanggal Menjabat</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tgl_menjabat" name="tgl_menjabat" value="{{$lpk->tgl_menjabat}}">
                    </div>
                </div>

                
                <div class="form-group row mb-3">
                    <label for="nomor_tgl_ijin" class="col-sm-2 col-form-label">Nomor Tanggal Ijin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomor_tgl_ijin" name="nomor_tgl_ijin" value="{{$lpk->nomor_tgl_ijin}}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="jenis_lpk" class="col-sm-2 col-form-label">Jenis LPK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_lpk" name="jenis_lpk" value="{{$lpk->jenis_lpk}}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="status_akrediasi" class="col-sm-2 col-form-label">Status Akreditasi</label>
                    <div class="col-sm-10">
                        <select name="status_akreditasi" id="status_akreditasi" class="form-control" name="status_akreditasi"  >
                            <option value="{{$lpk->status_akreditasi}}">{{$lpk->status_akreditasi}}</option>
                            <option value="Sudah Akreditasi">Sudah Akreditasi</option>
                            <option value="Belum Akreditasi">Belum Akreditasi</option>
                            <option value="Masih Proses Akreditasi">Masih Proses Akreditasi</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="nomor_sk_akreditasi" class="col-sm-2 col-form-label">Nomor SK Akreditasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomor_sk_akreditasi" name="nomor_sk_akreditasi" value="{{$lpk->nomor_sk_akreditasi}}">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="ruang_lingkup" class="col-sm-2 col-form-label">Ruang Lingkup</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ruang_lingkup" name="ruang_lingkup" value="{{$lpk->ruang_lingkup}}">
                    </div>
                </div>
                
                
        
                <div class="mb-3">
                    <button class="btn btn-success " type="submit">Simpan</button>
                    <a href="{{url()->previous()}}" class="btn btn-danger">Batal
                    </a>

                </div>
                @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
</div>
</body>
</html>

