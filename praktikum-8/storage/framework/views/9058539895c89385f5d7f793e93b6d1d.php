

<?php $__env->startSection('content'); ?>
<h1>Tambah Prouk</h1>

<form action="<?php echo e(route("produk.store")); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price :</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\weblara\contoh-laravel\resources\views/toko/create.blade.php ENDPATH**/ ?>