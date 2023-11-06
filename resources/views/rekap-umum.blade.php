@include('master.navbar')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>LPK Berdasarkan Data Umum</title>
    <h1>A. Data Umum</h1>
    <a href="rekap-umum-add" class= "btn btn-dark ml-5">Add Data</a>

</head>
<body>
    <table class="table" border="2" cellspacing=0>
        <thead>
        <tr bgcolor="#001a00" style="color:white">
            <th rowspan="2" >No. </th>
            {{-- <th rowspan="2" >ID LPK</th> --}}
            <th rowspan="2" >Nama</th>
            <th rowspan="2" >Nomor Ijin LPK</th>
            <th rowspan="2" >Masa Berlaku</th>
            <th colspan="3" >alamat</th>
            <th rowspan="2" >Tanda Daftar LPK</th>
            <th rowspan="2" >Jenis LPK</th>
            <th rowspan="2" >Nama Pimpinan</th>
            <th rowspan="2" >Nama Penanggung Jawab</th>
            <th rowspan="2" >Status Akreditasi</th>
            <th colspan="2" rowspan="2">Action</th>
        </tr>
        <tr bgcolor="#001a00" style="color:white">
            <th >Kantor</th>
            <th >Telp</th>
            <th >Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listlpk as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            {{-- <td>{{$data->id}}</td> --}}
            <td>{{$data->nama_lpk}}</td>
            <td>{{$data->nomor_ijin_lpk}}</td>
            <td>{{$data->masa_berlaku_ijin_lpk}}</td>
            <td>{{$data->kantor}}</td>
            <td>{{$data->telp}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->nomor_ijin_lpk}}</td>
            <td>{{$data->jenis_lpk}}</td>
            <td>
                @foreach ($data->pimpinan as $pimpinan)
                {{$pimpinan->nama}} <br>
                @endforeach
            </td>
            <td>
                @foreach ($data->pj as $pj)
                {{$pj->nama}} <br>
                @endforeach
            </td>
            <td>{{$data->status_akreditasi}}</td>
            
            <td >
                <form> 
                <a href="rekap-umum-edit/{{$data->id}}" style="color: black">Edit
                    <i class="fa fa-pencil fa-2x" style="color: rgb(29, 127, 255)"></i> 
                </a></form>
            </td>
            <td>
                <form class="d-inline" action="/rekap-umum/{{$data->id}}" method="post">
                @csrf
                @method('delete')
                <a type="submit" name="submit" style="color: black" onclick="return confirm('Serius pgn dihapus bang?')">Delete
                    <i class="fa fa-trash-o fa-2x " style="color: red"></i> 
                </a>
                </form>
            </td>
                
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>    
    
