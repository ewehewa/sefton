<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row sm:space-x-3 space-y-2 sm:space-y-0">
    <button 
        type="button" 
        class="w-full inline-flex items-center justify-center px-4 py-2.5 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800 transition-colors"
        @click="previewTransfer()"
        :disabled="!withdrawMethod || !amount"
    >
        <i class="fa-solid fa-paper-plane text-xs mr-2"></i>
        <span>Continue to Transfer</span>
    </button>
    <a 
        href="<?php echo e(route('dashboard')); ?>" 
        class="w-full inline-flex items-center justify-center px-4 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800 transition-colors"
    >
        <i class="fa-solid fa-arrow-left text-xs mr-2"></i>
        Back to Dashboard
    </a>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/action_buttons.blade.php ENDPATH**/ ?>