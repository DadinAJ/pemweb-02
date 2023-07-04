

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('produk.update', $product)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo e($product->name); ?>">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" value="<?php echo e($product->price); ?>">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" class="form-control" value="<?php echo e($product->description); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\weblara\contoh-laravel\resources\views/toko/edit.blade.php ENDPATH**/ ?>