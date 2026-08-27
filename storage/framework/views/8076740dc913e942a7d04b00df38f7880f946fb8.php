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
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center">Create A New User</h1>
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

                <div class="mb-5 row d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-2 shadow ">
                            <div class="card-body">
                                <div>
                                    	<form method="POST" action="<?php echo e(route('createuser')); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<div class="form-row">
                                                          
                                                        <div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Firstname</h6>
															<input type="text" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="name" required>
														</div>

                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>">Middle Name</h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="middlename"  required>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>">Last Name</h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="lastname"  required>

														<div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Username</h6>
															<input type="text" id="input1" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="username" required>
														</div>
														
														<div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Email</h6>
															<input type="email" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="email" required>
														</div>
                                                        <div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Phone Number</h6>
															<input type="text" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="phone" required>
														</div>
                                                        <div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Date of birth</h6>
															<input type="date" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="dob" required>
														</div>
														
														 <div class="form-group">
                         <h5 class=" "> Address </h5>
                         <input class="form-control  " value="<?php echo e($user->address); ?>" type="text" name="address"
                             required>
                     </div>

                                                        <div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Nationality</h6>
															<select type="text" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="country" required>
                                                                <?php echo $__env->make('auth.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                            </select>
														</div>
                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>">Account Type</h6>
                                                            <select type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="accounttype"  required>
                                                                <option value="">Please select Account Type</option> 
                                                                <option value="Checking Account">Checking Account</option>
                                                                <option value="Savings Account">Saving Account</option>
                                                                <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                                                <option value="Current Account">Current Account</option>
                                                                <option value="Crypto Currency Account">Crypto Currency Account</option>
                                                                <option value="Business Account">Business Account</option>
                                                                <option value="Non Resident Account">Non Resident Account</option>
                                                                <option value="Cooperate Business Account">Cooperate Business Account</option>
                                                                <option value="Investment Account">Investment Account</option>
                                                        </select>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>">Account Number</h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="usernumber" value='<?php echo e($usernumber); ?>'  required>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>"><?php echo e($settings->code1); ?></h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="code1" value='<?php echo e($code1); ?>'  required>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>"><?php echo e($settings->code2); ?></h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="code2" value='<?php echo e($code2); ?>'  required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>"><?php echo e($settings->code3); ?></h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name="code3" value='<?php echo e($code3); ?>'  required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <h6 class="text-<?php echo e($text); ?>">4 Digit Transaction pin</h6>
                                                            <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                                                name='pin' value="<?php echo e($pin); ?>"  required>
                                                        </div>
                                                             <div class="form-group col-md-12">
                                                <h6 class="text-<?php echo e($text); ?>">Upload Profile photo</h6>
                                                <input type="file" class="form-control  text-<?php echo e($text); ?>"
                                                    name="photo"  required>
                                            </div>
														<div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Password</h6>
															<input type="password" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="password" required>
														</div>
														<div class="form-group col-md-12">
															<h6 class="text-<?php echo e($text); ?>">Confirm Password</h6>
															<input type="password" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="password_confirmation" required>
														</div>
													</div>
													<button type="submit" class="px-4 btn btn-primary">Add User</button>
												</form>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home8/globalch/public_html/auth/resources/views/admin/createnewuser.blade.php ENDPATH**/ ?>