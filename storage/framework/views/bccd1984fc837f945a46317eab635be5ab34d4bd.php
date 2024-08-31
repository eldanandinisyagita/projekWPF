<?php $__currentLoopData = $ajax_barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group">
                        <label class="control-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo e($barang->harga); ?>" readonly required>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-harga"></div>
                    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\projectWPF\resources\views/brg_masuk/ajax.blade.php ENDPATH**/ ?>