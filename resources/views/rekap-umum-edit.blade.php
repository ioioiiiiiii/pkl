<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/rekap-umum/{{$lpk->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nama_lpk">Nama</label>
            <input type="text" class="form-control" id="nama_lpk" name="nama_lpk" value="{{$lpk->nama_lpk}}" required>
        </div>

        <div class="mb-3">
            <label for="nomor_ijin_lpk">Nomor Ijin LPK</label>
            <input type="text" class="form-control" id="nomor_ijin_lpk" name="nomor_ijin_lpk" value="{{$lpk->nomor_ijin_lpk}}"required>
        </div>
        <div class="mb-3">
            <label for="masa_berlaku_ijin_lpk">Masa Berlaku Ijin LPK</label>
            <input type="text" class="form-control" id="masa_berlaku_ijin_lpk" name="masa_berlaku_ijin_lpk" value="{{$lpk->masa_berlaku_ijin_lpk}}"required>
        </div>
        <div class="mb-3">
            <label for="kantor">Alamat Kantor </label>
            <input type="text" class="form-control" id="kantor" name="kantor" value="{{$lpk->kantor}}"required>
        </div>
        <div class="mb-3">
            <label for="telp">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp" value="{{$lpk->telp}}"required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$lpk->email}}"required>
        </div>
        <div class="mb-3">
            <label for="nomor_tgl_ijin">Nomor Tanggal Ijin</label>
            <input type="text" class="form-control" id="nomor_tgl_ijin" name="nomor_tgl_ijin" value="{{$lpk->nomor_tgl_ijin}}"required>
        </div>
        <div class="mb-3">
            <label for="jenis_lpk">Jenis LPK</label>
            <input type="text" class="form-control" id="jenis_lpk" name="jenis_lpk" value="{{$lpk->jenis_lpk}}"required>
        </div>
        
        
        
        {{-- <div class="mb-3">
            <label for="perusahaan">ID Perusahaan</label>
            <select name="id_perusahaan" id="perusahaan" class="form-control"  required>
               <option value="{{$lpk->perusahaan->id}}">{{$lpk->perusahaan->nama}}</option>
               @foreach ($perusahaan as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
               @endforeach
            </select>
        </div>

        
        <div class="mb-3">
            <label for="jabatan">ID Jabatan</label>
            <select name="id_jabatan" id="jabatan" class="form-control" required>
                <option value="{{$lpk->jabatan->id}}">{{$lpk->jabatan->nama}}</option>
                @foreach ($jabatan as $index)
                    <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div> --}}
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>