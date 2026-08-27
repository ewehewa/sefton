
<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($foramin  ? 'Admin' : $user->name); ?>

<?php if($foramin): ?>
 This is to inform you of a successfull Deposit of <?php echo e($settings->currency.$deposit->amount); ?> from <?php echo e($user->name); ?>. <?php echo e($deposit->status == "Processed" ? '' : ' Please login to process it.'); ?>

<?php else: ?>
<?php if($deposit->status == 'Processed'): ?>
This is to inform you that your deposit of <?php echo e($settings->currency.$deposit->amount); ?> have been received and confirmed. Your account balance have been credited with the specified amount.
<?php else: ?>
<p>Your Crypto Asset Deposit has been recorded successfully and currently undergoing confirmation. You will receive an automatic notification once your transaction was confirmed on the blockchain Network. This usually take upto 15 minutes.
  </p>
                        
<p>Amount: <?php echo e($settings->currency.$deposit->amount); ?></p> 
                         
                          
<p>Deposited on: <?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?></p>                        
                         
                         
<?php endif; ?>
<?php endif; ?>
Thanks,
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home/u215313542/domains/remedycodes.site/public_html/resources/views/emails/success-deposit.blade.php ENDPATH**/ ?>