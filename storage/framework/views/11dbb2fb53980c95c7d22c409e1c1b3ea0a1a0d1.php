
<?php $__env->startSection('title', 'Individual Grant Application'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-6 mx-auto">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-2">
                <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-500">
                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                </a>
                <h1 class="text-2xl font-semibold text-gray-900">Individual Grant Application</h1>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <div class="bg-gradient-to-r from-primary-50 to-white border-b border-gray-100 px-6 py-4">
                <h2 class="text-lg font-medium text-gray-900 flex items-center">
                    <i data-lucide="user" class="h-5 w-5 mr-2 text-primary-500"></i>
                    Apply as Individual
                </h2>
            </div>
            
            <div class="p-6">
                <form action="<?php echo e(route('grant.storeIndividual')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <?php if($errors->any()): ?>
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-md">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i data-lucide="alert-circle" class="h-5 w-5 text-red-500"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">Please correct the following errors:</h3>
                                    <div class="mt-2 text-sm text-red-700">
                                        <ul class="list-disc pl-5 space-y-1">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="space-y-6 mb-8">
                        <div>
                            <label for="requested_amount" class="block text-sm font-medium text-gray-700">Requested Amount <span class="text-red-500">*</span></label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm"><?php echo e(Auth::user()->s_curr); ?></span>
                                </div>
                                <input type="number" name="requested_amount" id="requested_amount" min="1" value="<?php echo e(old('requested_amount', $application ? $application->requested_amount : 5000)); ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 px-2 py-3 pl-12 border block w-full sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Enter the amount you would like to request for your grant</p>
                            <?php $__errorArgs = ['requested_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="text-gray-700 mb-6">
                        <p>Please select all funding purposes that apply to your application:</p>
                    </div>
                    
                    <div class="space-y-6 mb-8">
                        <div class="bg-white border border-gray-200 rounded-lg p-4 transition-all hover:shadow-sm">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="program_funding" name="program_funding" type="checkbox" value="1" <?php echo e(old('program_funding') ? 'checked' : ''); ?>

                                           class="h-5 w-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                </div>
                                <div class="ml-3">
                                    <label for="program_funding" class="text-base font-medium text-gray-900">Program Funding</label>
                                    <p class="text-sm text-gray-500 mt-1">
                                        Support for developing or expanding educational, cultural, or social programs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-4 transition-all hover:shadow-sm">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="equipment_funding" name="equipment_funding" type="checkbox" value="1" <?php echo e(old('equipment_funding') ? 'checked' : ''); ?>

                                           class="h-5 w-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                </div>
                                <div class="ml-3">
                                    <label for="equipment_funding" class="text-base font-medium text-gray-900">Equipment Funding</label>
                                    <p class="text-sm text-gray-500 mt-1">
                                        Support for purchasing necessary equipment or technology.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-4 transition-all hover:shadow-sm">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="research_funding" name="research_funding" type="checkbox" value="1" <?php echo e(old('research_funding') ? 'checked' : ''); ?>

                                           class="h-5 w-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                </div>
                                <div class="ml-3">
                                    <label for="research_funding" class="text-base font-medium text-gray-900">Research Funding</label>
                                    <p class="text-sm text-gray-500 mt-1">
                                        Support for conducting research or studies in your field.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-4 transition-all hover:shadow-sm">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="community_outreach" name="community_outreach" type="checkbox" value="1" <?php echo e(old('community_outreach') ? 'checked' : ''); ?>

                                           class="h-5 w-5 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                </div>
                                <div class="ml-3">
                                    <label for="community_outreach" class="text-base font-medium text-gray-900">Community Outreach</label>
                                    <p class="text-sm text-gray-500 mt-1">
                                        Support for activities that benefit local communities or underserved populations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-lg p-5 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i data-lucide="info" class="h-5 w-5 text-blue-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-1">Important Information</h4>
                                <p class="text-sm text-gray-600">
                                    By submitting this application, you acknowledge that the final approved amount will be determined during our review process based on your eligibility and requested amount. You'll receive notification once your application has been processed.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end space-x-4">
                        <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i data-lucide="arrow-left" class="h-4 w-4 mr-2"></i>
                            Back
                        </a>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Submit Application
                            <i data-lucide="send" class="h-4 w-4 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/individual.blade.php ENDPATH**/ ?>