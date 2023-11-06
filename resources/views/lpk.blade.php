
<table>
  <thead>
  @foreach ($listlpk as $data)
  <tr>
    <td><b>{{$loop->iteration }}. </b></td>
  </tr>
  <tr>
     <td>Nama :</td>
     <td>{{$data->nama_lpk}}</td>
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
      @foreach($data->pimpinan as $pimpinan)
        {{$pimpinan->nama}}
      @endforeach  
    </td> 
   </tr>
   <tr>
    <td>Telp :</td> 
    <td>
      @foreach($data->pimpinan as $pimpinan)
        {{$pimpinan->telp}}
      @endforeach  
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td>
      @foreach($data->pimpinan as $pimpinan)
        {{$pimpinan->email}}
      @endforeach  
    </td> 
   </tr>
   <tr>
     <td><b>Penanggung Jawab</b></td>            
   </tr>  
   <tr>
    <td>Nama :</td>
    <td>
      @foreach($data->pj as $pj)
        {{$pj->nama}}
      @endforeach  
    </td> 
  </tr>
  <tr>
   <td>Jabatan :</td>
   <td>
     @foreach($data->pj as $pj)
       {{$pj->jabatan}}
     @endforeach  
   </td> 
  </tr>
   <tr>
    <td>Telp :</td> 
    <td>
      @foreach($data->pj as $pj)
        {{$pj->telp}}
      @endforeach  
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
   @endforeach
  </thead>
 </table>