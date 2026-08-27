<?php $__env->startSection('title', isset($subject) ? $subject : 'New Notification'); ?>
<?php $__env->startSection('subtitle', 'Important information about your account'); ?>
<?php $__env->startSection('company_name', config('app.name')); ?>

<?php $__env->startSection('greeting', ($salutaion ? $salutaion : "Hello") . ' ' . $recipient); ?>

<?php $__env->startSection('content'); ?>
<?php if($attachment != null): ?>
    <img src="<?php echo e($message->embed(asset('storage/'. $attachment))); ?>" style="max-width: 100%; height: auto; margin-bottom: 20px;">
<?php endif; ?>

<?php echo $body; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
If you have any questions, please contact our support team.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.email-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/emails/NewNotification.blade.php ENDPATH**/ ?>