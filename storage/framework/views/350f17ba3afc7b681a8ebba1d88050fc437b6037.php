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
    <div class="main-panel">
        <div class="content ">
            <div class="page-inner">
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
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3 card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        
                                          <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e($user->profile_photo_path); ?>" width="60" height="60" style='border-radius: 50%;'><h1 class=" pl-2 d-inline text-primary"><?php echo e($user->name); ?> <?php echo e($user->middlename); ?> <?php echo e($user->lastname); ?></h1><span></span>
                                        <div class="d-inline">
                                            <div class="float-right btn-group">
                                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('manageusers')); ?>"> <i
                                                        class="fa fa-arrow-left"></i> back</a> &nbsp;
                                                <button type="button" class="btn btn-secondary dropdown-toggle btn-sm"
                                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-lg-right">
                                                    
                                                    
                                                        
                                                    <?php if($user->email_verified_at): ?>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(url('admin/dashboard/email-verify')); ?>/<?php echo e($user->id); ?>"
                                                            class="dropdown-item">Verify Email</a>
                                                    <?php endif; ?>
                                                    
                                                
                                                    <a href="#" data-toggle="modal" data-target="#topupModal"
                                                        class="dropdown-item">Fund/Debit Account</a>
                                                    <a href="#" data-toggle="modal" data-target="#toggle2faModal"
                                                        class="dropdown-item">
                                                        <?php if($user->two_factor_enabled): ?>
                                                            <i class="fa fa-shield text-success"></i> Manage Two-Factor Auth
                                                        <?php else: ?>
                                                            <i class="fa fa-shield text-muted"></i> Manage Two-Factor Auth
                                                        <?php endif; ?>
                                                    </a>
                                                        <a href="#" data-toggle="modal" data-target="#TradingModal"
                                                        class="dropdown-item">Change Profile Pics</a>
                                                        <a href="#" data-toggle="modal" data-target="#resetpswdModal"
                                                        class="dropdown-item">Reset Password</a>
                                                        <?php if($user->account_status != 'active'): ?> 
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(url('admin/dashboard/undormant')); ?>/<?php echo e($user->id); ?>">Turn Off Domarnt Account</a>
                                                    <?php else: ?>
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(url('admin/dashboard/dormant')); ?>/<?php echo e($user->id); ?>">Turn On Dormant Account </a>
                                                    <?php endif; ?>
                                                    <a href="#" data-toggle="modal" data-target="#clearacctModal"
                                                        class="dropdown-item">Clear Account</a>

                                                    
                                                    <a href="#" data-toggle="modal" data-target="#edituser"
                                                        class="dropdown-item">Edit</a>
                                                    
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#sendmailtooneuserModal" class="dropdown-item">Send
                                                        Email</a>

                                                    <a href="#" data-toggle="modal" data-target="#switchuserModal"
                                                        class="dropdown-item text-success">Login as <?php echo e($user->name); ?></a>
                                                        <a class="dropdown-item"
                                                        href="<?php echo e(route('loginactivity', $user->id)); ?>">Login Activity</a>
                                                    <?php if($user->status == null || $user->status == 'blocked'): ?>
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(url('admin/dashboard/uunblock')); ?>/<?php echo e($user->id); ?>">Unblock</a>
                                                    <?php else: ?>
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(url('admin/dashboard/uublock')); ?>/<?php echo e($user->id); ?>">Block</a>
                                                    <?php endif; ?>
                                                        <a href="#" data-toggle="modal" data-target="#deleteModal"
                                                        class="dropdown-item text-danger">Delete <?php echo e($user->name); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 mt-4 border rounded row ">
                                    <div class="col-md-3">
                                        <h5 class="text-bold">Fiat Balance</h5>
                                        <p><?php echo e($user->s_curr); ?><?php echo e(number_format($user->account_bal)); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <h5 class="text-bold">Bitcoin Balance</h5>
                                        <p><?php echo e(number_format($user->btc_balance ?? 0, 8)); ?> BTC</p>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Account Limit</h5>
                                        <p><?php echo e($user->s_curr); ?><?php echo e(number_format($user->limit)); ?> </p>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-3">
                                        <h5>Loans</h5>
                                        
                                        <?php if($user->plan != null): ?>
                                            <a class="btn btn-sm btn-primary d-inline"
                                                href="<?php echo e(route('user.plans', $user->id)); ?>">Veiw loans</a>
                                        <?php else: ?>
                                            <p>No Loan</p>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-3">
                                        <h5>KYC</h5>
                                        <?php if($user->account_verify == 'Not Verified' || $user->account_verify == null): ?>
                                            <span class="badge badge-danger">Not Verified Yet</span>
                                        <?php else: ?>
                                            <span class="badge badge-success">Verified</span>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                                <div class="mt-3 row ">
                                    <div class="col-md-12">
                                        <h5>USER INFORMATION</h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Fullname</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->name); ?> <?php echo e($user->middlename); ?> <?php echo e($user->lastname); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Email Address</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->email); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Mobile Number</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->phone); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Currency</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->curr); ?></h5>
                                    </div>
                                </div>

                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Account Number</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->usernumber); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Bitcoin Wallet Address</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->btc_address); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>4 Digit Transaction Pin</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->pin); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>IRS Filing No.</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->irs_filing_id); ?></h5>
                                    </div>
                                </div>

                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5><?php echo e($settings->code1); ?> Code</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->code1); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5><?php echo e($settings->code2); ?> Code</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->code2); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5><?php echo e($settings->code3); ?> Code</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->code3); ?></h5>
                                    </div>
                                </div>

                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5><?php echo e($settings->code4); ?> Code</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->code4); ?></h5>
                                    </div>
                                </div>

                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5><?php echo e($settings->code5); ?> Code</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->code5); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Date of birth</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->dob); ?></h5>
                                    </div>
                                </div>
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Nationality</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e($user->country); ?></h5>
                                    </div>
                                </div>
                                
                                <div class="p-3 border row ">
                                    <div class="col-md-4 border-right">
                                        <h5>Registered</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('admin.Users.users_actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/admin/Users/userdetails.blade.php ENDPATH**/ ?>