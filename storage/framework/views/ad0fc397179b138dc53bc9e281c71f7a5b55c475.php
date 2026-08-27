<?php $__env->startSection('title', 'Deposit Notification'); ?>
<?php $__env->startSection('subtitle', $deposit->status == 'Processed' ? 'Your deposit has been processed' : 'Your deposit is being processed'); ?>
<?php $__env->startSection('company_name', config('app.name')); ?>

<?php $__env->startSection('greeting', 'Hello ' . ($foramin ? 'Admin' : $user->name)); ?>

<?php $__env->startSection('content'); ?>
<?php if($foramin): ?>
    <p>This is to inform you of a successful deposit of <?php echo e($settings->currency . $deposit->amount); ?> from <?php echo e($user->name); ?>. <?php echo e($deposit->status == "Processed" ? '' : ' Please login to process it.'); ?></p>
<?php else: ?>
    <?php if($deposit->status == 'Processed'): ?>
        <p>This is to inform you that your deposit of <?php echo e($settings->currency . $deposit->amount); ?> has been received and confirmed. Your account balance has been credited with the specified amount.</p>
    <?php else: ?>
        <p>Your Crypto Asset Deposit has been recorded successfully and is currently undergoing confirmation. You will receive an automatic notification once your transaction is confirmed on the blockchain network. This usually takes up to 15 minutes.</p>
    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('additional_content'); ?>
<?php if(!$foramin && $deposit->status != 'Processed'): ?>
    <div class="transaction-details">
        <div class="transaction-details-header">Deposit Details</div>
        <div class="transaction-details-body">
            <div class="transaction-details-row">
                <div class="transaction-details-label">Amount:</div>
                <div class="transaction-details-value"><?php echo e($settings->currency . $deposit->amount); ?></div>
            </div>
            <div class="transaction-details-row">
                <div class="transaction-details-label">Date:</div>
                <div class="transaction-details-value"><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?></div>
            </div>
            <div class="transaction-details-row">
                <div class="transaction-details-label">Status:</div>
                <div class="transaction-details-value">Pending Confirmation</div>
            </div>
        </div>
    </div>

    <div class="info-box">
        <p><strong>Note:</strong> Please wait while your transaction is being confirmed on the blockchain. This process is automatic and requires no further action from you.</p>
    </div>
<?php endif; ?>

<?php if(!$foramin && $deposit->status == 'Processed'): ?>
    <div class="success-box">
        <p><strong>Success!</strong> Your deposit has been confirmed and your account has been credited.</p>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('help_text'); ?>
<p>If you have any questions about this transaction, please contact our support team for assistance.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.email-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/emails/success-deposit.blade.php ENDPATH**/ ?>