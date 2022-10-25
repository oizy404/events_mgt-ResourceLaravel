

<?php $__env->startSection('title'); ?>
    Event Management System
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="home-container">
        <h4 class="mt-4">Events Management System</h4><hr>
        <a href="<?php echo e(route('events.create')); ?>" class="btn mt-4" id="btn-add"><i class="fa fa-plus-square"></i> Add Event</a>
        <br><br>
        
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mt-3">
                <div class="col-md-4 round">
                    <div class="card" id="eventcard">
                        <div class="card-body">
                            <form action="<?php echo e(route('events.destroy', $event->id)); ?>" method="post">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('delete'); ?>
                                <button class="btn-delete" type="submit"onclick="return confirm(' Are you sure you want to delete?')">
                                    <i class="fa fa-trash"></i>
                                </button><br><br>
                            </form>
                            <h5><?php echo e($event->event_name); ?></h5><hr><br>
                            <a href="<?php echo e(route('events.show', $event->id)); ?>"><button id="btn-view"><i class="fa fa-eye"></i> View</button></a>
                            <a href="<?php echo e(route('events.edit', $event->id)); ?>"><button id="btn-edit"><i class="fa fa-edit"></i> Edit</button></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\eventsmgt_system\resources\views/pages/home.blade.php ENDPATH**/ ?>