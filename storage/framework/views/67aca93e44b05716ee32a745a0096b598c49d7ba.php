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
	<div class="card-body text-wrap">
	
		
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">


  <div class="container col-lg-8">
  <div>
    <h1> Deposit</h1>
  </div>


		<div class="card mb-10">
		  <div class="card-body">
			<form action="<?php echo e(route('newdeposit')); ?>" method="post">
                <?php echo csrf_field(); ?>  
			  <div class="fv-row mb-6">
				<label class="form-label fs-6 fw-bolder text-dark">Deposit From</label>
				<select class="form-select form-select-solid" name="payment_method"  required>
                    <?php $__empty_1 = true; $__currentLoopData = $dmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($method->name); ?>"><?php echo e($method->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <option value="">No Payment Method enabled at the moment, please check
                      back later</option>
                    <?php endif; ?>
				</select>
													</div>
								<div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark">Amount <?php echo e($settings->currency); ?></label>
									<input class="form-control form-control-lg form-control-solid" type="text" name='amount' required placeholder="Enter amount <?php echo e($settings->currency); ?>" />
								</div>

							
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
										<span >Continue</span>
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
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215313542/domains/remedycodes.site/public_html/resources/views/user/deposits.blade.php ENDPATH**/ ?>