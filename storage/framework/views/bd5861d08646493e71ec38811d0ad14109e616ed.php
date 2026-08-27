

<?php $__env->startSection('title', 'Fund Transfer'); ?>
<?php $__env->startSection('content'); ?>

<div class="container py-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Card Header -->
        <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-5">
            <div class="flex items-center justify-center">
                <div class="bg-white/20 backdrop-blur-sm p-3 rounded-full">
                    <i data-lucide="alert-triangle" class="h-10 w-10 text-white"></i>
                </div>
            </div>
            <h1 class="text-white text-center font-bold text-2xl mt-4">Before You Proceed!</h1>
            <p class="text-white/80 text-center mt-2">Additional verification is required</p>
        </div>
        
        <!-- Card Content -->
        <div class="p-6 sm:p-8">
            <!-- Alerts -->
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
            
            <!-- Main Content -->
            <div class="text-center pt-4">
                <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-red-50 mb-6">
                    <i data-lucide="shield-alert" class="h-12 w-12 text-red-600"></i>
                </div>
                
                <div class="text-gray-700 mb-8 max-w-lg mx-auto">
                    <p class="text-lg"><?php echo e($settings->code2message); ?></p>
                </div>
                
                <form action="<?php echo e(route('codecomfirm')); ?>" method="post" class="max-w-md mx-auto">
                    <?php echo csrf_field(); ?>
                    <div class="mb-6">
                        <label for="code2" class="block text-sm font-medium text-gray-700 mb-2"><?php echo e($settings->code2); ?> Code</label>
                        <input 
                            type="text" 
                            name="code2" 
                            id="code2" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Enter <?php echo e($settings->code2); ?> code"
                            required
                        >
                    </div>
                    
                    <div class="flex flex-col space-y-3">
                        <button 
                            type="submit" 
                            class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                        >
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2"></i>
                            Confirm <?php echo e($settings->code2); ?> Code
                        </button>
                        
                        <a 
                            href="<?php echo e(route('dashboard')); ?>" 
                            class="w-full inline-flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                        >
                            <i data-lucide="arrow-left" class="h-5 w-5 mr-2 text-gray-400"></i>
                            Back to Dashboard
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/globalch/public_html/resources/views/user/code2.blade.php ENDPATH**/ ?>