
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    
<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
	
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
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-alert','data' => []]); ?>
<?php $component->withName('error-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
		
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
  <div class="container col-lg-8 col-md-8">
    <h2 class="form-header">
        Loan Request Application
    </h2>
		<div class="card mb-10">
		  <div class="card-body">
			<form action="<?php echo e(route('loan')); ?>" method="post">
			    
				<div class="fv-row mb-6">
					<label class="form-label fs-6 fw-bolder text-dark">Loan Amount (<?php echo e($settings->s_currency); ?>)</label>
					<input class="form-control form-control-lg form-control-solid" type="text" name="amount" required placeholder="Amount (<?php echo e($settings->currency); ?>)" />
														</div>
			  <div class="fv-row mb-6">
				<label class="form-label fs-6 fw-bolder text-dark">Credity Facility</label>
				<select class="form-select form-select-solid" name="facility"  required>
					<option selected value="">Select Loan/Credit Facility</option>
                                            <option value="Personal Home Loans">Personal Home Loans</option>
                                            <option value="Joint Mortgage ">Joint Mortgage </option>
                                            <option value="Automobile Loans ">Automobile Loans </option>
                                            <option value="Salary loans">Salary loans</option>
                                            <option value="Secured Overdraft">Secured Overdraft</option>
                                            <option value="Contract Finance">Contract Finance</option>
                                            <option value="Secured Term Loans">Secured Term Loans</option>
                                            <option value="StartUp/Products Financing">StartUp/Products Financing</option>
                                            <option value="Local Purchase Orders Finance">Local Purchase Orders Finance</option>
                                            <option value="Operational Vehicles">Operational Vehicles</option>
                                            <option value="Revenue Loans and Overdraft">Revenue Loans and Overdraft</option>
                                            <option value="Retail TOD">Retail TOD</option>
                                            <option value="Commercial Mortgage">Commercial Mortgage</option>
                                            <option value="Office Equipment">Office Equipment</option>
                                            <option value="Health Finance Product Guideline">Health Finance Product Guideline</option><option value="Health Finance">Health Finance</option>
				</select>
													</div>



                                                    <div class="fv-row mb-6">
                                                        <label class="form-label fs-6 fw-bolder text-dark">Duration (Months)</label>
                                                        <select class="form-select form-select-solid" name="duration"  required>
                                                            <option value="6">6 Months</option>
                                                            <option value="12">12 Months</option>
                                                            <option value="24">2 Years</option>
                                                            <option value="36">3 Years</option>
                                                            <option value="48">4 Years</option>
                                                            <option value="60">5 Years</option>
                                                        </select>
                                                                                            </div>

                                             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

								<div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark">Purpose of Loan</label>
									<textarea class="form-control form-control-lg form-control-solid preserveLines" rows="5" type="text" name="purpose" required placeholder="Purpose for loan"></textarea>
								</div>



                                <div class="fv-row mb-6">
                                    <label class="form-label fs-6 fw-bolder text-dark">Monthly Net Income</label>
                                    <select class="form-select form-select-solid" name="income" required>
                                        <option value="2,000-5,000"><?php echo e($settings->currency); ?>2,000- <?php echo e($settings->currency); ?>5,000</option>
                                        <option value="6,000-10,000"><?php echo e($settings->currency); ?>6,000-<?php echo e($settings->currency); ?>10,000</option>
                                        <option value="11,000-20,000"><?php echo e($settings->currency); ?>11,000-<?php echo e($settings->currency); ?>20,000</option>
                                        <option value="21,000-50,000"><?php echo e($settings->currency); ?>21,000-<?php echo e($settings->currency); ?>50,000</option>
                                        <option value="100,000 and above"><?php echo e($settings->currency); ?>100,000 and above</option>
                                    </select>
                                                                        </div>
								
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
										<span >Send Request </span>
										<!-- <span wire:loading wire:target="addTicket">Processing Request...</span> -->
									</button>
								</div>
			</form>
		  </div>
	  
	 
	  </div>
	</div>
  </div>
</div>
</div>
  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215313542/domains/remedydevcodes.com/public_html/resources/views/user/loan.blade.php ENDPATH**/ ?>