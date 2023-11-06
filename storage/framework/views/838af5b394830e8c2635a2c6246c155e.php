<?php echo $__env->make('master.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        <?php $__currentLoopData = $listlpk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            
            <td><?php echo e($data->nama_lpk); ?></td>
            <td><?php echo e($data->nomor_ijin_lpk); ?></td>
            <td><?php echo e($data->masa_berlaku_ijin_lpk); ?></td>
            <td><?php echo e($data->kantor); ?></td>
            <td><?php echo e($data->telp); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->nomor_ijin_lpk); ?></td>
            <td><?php echo e($data->jenis_lpk); ?></td>
            <td>
                <?php $__currentLoopData = $data->pimpinan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimpinan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($pimpinan->nama); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php $__currentLoopData = $data->pj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($pj->nama); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e($data->status_akreditasi); ?></td>
            
            <td >
                <form> 
                <a href="rekap-umum-edit/<?php echo e($data->id); ?>" style="color: black">Edit
                    <i class="fa fa-pencil fa-2x" style="color: rgb(29, 127, 255)"></i> 
                </a></form>
            </td>
            <td>
                <form class="d-inline" action="/rekap-umum/<?php echo e($data->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <a type="submit" name="submit" style="color: black" onclick="return confirm('Serius pgn dihapus bang?')">Delete
                    <i class="fa fa-trash-o fa-2x " style="color: red"></i> 
                </a>
                </form>
            </td>
                
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html>    
    
<?php /**PATH C:\Semester 5\pkl\web\web\resources\views/rekap-umum.blade.php ENDPATH**/ ?>