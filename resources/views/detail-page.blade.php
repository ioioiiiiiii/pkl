<link rel="stylesheet" href="css/style1.css">
<h3>A. Data Umum</h3>

<div class="table-responsives">
<table class="table table-striped table-hover table-bordered" border="1" cellspacing="0">  
    <tr>
        <td>Nama :</td>
        <td colspan="2">{{$listlpk->nama_lpk}}</td>
    </tr>
    <tr>
        <td>No Ijin LPK :</td>  
        <td colspan="2">{{$listlpk->nomor_ijin_lpk}}</td>      
    </tr>
    <tr>
        <td colspan="3">
            <b>Alamat</b>
        </td>
    </tr>
    <tr>
        <td rowspan="3">
            a. Kantor : <br>
            b. Telp/Fax : <br>
            c. Email :
        
        <td colspan="2">{{$listlpk->kantor}} </td> 
    </tr>
  
    <tr>
        <td colspan="2">{{$listlpk->telp}} </td> 
    </tr>
    <tr>
        <td colspan="2">{{$listlpk->email}} </td> 
    </tr>
    
   
    <tr>
        <td>Jenis :</td>  
        <td colspan="2">{{$listlpk->jenis_lpk}}</td>      
    </tr>  
    
    <tr>
        <td colspan="3">
            <b>Pimpinan</b>
        </td>
    </tr>    
    <tr>
        <td>Nama :</td>
        <td colspan="2">
            {{$listlpk->nama_pimpinan}}  
        </td> 
    </tr>
    <tr>
    <td>Telp :</td> 
    <td colspan="2">
        {{$listlpk->telp_pimpinan}}  
    </td>
</tr>
<tr>
    <td>Email :</td>
    <td colspan="2">
        {{$listlpk->email}}  
    </td> 
</tr>
<td>
    <b>Penanggung Jawab</b>            
</td>
<tr>
    <td>Nama :</td>
    <td colspan="2">
        {{$listlpk->nama_pj}}  
    </td> 
  </tr>
  <tr>
   <td>Jabatan :</td>
   <td colspan="2">
       {{$listlpk->jabatan_pj}}  
    </td> 
  </tr>
  <tr>
      <td>Telp :</td> 
      <td colspan="2">
        {{$listlpk->telp_pj}}  
    </td>
   </tr>
   <tr>
       <td rowspan="2">Phone:</td>
       <td>123-45-678</td>
    </tr>
   <tr>
       <td>212-00-546</td>
    </tr>
    <tr>
        <td>Jumlah Karyawan</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>a. Tenaga Pelatihan Tetap</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>b. Tenaga Pelatihan Tidak Tetap</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>c. Instruksi Tetap</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>d. Instruksi Tidak Tetap</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>f. Instruktur/Asesor yang Berkewarganegaraan asing</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>g. Jumlah Kapasitas Siswa/ per-Angkatan / per-Pelatihan</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>h. Jumlah Kapasitas Siswa Pertahun</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>e. Asosor Kompetensi</td>
        <td>Laki-Laki</td>
        <td>Perempuan</td>
    </tr>

    
</table>
</div>