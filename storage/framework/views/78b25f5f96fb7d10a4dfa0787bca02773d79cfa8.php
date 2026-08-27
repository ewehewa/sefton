
<?php $__env->startSection('title', 'View Grant Application'); ?>

<?php $__env->startSection('content'); ?>
<div class="container px-4 py-6 mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Application #<?php echo e($application->id); ?></h1>
            <p class="text-sm text-gray-500 mt-1">Submitted on <?php echo e($application->created_at->format('F d, Y \a\t h:ia')); ?></p>
        </div>
        <div class="flex space-x-3">
            <a href="<?php echo e(route('grant.myApplications')); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                <i data-lucide="arrow-left" class="mr-2 h-4 w-4"></i>
                Back to Applications
            </a>
            <?php if($application->status == 'pending' || $application->status == 'processing'): ?>
                <a href="<?php echo e(route('grant.edit', $application->id)); ?>" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <i data-lucide="edit" class="mr-2 h-4 w-4"></i>
                    Edit Application
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
        <div class="bg-gradient-to-r from-primary-50 to-white border-b border-gray-100 px-6 py-4 flex justify-between items-center">
            <h2 class="text-lg font-medium text-gray-900">Application Details</h2>
            <div>
                <?php if($application->status == 'disbursed'): ?>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <span class="h-2 w-2 mr-1.5 rounded-full bg-green-400"></span>
                        Funds Disbursed
                    </span>
                <?php elseif($application->status == 'approved'): ?>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <span class="h-2 w-2 mr-1.5 rounded-full bg-green-400"></span>
                        Approved
                    </span>
                <?php elseif($application->status == 'processing'): ?>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                        <span class="h-2 w-2 mr-1.5 rounded-full bg-yellow-400"></span>
                        Processing
                    </span>
                <?php elseif($application->status == 'pending'): ?>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                        <span class="h-2 w-2 mr-1.5 rounded-full bg-blue-400"></span>
                        Pending
                    </span>
                <?php elseif($application->status == 'rejected'): ?>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <span class="h-2 w-2 mr-1.5 rounded-full bg-red-400"></span>
                        Not Approved
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-base font-medium text-gray-900 mb-3">Basic Information</h3>
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Application Type</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e(ucfirst($application->application_type)); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Amount Requested</div>
                            <div class="mt-1 text-sm font-medium text-gray-900"><?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($application->requested_amount, 2, '.', ',')); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Reference Number</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e($application->reference_number); ?></div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-base font-medium text-gray-900 mb-3">Applicant Information</h3>
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Name</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e(Auth::user()->name); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Email</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e(Auth::user()->email); ?></div>
                        </div>
                        <?php if($application->type == 'individual'): ?>
                            <div>
                                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</div>
                                <div class="mt-1 text-sm text-gray-900"><?php echo e($application->phone_number); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <?php if($application->type == 'individual'): ?>
                <div class="mt-8">
                    <h3 class="text-base font-medium text-gray-900 mb-3">Funding Purposes</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <?php if($application->program_funding): ?>
                                <li class="flex items-center text-sm text-gray-800">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-green-500 mr-2"></i>
                                    Program Funding
                                </li>
                            <?php endif; ?>
                            <?php if($application->research_funding): ?>
                                <li class="flex items-center text-sm text-gray-800">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-green-500 mr-2"></i>
                                    Research & Development
                                </li>
                            <?php endif; ?>
                            <?php if($application->operations_funding): ?>
                                <li class="flex items-center text-sm text-gray-800">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-green-500 mr-2"></i>
                                    Operational Expenses
                                </li>
                            <?php endif; ?>
                            <?php if($application->capacity_funding): ?>
                                <li class="flex items-center text-sm text-gray-800">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-green-500 mr-2"></i>
                                    Capacity Building
                                </li>
                            <?php endif; ?>
                            <?php if($application->other_funding): ?>
                                <li class="flex items-center text-sm text-gray-800">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-green-500 mr-2"></i>
                                    Other Purposes
                                </li>
                            <?php endif; ?>
                        </ul>
                        
                        <?php if($application->funding_details): ?>
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Additional Details</div>
                                <p class="text-sm text-gray-800"><?php echo e($application->funding_details); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if($application->type == 'company'): ?>
                <div class="mt-8">
                    <h3 class="text-base font-medium text-gray-900 mb-3">Organization Information</h3>
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Legal Name</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e($application->legal_name); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Tax ID / EIN</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e($application->tax_id); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Organization Type</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e(ucfirst($application->organization_type)); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Founding Year</div>
                            <div class="mt-1 text-sm text-gray-900"><?php echo e($application->founding_year); ?></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Mission Statement</div>
                            <div class="mt-1 text-sm text-gray-800"><?php echo e($application->mission_statement); ?></div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <h3 class="text-base font-medium text-gray-900 mb-3">Project Information</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="space-y-3">
                            <div>
                                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Project Title</div>
                                <div class="mt-1 text-sm text-gray-900"><?php echo e($application->project_title); ?></div>
                            </div>
                            <div>
                                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Project Description</div>
                                <div class="mt-1 text-sm text-gray-800"><?php echo e($application->project_description); ?></div>
                            </div>
                            <div>
                                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Expected Outcomes</div>
                                <div class="mt-1 text-sm text-gray-800"><?php echo e($application->expected_outcomes); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="mt-8">
                <h3 class="text-base font-medium text-gray-900 mb-3">Application Timeline</h3>
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center">
                                    <i data-lucide="file-plus" class="h-4 w-4 text-primary-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">Application Submitted</h4>
                                <p class="text-xs text-gray-500"><?php echo e($application->created_at->format('F d, Y \a\t h:ia')); ?></p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i data-lucide="search" class="h-4 w-4 text-blue-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">Review Started</h4>
                                <p class="text-xs text-gray-500"><?php echo e($application->updated_at->format('F d, Y \a\t h:ia')); ?></p>
                            </div>
                        </div>
                        
                        <?php if($application->status != 'pending' && $application->status != 'processing'): ?>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full 
                                        <?php echo e($application->status == 'approved' || $application->status == 'disbursed' ? 'bg-green-100' : 'bg-red-100'); ?> 
                                        flex items-center justify-center">
                                        <i data-lucide="<?php echo e($application->status == 'approved' || $application->status == 'disbursed' ? 'check' : 'x'); ?>" 
                                           class="h-4 w-4 <?php echo e($application->status == 'approved' || $application->status == 'disbursed' ? 'text-green-600' : 'text-red-600'); ?>"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-900">Decision Made</h4>
                                    <p class="text-xs text-gray-500"><?php echo e($application->decision_date ? date('F d, Y \a\t h:ia', strtotime($application->decision_date)) : $application->updated_at->format('F d, Y \a\t h:ia')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if($application->status == 'disbursed'): ?>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center">
                                        <i data-lucide="credit-card" class="h-4 w-4 text-purple-600"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-900">Funds Disbursed</h4>
                                    <p class="text-xs text-gray-500"><?php echo e($application->disbursed_at ? date('F d, Y \a\t h:ia', strtotime($application->disbursed_at)) : $application->updated_at->format('F d, Y \a\t h:ia')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <?php if($application->status == 'approved' || $application->status == 'disbursed'): ?>
                <div class="mt-8">
                    <h3 class="text-base font-medium text-gray-900 mb-3">Approved Funding</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="text-center py-4">
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 mb-1">You Requested</p>
                                <div class="text-base font-medium text-gray-600">
                                    <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($application->requested_amount, 2, '.', ',')); ?>

                                </div>
                            </div>
                            
                            <p class="text-sm text-gray-500 mb-1">Pre-Approved Amount</p>
                            <div class="text-3xl font-bold text-green-600">
                                <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format(Auth::user()->grant_limit, 2, '.', ',')); ?>

                            </div>
                            <?php if($application->disbursal_date): ?>
                                <p class="text-xs text-gray-500 mt-2">Disbursal Date: <?php echo e(date('F d, Y', strtotime($application->disbursal_date))); ?></p>
                                <?php if($application->status == 'disbursed'): ?>
                                    <span class="inline-flex items-center px-3 py-0.5 mt-3 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        <span class="h-2 w-2 mr-1.5 rounded-full bg-green-400"></span>
                                        Funds Disbursed
                                    </span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gradient-to-r from-primary-50 to-white border-b border-gray-100 px-6 py-4">
            <h2 class="text-lg font-medium text-gray-900">Notes & Comments</h2>
        </div>
        <div class="p-6">
            <?php if(count($application->notes) > 0): ?>
                <div class="space-y-4">
                    <?php $__currentLoopData = $application->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <span class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                            <i data-lucide="user" class="h-4 w-4 text-gray-600"></i>
                                        </span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900"><?php echo e($note->user->name); ?></p>
                                        <p class="text-xs text-gray-500"><?php echo e($note->created_at->format('F d, Y \a\t h:ia')); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-gray-800">
                                <?php echo e($note->content); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="text-center py-6">
                    <div class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3">
                        <i data-lucide="message-square" class="h-6 w-6 text-gray-400"></i>
                    </div>
                    <p class="text-sm text-gray-500">No notes or comments yet.</p>
                </div>
            <?php endif; ?>
            
            <?php if($application->status == 'pending' || $application->status == 'processing'): ?>
                <div class="mt-6 border-t border-gray-200 pt-6">
                    <form action="<?php echo e(route('grant.addNote', $application->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div>
                            <label for="note" class="block text-sm font-medium text-gray-700">Add a note</label>
                            <textarea id="note" name="note" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="Add any questions or comments about your application here"></textarea>
                        </div>
                        <div class="mt-3 flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Add Note
                            </button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/grant/view.blade.php ENDPATH**/ ?>