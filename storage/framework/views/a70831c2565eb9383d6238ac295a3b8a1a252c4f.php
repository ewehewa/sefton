
<?php $__env->startSection('title', 'Company Grant Application'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-6 mx-auto">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-2">
                <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-500">
                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                </a>
                <h1 class="text-2xl font-semibold text-gray-900">Company Grant Application</h1>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <div class="bg-gradient-to-r from-secondary-50 to-white border-b border-gray-100 px-6 py-4">
                <h2 class="text-lg font-medium text-gray-900 flex items-center">
                    <i data-lucide="building" class="h-5 w-5 mr-2 text-secondary-500"></i>
                    Apply as Company
                </h2>
            </div>
            
            <div class="p-6">
                <form action="<?php echo e(route('grant.storeCompany')); ?>" method="POST">
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
                    
                    <div class="text-gray-700 mb-6">
                        <p>Please provide the following information about your organization:</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="legal_name" class="block text-sm font-medium text-gray-700">Legal Name of Organization <span class="text-red-500">*</span></label>
                            <input type="text" name="legal_name" id="legal_name" value="<?php echo e(old('legal_name', $application ? $application->legal_name : '')); ?>" required
                                   class="mt-1 focus:ring-primary-500 px-2 py-3 border focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label for="tax_id" class="block text-sm font-medium text-gray-700">Tax ID / EIN <span class="text-red-500">*</span></label>
                            <input type="text" name="tax_id" id="tax_id" value="<?php echo e(old('tax_id', $application ? $application->tax_id : '')); ?>" required
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-1 text-xs text-gray-500">Format: XX-XXXXXXX</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="organization_type" class="block text-sm font-medium text-gray-700">Organization Type <span class="text-red-500">*</span></label>
                            <select name="organization_type" id="organization_type" required
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <option value="" disabled <?php echo e(old('organization_type', $application ? $application->organization_type : '') ? '' : 'selected'); ?>>Select an option</option>
                                <option value="nonprofit" <?php echo e(old('organization_type', $application ? $application->organization_type : '') == 'nonprofit' ? 'selected' : ''); ?>>Nonprofit Organization</option>
                                <option value="for-profit" <?php echo e(old('organization_type', $application ? $application->organization_type : '') == 'for-profit' ? 'selected' : ''); ?>>For-Profit Business</option>
                                <option value="government" <?php echo e(old('organization_type', $application ? $application->organization_type : '') == 'government' ? 'selected' : ''); ?>>Government Entity</option>
                                <option value="educational" <?php echo e(old('organization_type', $application ? $application->organization_type : '') == 'educational' ? 'selected' : ''); ?>>Educational Institution</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="founding_year" class="block text-sm font-medium text-gray-700">Founding Year <span class="text-red-500">*</span></label>
                            <input type="number" name="founding_year" id="founding_year" min="1900" max="<?php echo e(date('Y')); ?>" value="<?php echo e(old('founding_year', $application ? $application->founding_year : '')); ?>" required
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="mailing_address" class="block text-sm font-medium text-gray-700">Full Mailing Address <span class="text-red-500">*</span></label>
                        <textarea id="mailing_address" name="mailing_address" rows="3" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full px-2 py-3 border shadow-sm sm:text-sm border-gray-300 rounded-md"><?php echo e(old('mailing_address')); ?></textarea>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Contact Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone_number" id="phone_number" value="<?php echo e(old('phone_number', $application ? $application->phone_number : '')); ?>" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 block px-2 py-3 border w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="(555) 123-4567">
                            <?php $__errorArgs = ['phone_number'];
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
                        
                        <div>
                            <label for="contact_person" class="block text-sm font-medium text-gray-700">Contact Person <span class="text-red-500">*</span></label>
                            <input type="text" name="contact_person" id="contact_person" value="<?php echo e(old('contact_person', $application ? $application->contact_person : '')); ?>" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 block px-2 py-3 border w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <?php $__errorArgs = ['contact_person'];
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
                    
                    <div class="mb-6">
                        <label for="mission_statement" class="block text-sm font-medium text-gray-700">Mission Statement <span class="text-red-500">*</span></label>
                        <textarea id="mission_statement" name="mission_statement" rows="3" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"><?php echo e(old('mission_statement', $application ? $application->mission_statement : '')); ?></textarea>
                        <p class="mt-1 text-xs text-gray-500">Describe your organization's core mission and purpose</p>
                    </div>
                    
                    <div class="mb-6">
                        <label for="incorporation_date" class="block text-sm font-medium text-gray-700">Date of Incorporation <span class="text-red-500">*</span></label>
                        <input type="date" name="incorporation_date" id="incorporation_date" value="<?php echo e(old('incorporation_date')); ?>" required
                               class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    
                    <div class="mb-6">
                        <label for="project_title" class="block text-sm font-medium text-gray-700">Project Title <span class="text-red-500">*</span></label>
                        <input type="text" name="project_title" id="project_title" value="<?php echo e(old('project_title', $application ? $application->project_title : '')); ?>" required
                              class="mt-1 focus:ring-primary-500 focus:border-primary-500 px-2 py-3 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <p class="mt-1 text-xs text-gray-500">A concise title for your grant-funded project</p>
                    </div>
                    
                    <div class="mb-6">
                        <label for="project_description" class="block text-sm font-medium text-gray-700">Project Description <span class="text-red-500">*</span></label>
                        <textarea id="project_description" name="project_description" rows="4" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full px-2 py-3 border shadow-sm sm:text-sm border-gray-300 rounded-md"><?php echo e(old('project_description', $application ? $application->project_description : '')); ?></textarea>
                        <p class="mt-1 text-xs text-gray-500">Detailed description of the project for which funding is requested</p>
                    </div>
                    
                    <div class="mb-6">
                        <label for="expected_outcomes" class="block text-sm font-medium text-gray-700">Expected Outcomes <span class="text-red-500">*</span></label>
                        <textarea id="expected_outcomes" name="expected_outcomes" rows="3" required
                                  class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full px-2 py-3 border shadow-sm sm:text-sm border-gray-300 rounded-md"><?php echo e(old('expected_outcomes', $application ? $application->expected_outcomes : '')); ?></textarea>
                        <p class="mt-1 text-xs text-gray-500">Describe the specific goals and measurable outcomes you expect to achieve</p>
                    </div>
                    
                    <div class="mb-6">
                        <label for="requested_amount" class="block text-sm font-medium text-gray-700">Requested Amount <span class="text-red-500">*</span></label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm"><?php echo e(Auth::user()->s_curr); ?></span>
                            </div>
                            <input type="number" name="requested_amount" id="requested_amount" min="1" step="0.01" 
                                   value="<?php echo e(old('requested_amount', $application ? $application->requested_amount : '5000')); ?>"
                                   class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-12 px-2 py-3 border sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Enter the amount you would like to request for your project</p>
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
                        <a href="<?php echo e(route('grant.index')); ?>" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
                            <i data-lucide="arrow-left" class="h-4 w-4 mr-2"></i>
                            Back
                        </a>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary-600 hover:bg-secondary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
                            Submit Application
                            <i data-lucide="send" class="h-4 w-4 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/company.blade.php ENDPATH**/ ?>