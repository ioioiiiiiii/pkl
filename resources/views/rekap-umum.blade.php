@include('master/navbar')

<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LPK Berdasarkan Data Umum</title>
    
    
        <h4 class="mx-3">A. Rekap Berdasarkan Data Umum</h4>
        
        <a class="btn btn-outline-success mb-2 ms-3" href="rekap-umum-add"  role="button">Add</a> 
        <a class="btn btn-outline-primary mb-2 ms-3" href="rekap-umum-eksport"  role="button" target="_blank"> Export</a> 
<div class="col-auto"> 
    <div class="table-responsive">
        <table class="table table-bordered mx-3 w-100" style="border-color: black">
            <thead>
                <tr>
                <th class="text-center" rowspan="2">No</th>
                <th class="text-center" rowspan="2" >Nama</th>
                <th class="text-center" rowspan="2" >Nomor Ijin LPK</th>
                <th class="text-center" rowspan="2" >Masa Berlaku</th>
                <th class="text-center" colspan="3" >Alamat</th>
                <th class="text-center" rowspan="2" >Tanda Daftar LPK</th>
                <th class="text-center" rowspan="2" >Jenis LPK</th>
                <th class="text-center" rowspan="2" >Nama Pimpinan</th>
                <th class="text-center" rowspan="2" >Nama Penanggung Jawab</th>
                <th class="text-center" rowspan="2" >Status Akreditasi</th>
                <th class="text-center" colspan="3" rowspan="2">Action</th>
            </tr>
            <tr >
                <th class="text-center">Kantor</th>
                <th class="text-center">Telp</th>
                <th class="text-center">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listlpk as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama_lpk}}</td>
                <td>{{$data->nomor_ijin_lpk}}</td>
                <td>{{$data->masa_berlaku_ijin_lpk}}</td>
                <td>{{$data->kantor}}</td>
                <td>{{$data->telp}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->nomor_ijin_lpk}}</td>
                <td>{{$data->jenis_lpk}}</td>
                <td>{{$data->nama_pimpinan}}</td>
                <td>{{$data->nama_pj}}</td>
                <td>{{$data->status_akreditasi}}</td>
                <td>
                    <form >
                    <a href="detail-page/{{$data->id}}" class="btn btn-outline-info">Detail</a></form>
                </td>
                <td >
                    <form> 
                        <a href="rekap-umum-edit/{{$data->id}}" style="color: black" class="btn btn-outline-warning">Edit</a>
                    </form>
                </td>
                <td>
                    <form class="d-inline" action="/rekap-umum/{{$data->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit" name="submit" style="color: black" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
</div>
</html>    


