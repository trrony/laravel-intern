<?php $__env->startSection('title'); ?>
Edit Image Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h4 style="color:green"><?php echo e(session('message')); ?></h4>
    <h2 class="text-center mb-4">Edit an Image Info</h2>

    <!-- Image Upload Form -->
    <form action="<?php echo e(route('update.image', ['id' => $imageInfo->id])); ?>" method="POST" enctype="multipart/form-data" class="mb-5">
        <?php echo csrf_field(); ?>
        <div class="row g-2 align-items-center">
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" value="<?php echo e($imageInfo->name); ?>" required placeholder="Image Name">
            </div>
            <div class="col-md-10">
                <textarea name="details" id="" cols="30" rows="3" class="form-control" placeholder="Image Details"><?php echo e($imageInfo->details); ?></textarea>
            </div>
            <div class="col-md-10">
                <input type="file" name="image" class="form-control" required><br>
                <img src="<?php echo e(asset($imageInfo->image)); ?>" height="50px" width="50px" alt="">
            </div>
            <br> <br>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Update Image Info</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assessment\intern-test-nov-24-main\resources\views/edit.blade.php ENDPATH**/ ?>