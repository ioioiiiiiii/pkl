@include('master/navbar')

<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kegiatan Pengembangan</title>
    
    
        <h4 class="mx-3">B. Kegiatan Pengembangan</h4>
        
        <a class="btn btn-outline-success mb-2 ms-3" href="/kegiatan-pengembangan-add"  role="button">Add</a> 
        <a class="btn btn-outline-primary mb-2 ms-3" href="rekap-umum-eksport"  role="button" target="_blank"> Export</a> 
<div class="col-auto"> 
    <div class="table table-responsive">
        <table class="table table-bordered mx-3" style="border-color: black">
            <thead>
                <tr>
                <th class="text-center" rowspan="2">No</th>
                <th class="text-center" rowspan="2" >Nama Program</th>
                <th class="text-center" rowspan="2" >Inisiator</th>
                <th class="text-center" rowspan="2" >Durasi Pelatihan</th>
                <th class="text-center" rowspan="2" >Standar Kompetensi</th>
                <th class="text-center" rowspan="2" >LPK</th>
                <th class="text-center" rowspan="2" colspan="3" >Action</th>
               
        </thead>
        <tbody>
            @foreach($listkegiatanpengembangan as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama_program}}</td>
                <td>{{$data->inisiator}}</td>
                <td>{{$data->durasi_pelatihan}}</td>
                <td>{{$data->standar_kompetensi}}</td>
                <td>{{$data->lpk['nama_lpk']}}</td>
               <td>
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


