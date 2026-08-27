
<div class="lg:hidden px-4 mb-4 mt-4">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Quick Transfer</h3>
        <a href="#" class="text-xs text-primary-600 dark:text-primary-400 font-medium flex items-center hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
            View All
            <i class="fa-solid fa-chevron-right ml-1 text-xs"></i>
        </a>
    </div>
    
    <div class="flex space-x-3 overflow-x-auto pb-2">
        <!-- Add New Contact -->
        <button class="flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-14 h-14 rounded-full border-2 border-dashed border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 flex items-center justify-center mb-1 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                <i class="fa-solid fa-plus text-gray-400 dark:text-gray-500 text-base"></i>
            </div>
            <span class="text-xs text-gray-500 dark:text-gray-400 text-center">Add New</span>
        </button>

        <!-- Quick Transfer Contacts with Initials -->
        <?php $__currentLoopData = $quickTransferContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button class="flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-14 h-14 rounded-full <?php echo e($contact->color); ?> flex items-center justify-center mb-1 border-2 border-white dark:border-gray-800 shadow-sm dark:shadow-gray-900/25">
                <span class="text-white font-semibold text-sm"><?php echo e($contact->initials); ?></span>
            </div>
            <span class="text-xs text-gray-700 dark:text-gray-300 text-center"><?php echo e($contact->name); ?></span>
        </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/mobile-quick-transfer.blade.php ENDPATH**/ ?>