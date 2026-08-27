<!-- WISE TRANSFER FIELDS -->
<div x-show="withdrawMethod === 'Wise Transfer'" x-transition class="space-y-6 mt-6">
    <div class="flex items-center justify-center mb-6">
        <div class="flex items-center h-20 px-6 bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-700 rounded-lg">
            <div class="w-10 h-10 mr-4 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                <i class="fa-solid fa-money-bill-transfer text-green-600 dark:text-green-400 text-lg"></i>
            </div>
            <div>
                <div class="text-lg font-bold text-gray-900 dark:text-white">Wise Transfer</div>
                <p class="text-sm text-gray-500 dark:text-gray-400">Formerly TransferWise - Low fee international transfers</p>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="wiseFullName" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-user text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="text" 
                    name="wiseFullName" 
                    id="wiseFullName" 
                    x-model="wiseFullName"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter your full name"
                    x-bind:required="withdrawMethod === 'Wise Transfer'"
                />
            </div>
        </div>
        
        <div>
            <label for="wiseEmail" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-envelope text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="email" 
                    name="wiseEmail" 
                    id="wiseEmail" 
                    x-model="wiseEmail"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter your email address"
                    x-bind:required="withdrawMethod === 'Wise Transfer'"
                />
            </div>
        </div>
    </div>
    
    <div>
        <label for="wiseCountry" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Country</label>
        <div class="relative rounded-lg shadow-sm">
            <?php echo $__env->make('partials.country-select', ['fieldName' => 'wiseCountry', 'required' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/wise_transfer.blade.php ENDPATH**/ ?>