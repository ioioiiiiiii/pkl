<link rel="stylesheet" href="css/style1.css">
<table class="table table-bordered">
  <thead>
  
  <tr>
     <td>Nama :</td>
     <td>{{$listlpk->nama_lpk}}</td>
   </tr>
   <tr>
     <td>No Ijin LPK :</td>  
     <td>{{$data->nomor_ijin_lpk}}</td>      
   </tr>  
   <tr>
     <td>Kantor :</td>  
     <td>{{$data->kantor}}</td>      
   </tr>  
   <tr>
     <td>Telp :</td>  
     <td>{{$data->telp}}</td>      
   </tr>  
   <tr>
     <td>Email :</td>  
     <td>{{$data->email}}</td>      
   </tr>  
   <tr>
     <td>Jenis :</td>  
     <td>{{$data->jenis_lpk}}</td>      
   </tr>  
   <tr>
     <td><b>Pimpinan</b></td>            
   </tr>  
   <tr>
    <td>Nama :</td>
    <td>
        {{$pimpinan->nama}}  
    </td> 
   </tr>
   <tr>
    <td>Telp :</td> 
    <td>
        {{$pimpinan->telp}}  
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td>
        {{$pimpinan->email}}  
    </td> 
   </tr>
   <tr>
     <td><b>Penanggung Jawab</b></td>            
   </tr>  
   <tr>
    <td>Nama :</td>
    <td>
        {{$pj->nama}}  
    </td> 
  </tr>
  <tr>
   <td>Jabatan :</td>
   <td>
       {{$pj->jabatan}}  
   </td> 
  </tr>
   <tr>
    <td>Telp :</td> 
    <td>
        {{$pj->telp}}  
    </td>
   </tr>
   <tr>
     <td rowspan="2">Phone:</td>
     <td>123-45-678</td>
   </tr>
   <tr>
     <td>212-00-546</td>
   </tr>
   <tr><td><br><br></td></tr>
   
  </thead>
 </table>

 