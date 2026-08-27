
<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($user->name); ?>,

This is a notification of a new return on investment (ROI) on your investment account. 
<br>

<strong>Plan: </strong> <?php echo e($plan); ?> <br>
<strong>Amount: </strong> <?php echo e($settings->currency); ?><?php echo e($amount); ?><br>
<strong>Date: </strong> <?php echo e($plandate); ?> <br>

Thanks,<br>
<?php echo e($settings->site_name); ?>.
<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home/remeqsda/online.remedytradescript.online/resources/views/emails/newroi.blade.php ENDPATH**/ ?>