

<?php $__env->startSection('title'); ?>
    ARTiC - Admin Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Admin Category</h2>
    <p class="dashboard-subtitle">List of Categories</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary mb-3">
                            + Add New Category
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                            <tbody></tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script>
        var dataTable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '<?php echo url()->current(); ?>',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'photo', name: 'photo' },
                { data: 'slug', name: 'slug' },
                { 
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%', 
                },
            ]
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/admin/category/index.blade.php ENDPATH**/ ?>