<h4 >A. Rekap Berdasarkan Data Umum</h4>
<link rel="stylesheet" href="css/style1.css">
<div class="table-responsive"> 
        <table class="" style="border-color: black" border="1">
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
            </tr>
            @endforeach
        </tbody>
        </table>
</div>    


