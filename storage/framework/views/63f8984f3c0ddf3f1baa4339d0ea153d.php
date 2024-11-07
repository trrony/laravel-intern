;

<?php $__env->startSection('title'); ?>
Image Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">

<a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back</a>
    <h3 class="text-center py-5">Uploaded Images Details Here</h3>
    <table class="table table-bordered table-striped mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card card-body">

                            <h5><img src="<?php echo e(asset($imageInfo->image)); ?>" height="500" width="400" alt=""></h5>
                            <h5>Image name: <?php echo e($imageInfo->name); ?></h5>
                            <h6>Image Details: <?php echo e($imageInfo->details); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assessment\intern-test-nov-24-main\resources\views/details.blade.php ENDPATH**/ ?>