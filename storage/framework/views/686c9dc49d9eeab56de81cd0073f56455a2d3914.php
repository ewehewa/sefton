

<?php $__env->startSection('title', 'Fund Transfer'); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--begin::Aside-->
      
      </div>
      <div class="d-flex flex-column flex-lg-row-fluid py-10">
        
    <div class="d-flex flex-center flex-column flex-column-fluid">
      
        <div class="w-lg-500px w-100 p-10 p-lg-15 mx-auto">
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
          
            <form class="form w-100" action="<?php echo e(route('codecomfirm')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="text-center mb-10">
                    <h1 class=" mb-3 text-danger">Before you proceed!</h1>
                    <div class="text-gray-600 fw-bold fs-4"> <?php echo e($settings->code1message); ?></div>
                
                </div>
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bolder text-dark"><?php echo e($settings->code1); ?> code</label>
                    <input class="form-control form-control-lg form-control-solid" name="code" type="text" placeholder="Enter <?php echo e($settings->code1); ?> code" >
                                    </div>
                                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
                        <span class="indicator-label"> Comfirm <?php echo e($settings->code1); ?> code</span>
                    </button>
                </button>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-light-primary btn-lg btn-block fw-bolder my-2">
                    <i class="fal fa-arrow-left"></i> Back to dashboard
                </a>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
    
  </div></div>
    </div>
    
      
     
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedycodes/public_html/fin.remedycodes.online/resources/views/user/code1.blade.php ENDPATH**/ ?>