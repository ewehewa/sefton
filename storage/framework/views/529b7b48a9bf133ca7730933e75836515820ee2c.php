
<?php $__env->startSection('title', 'Processing Grant Application'); ?>

<?php $__env->startSection('content'); ?>
<div class="container px-4 py-6 mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">Processing Your Application</h1>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
        <div class="p-8 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="mb-8">
                    <div class="h-16 w-16 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="calculator" class="h-8 w-8 text-primary-500"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Application Processing</h2>
                    <p class="text-gray-600">
                        We're calculating your grant eligibility and pre-approved amount. 
                        Please wait while our system processes your information.
                    </p>
                </div>
                
                <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 shadow-sm max-w-xl mx-auto">
                    <!-- Progress Bar -->
                    <div class="h-1.5 bg-gray-200 rounded-full mb-8 overflow-hidden">
                        <div class="h-full bg-primary-500 rounded-full w-0 transition-all duration-500" id="progressBar"></div>
                    </div>
                    
                    <!-- Processing Steps -->
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between items-center px-1 opacity-0 transform translate-y-4 transition-all duration-300" id="item1">
                            <div class="flex items-center">
                                <i data-lucide="user-check" class="h-5 w-5 text-gray-500 mr-3"></i>
                                <span class="text-gray-700">Verifying account information</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="h-6 w-6 flex items-center justify-center rounded-full bg-green-100">
                                    <i data-lucide="check" class="h-4 w-4 text-green-600"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center px-1 opacity-0 transform translate-y-4 transition-all duration-300" id="item2">
                            <div class="flex items-center">
                                <i data-lucide="clipboard-check" class="h-5 w-5 text-gray-500 mr-3"></i>
                                <span class="text-gray-700">Analyzing application details</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="h-6 w-6 flex items-center justify-center rounded-full bg-green-100">
                                    <i data-lucide="check" class="h-4 w-4 text-green-600"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center px-1 opacity-0 transform translate-y-4 transition-all duration-300" id="item3">
                            <div class="flex items-center">
                                <i data-lucide="check-square" class="h-5 w-5 text-gray-500 mr-3"></i>
                                <span class="text-gray-700">Reviewing eligibility criteria</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="h-6 w-6 flex items-center justify-center rounded-full bg-green-100">
                                    <i data-lucide="check" class="h-4 w-4 text-green-600"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center px-1 opacity-0 transform translate-y-4 transition-all duration-300" id="item4">
                            <div class="flex items-center">
                                <i data-lucide="calculator" class="h-5 w-5 text-gray-500 mr-3"></i>
                                <span class="text-gray-700">Calculating pre-approved amount</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="h-6 w-6 flex items-center justify-center rounded-full bg-green-100">
                                    <i data-lucide="check" class="h-4 w-4 text-green-600"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center px-1 opacity-0 transform translate-y-4 transition-all duration-300" id="item5">
                            <div class="flex items-center">
                                <i data-lucide="check-circle" class="h-5 w-5 text-gray-500 mr-3"></i>
                                <span class="text-gray-700">Finalizing results</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="h-6 w-6 flex items-center justify-center rounded-full bg-green-100">
                                    <i data-lucide="check" class="h-4 w-4 text-green-600"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Result Amount -->
                    <div class="opacity-0 transform scale-95 transition-all duration-500 mb-6" id="resultAmount">
                        <div class="text-center">
                            <p class="text-sm text-gray-500 mb-1">You Requested</p>
                            <div class="text-base font-medium text-gray-600 mb-2">
                                <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($latest_application->requested_amount, 2, '.', ',')); ?>

                            </div>
                            
                            <p class="text-sm text-gray-500 mb-1">Pre-Approved Amount</p>
                            <div class="text-4xl font-bold text-green-600">
                                <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($grant_limit, 2, '.', ',')); ?>

                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Button -->
                    <div class="text-center opacity-0 transition-opacity duration-500" id="viewResultsBtn">
                        <a href="<?php echo e(route('grant.results')); ?>" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            View Application Results
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const progressBar = document.getElementById('progressBar');
        const resultAmount = document.getElementById('resultAmount');
        const viewResultsBtn = document.getElementById('viewResultsBtn');
        const items = [
            document.getElementById('item1'),
            document.getElementById('item2'),
            document.getElementById('item3'),
            document.getElementById('item4'),
            document.getElementById('item5')
        ];
        
        // Animation timeline
        setTimeout(() => {
            progressBar.style.width = '20%';
            items[0].classList.add('opacity-100');
            items[0].classList.remove('opacity-0', 'translate-y-4');
        }, 500);
        
        setTimeout(() => {
            progressBar.style.width = '40%';
            items[1].classList.add('opacity-100');
            items[1].classList.remove('opacity-0', 'translate-y-4');
        }, 2000);
        
        setTimeout(() => {
            progressBar.style.width = '60%';
            items[2].classList.add('opacity-100');
            items[2].classList.remove('opacity-0', 'translate-y-4');
        }, 3500);
        
        setTimeout(() => {
            progressBar.style.width = '80%';
            items[3].classList.add('opacity-100');
            items[3].classList.remove('opacity-0', 'translate-y-4');
        }, 5000);
        
        setTimeout(() => {
            progressBar.style.width = '100%';
            items[4].classList.add('opacity-100');
            items[4].classList.remove('opacity-0', 'translate-y-4');
        }, 6500);
        
        setTimeout(() => {
            resultAmount.classList.add('opacity-100');
            resultAmount.classList.remove('opacity-0', 'scale-95');
        }, 7500);
        
        setTimeout(() => {
            viewResultsBtn.classList.add('opacity-100');
            viewResultsBtn.classList.remove('opacity-0');
        }, 8500);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/processing.blade.php ENDPATH**/ ?>