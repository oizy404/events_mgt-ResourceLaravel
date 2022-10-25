

<?php $__env->startSection('title'); ?>
    Specific Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="eventname offset-md-1 mt-4">
            <h3><?php echo e($event->event_name); ?></h3><hr>
        </div>
        <div class="eventinfo col-md-6 offset-md-3" style="background-color: white;">
            <h4><b>Event Details</b></h4><br><br>
            <div class="details">
                <h5><b>Schedule: </b><?php echo e($event->event_date); ?></h5><hr>
                <h5><b>Venue: </b><?php echo e($event->event_venue); ?></h5><hr>
                <h5><b>In Charge: </b><?php echo e($event->event_incharge); ?></h5><hr><br>
                
                <a href="<?php echo e(route('events.index')); ?>"><button type="submit" class="btn-back">Back</button></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\eventsmgt_system\resources\views/pages/event.blade.php ENDPATH**/ ?>