

<?php $__env->startSection('title'); ?>
    ARTiC - Admin Transaction
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Admin Transaction</h2>
    <p class="dashboard-subtitle">Edit Transaction</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('transaction.update', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Transaction Status</label>
                                        <select name="transaction_status" class="form-control">
                                            <option value="<?php echo e($item->transaction_status); ?>" selected><?php echo e($item->transaction_status); ?></option>
                                            <option value="" disabled>--------------</option>
                                            <option value="PENDING" >PENDING</option>
                                            <option value="SHIPPING" >SHIPPING</option>
                                            <option value="SUCCESS" >SUCCESS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Total Price</label>
                                        <input type="number" name="total_price" class="form-control" value="<?php echo e($item->total_price); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace('editor');
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/admin/transaction/edit.blade.php ENDPATH**/ ?>