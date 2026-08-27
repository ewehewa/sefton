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
	<div class="card-body text-wrap">
	    
		<div class="btn-wrapper text-center mb-3">
		<div class="symbol symbol-100px symbol-circle me-5 mb-10">
			<div class="symbol-label fs-1 text-dark">
				<i class="fal fa-clipboard-list-check fa-2x"></i>
			</div>
		</div>
	</div>
	
		
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
     
  <div class="container col-lg-8">
		<div class="card mb-10">
		  <div class="card-body">
			<form action="<?php echo e(route('enquiry')); ?>" method="post">
				<div class="fv-row mb-6">
					<label class="form-label fs-6 fw-bolder text-dark">Title</label>
					<input class="form-control form-control-lg form-control-solid" type="text" wire:model="subject" required placeholder="Title of complaint" />
														</div>
			  <div class="fv-row mb-6">
				<label class="form-label fs-6 fw-bolder text-dark">Priority</label>
				<select class="form-select form-select-solid" wire:model="selectPriority" required>
					<option value="low">Low</option>
					<option value="medium">Medium</option>
					<option value="high">High</option>
				</select>
													</div>
								<div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark">Description</label>
									<textarea class="form-control form-control-lg form-control-solid preserveLines" rows="6" type="text" name="message" required placeholder="Whats your complaint?"></textarea>
								</div>

								<input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
								<input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>" />
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
										<span >Submit Ticket</span>
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
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215313542/domains/remedydevcodes.com/public_html/resources/views/user/support.blade.php ENDPATH**/ ?>