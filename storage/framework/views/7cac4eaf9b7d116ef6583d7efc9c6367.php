
<table>
  <thead>
  <?php $__currentLoopData = $listlpk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><b><?php echo e($loop->iteration); ?>. </b></td>
  </tr>
  <tr>
     <td>Nama :</td>
     <td><?php echo e($data->nama_lpk); ?></td>
   </tr>
   <tr>
     <td>No Ijin LPK :</td>  
     <td><?php echo e($data->nomor_ijin_lpk); ?></td>      
   </tr>  
   <tr>
     <td>Kantor :</td>  
     <td><?php echo e($data->kantor); ?></td>      
   </tr>  
   <tr>
     <td>Telp :</td>  
     <td><?php echo e($data->telp); ?></td>      
   </tr>  
   <tr>
     <td>Email :</td>  
     <td><?php echo e($data->email); ?></td>      
   </tr>  
   <tr>
     <td>Jenis :</td>  
     <td><?php echo e($data->jenis_lpk); ?></td>      
   </tr>  
   <tr>
     <td><b>Pimpinan</b></td>            
   </tr>  
   <tr>
    <td>Nama :</td>
    <td>
      <?php $__currentLoopData = $data->pimpinan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimpinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($pimpinan->nama); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </td> 
   </tr>
   <tr>
    <td>Telp :</td> 
    <td>
      <?php $__currentLoopData = $data->pimpinan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimpinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($pimpinan->telp); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td>
      <?php $__currentLoopData = $data->pimpinan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimpinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($pimpinan->email); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </td> 
   </tr>
   <tr>
     <td><b>Penanggung Jawab</b></td>            
   </tr>  
   <tr>
    <td>Nama :</td>
    <td>
      <?php $__currentLoopData = $data->pj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($pj->nama); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </td> 
  </tr>
  <tr>
   <td>Jabatan :</td>
   <td>
     <?php $__currentLoopData = $data->pj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php echo e($pj->jabatan); ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
   </td> 
  </tr>
   <tr>
    <td>Telp :</td> 
    <td>
      <?php $__currentLoopData = $data->pj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($pj->telp); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
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
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </thead>
 </table><?php /**PATH C:\Semester 5\pkl\web\web\resources\views/lpk.blade.php ENDPATH**/ ?>