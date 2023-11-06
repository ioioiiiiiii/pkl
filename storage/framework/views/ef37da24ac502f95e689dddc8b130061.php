<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/rekap-umum/<?php echo e($lpk->id); ?>" method="POST" >
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama_lpk">Nama</label>
            <input type="text" class="form-control" id="nama_lpk" name="nama_lpk" value="<?php echo e($lpk->nama_lpk); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nomor_ijin_lpk">Nomor Ijin LPK</label>
            <input type="text" class="form-control" id="nomor_ijin_lpk" name="nomor_ijin_lpk" value="<?php echo e($lpk->nomor_ijin_lpk); ?>"required>
        </div>
        <div class="mb-3">
            <label for="masa_berlaku_ijin_lpk">Masa Berlaku Ijin LPK</label>
            <input type="text" class="form-control" id="masa_berlaku_ijin_lpk" name="masa_berlaku_ijin_lpk" value="<?php echo e($lpk->masa_berlaku_ijin_lpk); ?>"required>
        </div>
        <div class="mb-3">
            <label for="kantor">Alamat Kantor </label>
            <input type="text" class="form-control" id="kantor" name="kantor" value="<?php echo e($lpk->kantor); ?>"required>
        </div>
        <div class="mb-3">
            <label for="telp">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo e($lpk->telp); ?>"required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo e($lpk->email); ?>"required>
        </div>
        <div class="mb-3">
            <label for="nomor_tgl_ijin">Nomor Tanggal Ijin</label>
            <input type="text" class="form-control" id="nomor_tgl_ijin" name="nomor_tgl_ijin" value="<?php echo e($lpk->nomor_tgl_ijin); ?>"required>
        </div>
        <div class="mb-3">
            <label for="jenis_lpk">Jenis LPK</label>
            <input type="text" class="form-control" id="jenis_lpk" name="jenis_lpk" value="<?php echo e($lpk->jenis_lpk); ?>"required>
        </div>
        
        
        
        
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form><?php /**PATH C:\Semester 5\pkl\web\web\resources\views/rekap-umum-edit.blade.php ENDPATH**/ ?>