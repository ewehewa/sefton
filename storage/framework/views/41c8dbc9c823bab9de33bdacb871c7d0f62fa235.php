<!-- Account Status Modal (Hidden by default) -->
<div id="accountStatusModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900/75 dark:bg-gray-900/75 backdrop-blur-sm"></div>
        
        <!-- Modal panel -->
        <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 dark:border-gray-700/50 sm:align-middle sm:max-w-lg">
            <div class="text-center py-6">
                <div class="mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-amber-100 dark:bg-amber-900/50">
                    <i class="fa-solid fa-triangle-exclamation text-2xl text-amber-600 dark:text-amber-400"></i>
                </div>
                
                <h3 id="accountStatusTitle" class="text-xl font-bold text-gray-900 dark:text-white mb-2">Account Status</h3>
                <p id="accountStatusMessage" class="text-gray-500 dark:text-gray-400 mb-6">Your account status requires attention.</p>
                
                <div class="mt-6">
                    <button type="button" onclick="window.location.href='<?php echo e(route('dashboard')); ?>'" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl shadow-lg text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                        <i class="fa-solid fa-home mr-2"></i>
                        Return to Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/account_status_modal.blade.php ENDPATH**/ ?>