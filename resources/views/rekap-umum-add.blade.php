<div class=" ml-5 col-5 m-auto">
    <form action="rekap-umum" method="post">
        @csrf
       
        <div class="mb-3">
            <label for="nama_lpk">Nama</label>
            <input type="text" class="form-control" id="nama_lpk" name="nama_lpk"  required>
        </div>

        <div class="mb-3">
            <label for="nomor_ijin_lpk">Nomor Ijin LPK</label>
            <input type="text" class="form-control" id="nomor_ijin_lpk" name="nomor_ijin_lpk" >
        </div>
        <div class="mb-3">
            <label for="masa_berlaku_ijin_lpk">Masa Berlaku Ijin LPK</label>
            <input type="text" class="form-control" id="masa_berlaku_ijin_lpk" name="masa_berlaku_ijin_lpk" >
        </div>
        <div class="mb-3">
            <label for="kantor">Alamat Kantor </label>
            <input type="text" class="form-control" id="kantor" name="kantor" >
        </div>
        <div class="mb-3">
            <label for="telp">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" >
        </div>
        <div class="mb-3">
            <label for="nomor_tgl_ijin">Nomor Tanggal Ijin</label>
            <input type="text" class="form-control" id="nomor_tgl_ijin" name="nomor_tgl_ijin" >
        </div>
        <div class="mb-3">
            <label for="jenis_lpk">Jenis LPK</label>
            <input type="text" class="form-control" id="jenis_lpk" name="jenis_lpk" >
        </div>
        
        

        <div class="mb-3">
            <button class="btn btn-success " type="submit">Simpan</button>
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
    </form>
</div>