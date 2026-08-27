<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
    $bg = 'light';
} else {
    $text = 'light';
    $bg = 'dark';
}
?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel ">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-5">
                    <h1 class="title1 d-inline ">Process <?php echo e($withdrawal->payment_mode); ?> Request</h1>
                    <div class="d-inline">
                        <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('mwithdrawals')); ?>"> <i
                                    class="fa fa-arrow-left"></i> back</a>
                        </div>
                    </div>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-md-4 p-2 shadow">
                        <div class="mb-3">
                            <!-- Common fields for all payment methods -->
                            <div class="mb-3 form-group">
                                <h5 class="">Amount</h5>
                                <input type="text" class="form-control readonly" value="<?php echo e($settings->currency); ?><?php echo e($withdrawal->amount); ?>" readonly>
                            </div>
                            
                            <div class="mb-3 form-group">
                                <h5 class="">Payment Method</h5>
                                <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->payment_mode); ?>" readonly>
                            </div>

                            <div class="mb-3 form-group">
                                <h5 class="">Description</h5>
                                <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->Description ?? 'N/A'); ?>" readonly>
                            </div>
                            
                            <!-- International Wire Transfer Fields -->
                            <?php if($withdrawal->payment_mode == 'International Wire Transfer'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Bank Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->bankname ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Account Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->accountname ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Account Number</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->accountnumber ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Account Type</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->Accounttype ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Bank Address</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->bankaddress ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Country</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->country ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Swift Code</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->swiftcode ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">IBAN</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->iban ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Cryptocurrency Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Cryptocurrency'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Cryptocurrency</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->crypto_currency ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Network</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->crypto_network ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Wallet Address</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wallet_address ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- PayPal Fields -->
                            <?php elseif($withdrawal->payment_mode == 'PayPal'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">PayPal Email</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->paypal_email ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Wise Transfer Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Wise Transfer'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wise_fullname ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Email</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wise_email ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Country</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wise_country ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Skrill Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Skrill'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->skrill_fullname ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Email</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->skrill_email ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Venmo Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Venmo'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Username</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->venmo_username ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Phone Number</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->venmo_phone ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Zelle Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Zelle'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->zelle_name ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Email</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->zelle_email ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Phone Number</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->zelle_phone ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Cash App Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Cash App'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">$<?php echo e($withdrawal->cash_app_tag ?? 'N/A'); ?></h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->cash_app_tag ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->cash_app_fullname ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Revolut Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Revolut'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->revolut_fullname ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Email</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->revolut_email ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Phone Number</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->revolut_phone ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- Alipay Fields -->
                            <?php elseif($withdrawal->payment_mode == 'Alipay'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">Alipay ID</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->alipay_id ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->alipay_fullname ?? 'N/A'); ?>" readonly>
                                </div>
                            
                            <!-- WeChat Pay Fields -->
                            <?php elseif($withdrawal->payment_mode == 'WeChat Pay'): ?>
                                <div class="mb-3 form-group">
                                    <h5 class="">WeChat ID</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wechat_id ?? 'N/A'); ?>" readonly>
                                </div>
                                <div class="mb-3 form-group">
                                    <h5 class="">Full Name</h5>
                                    <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->wechat_name ?? 'N/A'); ?>" readonly>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Transaction ID field -->
                            <div class="mb-3 form-group">
                                <h5 class="">Transaction ID</h5>
                                <input type="text" class="form-control readonly" value="<?php echo e($withdrawal->txn_id ?? 'N/A'); ?>" readonly>
                            </div>
                        </div>

                        <div class="mt-1">
                            <form action="<?php echo e(route('pwithdrawal')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <h6 class="">Action</h6>
                                        <select name="action" id="action" class="mb-2 form-control">
                                            <option value="Paid">Paid</option>
                                            <option value="Reject">Reject</option>
                                            <option value="On-hold">On-hold</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <h6 class="">Date</h6>
                                        <input name="date" type='datetime-local' id="action" class="mb-2 form-control">
                                    </div>
                                </div>
                                <div class="form-row d-none" id="emailcheck">
                                    <div class="col-md-12 form-group">
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="emailsend" id="dontsend" value="false"
                                                    class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Don't Send Email</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="emailsend" id="sendemail" value="true"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Send Email</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row d-none" id="emailtext">
                                    <div class="form-group col-md-12">
                                        <h6 class="">Subject</h6>
                                        <input type="text" name="subject" id="subject" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6 class="">Enter Reasons for rejecting this withdrawal request</h6>
                                        <textarea class="form-control" row="3" placeholder="Type in here" name="reason" id="message"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo e($withdrawal->id); ?>">
                                    <input type="submit" class="px-3 btn btn-primary" value="Process">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#action').change(function() {
                    if ($(this).val() === "Reject") {
                        document.getElementById('emailcheck').classList.remove('d-none');
                    } else {
                        document.getElementById('emailcheck').classList.add('d-none');
                        document.getElementById('emailtext').classList.add('d-none');
                        document.getElementById('dontsend').checked = true;
                        document.getElementById('subject').removeAttribute('required');
                        document.getElementById('message').removeAttribute('required');
                    }
                });

                $('#sendemail').click(function() {
                    document.getElementById('emailtext').classList.remove('d-none');
                    document.getElementById('subject').setAttribute('required', '');
                    document.getElementById('message').setAttribute('required', '');
                });

                $('#dontsend').click(function() {
                    document.getElementById('emailtext').classList.add('d-none');
                    document.getElementById('subject').removeAttribute('required');
                    document.getElementById('message').removeAttribute('required');
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/Withdrawals/pwithrdawal.blade.php ENDPATH**/ ?>