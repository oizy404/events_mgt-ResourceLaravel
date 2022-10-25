

<?php $__env->startSection('title'); ?>
    Add Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h4 class="offset-md-1 mt-5">Add Event</h4>
        <div class="col-md-6 offset-md-3 mt-5" style="background-color: white;">
            <form action="<?php echo e(route('events.store')); ?>" id="eventform" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <div class="mb-3">
                    <label for="eventname" class="form-label"><b>Event Name</b></label>
                    <input type="text" class="form-control" name="eventname">
                </div>
                <div class="mb-3">
                    <label for="eventdate"><b>Date</b></label>
                    <input type="date" class="form-control mt-2" id="eventdate" name="eventdate">
                </div>
                <div class="mb-3">
                    <label for="eventvenue" class="form-label"><b>Event Venue</b></label>
                    <input type="text" class="form-control" name="eventvenue">
                </div>
                <div class="mb-3">
                    <label for="eventincharge" class="form-label"><b>In Charge</b></label>
                    <input type="text" class="form-control" name="eventincharge">
                </div><br>
                <button type="Add" class="btn" id="btn-create"><b>Create</b></button>
                <a href="<?php echo e(route('events.index')); ?>" class="btn" id="btn-cancel"><b>Cancel</b></a>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\eventsmgt_system\resources\views/pages/add.blade.php ENDPATH**/ ?>