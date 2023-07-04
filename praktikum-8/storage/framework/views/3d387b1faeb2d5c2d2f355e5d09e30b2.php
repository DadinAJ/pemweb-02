

<?php $__env->startSection('content'); ?>
<h1>Products</h1>
<a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary mb-3">Tambah Produk</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        <?php $number = 1;  ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($number); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td>
            <a href="<?php echo e(route('produk.edit', $product)); ?>" class="btn btn-primary">Edit</a>
              <form action="<?php echo e(route('produk.destroy', $product)); ?>" method="POST" style="display: inline">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        <?php  $number++ ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\weblara\contoh-laravel\resources\views/toko/admin.blade.php ENDPATH**/ ?>