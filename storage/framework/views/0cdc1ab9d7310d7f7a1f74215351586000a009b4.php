

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
        
        <!-- Processing Modal (Hidden by default) -->
        <div id="processingModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-70"></div>
                
                <!-- Modal panel -->
                <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white rounded-2xl shadow-xl sm:align-middle sm:max-w-lg">
                    <!-- Processing animation and content -->
                    <div class="text-center py-6">
                        <!-- Animated verification icon with pulse effect -->
                        <div class="relative mx-auto w-24 h-24 mb-8">
                            <div class="absolute inset-0 bg-primary-100 rounded-full animate-pulse"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i data-lucide="shield-check" class="h-12 w-12 text-primary-600"></i>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-2" id="processingMessage">Verifying code...</h3>
                        <p class="text-gray-500 mb-6">Please do not close this window</p>
                        
                        <!-- Progress bar with percentage -->
                        <div class="mb-6">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div id="progressBar" class="bg-primary-600 h-2.5 rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
                            </div>
                            <p class="text-xs font-medium text-gray-500 mt-2"><span id="progressPercentage">0</span>% Complete</p>
                        </div>
                        
                        <!-- Security message -->
                        <div class="flex items-center justify-center text-sm text-gray-500">
                            <i data-lucide="shield" class="h-4 w-4 mr-2 text-primary-500"></i>
                            <span>Secured by bank-level encryption</span>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p class="text-lg"><?php echo e($settings->code1message); ?></p>
                </div>
                
                <form action="<?php echo e(route('codecomfirm')); ?>" method="POST" class="max-w-md mx-auto" id="codeForm">
                    <?php echo csrf_field(); ?>
                    <div class="mb-6">
                        <label for="code1" class="block text-sm font-medium text-gray-700 mb-2"><?php echo e($settings->code1); ?> Code</label>
                        <input 
                            type="text" 
                            name="code1" 
                            id="code1" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Enter <?php echo e($settings->code1); ?> code"
                            required
                        >
                    </div>
                    
                    <div class="flex flex-col space-y-3">
                        <button 
                            type="button" 
                            id="confirmCodeBtn"
                            class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                        >
                            <i data-lucide="check-circle" class="h-5 w-5 mr-2"></i>
                            Confirm <?php echo e($settings->code1); ?> Code
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Get DOM elements
        const confirmBtn = document.getElementById('confirmCodeBtn');
        const codeForm = document.getElementById('codeForm');
        const processingModal = document.getElementById('processingModal');
        const progressBar = document.getElementById('progressBar');
        const processingMessage = document.getElementById('processingMessage');
        
        // Processing messages for different stages
        const processingMessages = [
            'Verifying code...',
            'Authenticating...',
            'Validating security token...',
            'Checking authorization...',
            'Completing verification...'
        ];
        
        // Add click event listener to confirm button
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Form validation
                const codeInput = document.querySelector('#code1');
                if (!codeInput.value.trim()) {
                    alert('Please enter the verification code');
                    return;
                }
                
                // Show processing modal
                processingModal.classList.remove('hidden');
                
                // Reset progress
                let progress = 0;
                let currentStage = 0;
                progressBar.style.width = '0%';
                processingMessage.textContent = processingMessages[0];
                
                // Simulate processing with progress updates
                const totalDuration = 5000; // 5 seconds minimum
                const interval = 50; // Update every 50ms for smooth animation
                const steps = totalDuration / interval;
                const progressIncrement = 100 / steps;
                
                const progressInterval = setInterval(function() {
                    progress += progressIncrement;
                    progressBar.style.width = progress + '%';
                    document.getElementById('progressPercentage').textContent = Math.min(Math.round(progress), 100);
                    
                    // Update message at certain progress points
                    if (progress >= 20 && currentStage < 1) {
                        currentStage = 1;
                        processingMessage.textContent = processingMessages[1];
                    } else if (progress >= 40 && currentStage < 2) {
                        currentStage = 2;
                        processingMessage.textContent = processingMessages[2];
                    } else if (progress >= 60 && currentStage < 3) {
                        currentStage = 3;
                        processingMessage.textContent = processingMessages[3];
                    } else if (progress >= 80 && currentStage < 4) {
                        currentStage = 4;
                        processingMessage.textContent = processingMessages[4];
                    }
                    
                    // When progress is complete
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                        // Submit the form after animation completes
                        setTimeout(function() {
                            // Ensure form is submitted as POST
                            codeForm.method = 'post';
                            codeForm.submit();
                        }, 200);
                    }
                }, interval);
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/code1.blade.php ENDPATH**/ ?>