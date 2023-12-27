<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Add Data</title>
</head>
<body>
        <div class="col-7 mx-auto mt-5">
            <form action="kegiatan-pengembangan" method="post">
                @csrf
               
                <div class="form-group row mb-3 ">
                    <label for="nama_program" class="col-sm-2 col-form-label">Nama Program</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_program" name="nama_program"  required>
                    </div>
                </div>
        
                <div class="form-group row mb-3">
                    <label for="inisiator" class="col-sm-2 col-form-label">Inisiator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inisiator" name="inisiator" >
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="durasi_pelatihan" class="col-sm-2 col-form-label">Durasi Pelatihan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="durasi_pelatihan" name="durasi_pelatihan" >
                    </div>
                </div>

                
              
                <div class="form-group row mb-3">
                    <label for="standar_kompetensi" class="col-sm-2 col-form-label">Standar Kompetensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="standar_kompetensi" name="standar_kompetensi" >
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" >
                    </div>
                </div>
                

              

                <div class="form-group row mb-3">
                    <label for="lpk" class="col-sm-2 col-form-label">LPK</label>
                    <div class="col-sm-10">
                    <select name="id_lpk" id="lpk" class="form-control" name="id"required>
                        <option value="">--pilih--</option>
                        @foreach ($lpk as $data)
                        <option value="{{$data->id}}">{{$data->nama_lpk}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                
        
                <div class="mb-3">
                    <button class="btn btn-success " type="submit">Simpan</button>
                    <a href="kegiatan-pengembangan" class="btn btn-danger">Batal</a>

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

