;

<?php $__env->startSection('title'); ?>
Image Upload
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h4 style="color:green"><?php echo e(session('message')); ?></h4>
        <h2 class="text-center mb-4">Upload an Image Info</h2>

        <!-- Image Upload Form -->
        <form action="<?php echo e(route('upload.image')); ?>" method="POST" enctype="multipart/form-data" class="mb-5">
            <?php echo csrf_field(); ?>
            <div class="row g-2 align-items-center">
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" required placeholder="Image Name">
                </div>
                <div class="col-md-10">
                    <textarea name="details" id="" cols="30" rows="3" class="form-control" placeholder="Image Details"></textarea>
                </div>
                <div class="col-md-10">
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Upload Image Info</button>
                </div>
            </div>
        </form>
        <!-- Uploaded Images Table -->
        <h3 class="text-center">Uploaded Images Will Be Shown Here</h3>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image Preview</th>
                    <th scope="col">Image Name</th>
                    <th scope="col">Image Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row; replace with dynamic data -->
                <?php $__currentLoopData = $imageInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><img src="<?php echo e(asset($imageInfo->image)); ?>" height="100" width="100" alt=""></td>
                    <td scope="row"><?php echo e($imageInfo->name); ?></td>
                    <td scope="row"><?php echo Str::limit($imageInfo->details, 80); ?> </td>
                    <td>
                        <a href="<?php echo e(route('image.details', ['id' => $imageInfo->id])); ?>" class="btn btn-success">Details</a>
                        <a href="<?php echo e(route('image.delete', ['id' => $imageInfo->id])); ?>" class="btn btn-danger" onclick=" return confirm('Are You Sure Want To Delete This!')">Delete</a>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assessment\intern-test-nov-24-main\resources\views/upload.blade.php ENDPATH**/ ?>