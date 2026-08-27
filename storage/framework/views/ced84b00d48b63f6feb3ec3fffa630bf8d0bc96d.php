
<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($foramin  ? 'Admin' : $user->name); ?>

<?php if($foramin): ?>
This is to inform you that <?php echo e($user->name); ?> have made a transfer request of <?php echo e($settings->currency.$withdrawal->amount); ?> to <?php echo e($withdrawal->accountname); ?>, kindly login to your bank website  to review and take neccesary action.
<?php else: ?>
<?php if($withdrawal->status == 'Processed'): ?>
This is to inform you that your transfer request of <?php echo e($settings->currency.$withdrawal->amount); ?> to <?php echo e($withdrawal->accountname); ?>, <?php echo e($withdrawal->bankname); ?> has been approved.
<?php else: ?>
 Your transfer request of <?php echo e($settings->currency.$withdrawal->amount); ?> to <?php echo e($withdrawal->accountname); ?>, <?php echo e($withdrawal->bankname); ?> has been confirmed and beneficiary is expected to be credited within <?php if($withdrawal->payment_mode =='International Wire Transfer'): ?>
      72hours.
      <?php else: ?>
      an hour
     <?php endif; ?>
      

<p><b>Details of the transaction are shown below;</b></p>
             <b>Account Number: <?php echo e($withdrawal->accountnumber); ?></b><br>
            <b>Account Name:<?php echo e($withdrawal->accountname); ?> </b><br>
             <b>Description: <?php echo e($withdrawal->Description); ?></b><br>
             <b>Total Amount: <?php echo e($settings->currency.$withdrawal->amount); ?></b><br>
             <b>Date: <?php echo e(\Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString()); ?></b><br>
             <b>Available Balance: <?php echo e($settings->currency.$withdrawal->bal); ?></b><br>
        
<?php endif; ?>    
<?php endif; ?>
Thanks,
<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home8/internat/public_html/resources/views/emails/withdrawal-status.blade.php ENDPATH**/ ?>