<!-- PAYPAL FIELDS -->
<div x-show="withdrawMethod === 'PayPal'" x-transition class="space-y-4 mt-4">
    <div class="flex items-center justify-center mb-4">
        <div class="flex items-center h-16 px-4 bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-700 rounded-2xl">
            <div class="w-8 h-8 mr-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                <i class="fa-brands fa-paypal text-blue-600 dark:text-blue-400 text-sm"></i>
            </div>
            <div>
                <div class="text-sm font-bold text-gray-900 dark:text-white">PayPal</div>
                <p class="text-xs text-gray-500 dark:text-gray-400">Transfer funds to your PayPal account</p>
            </div>
        </div>
    </div>
    
    <div>
        <label for="paypalEmail" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">PayPal Email</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-envelope text-gray-400 text-sm"></i>
            </div>
            <input 
                type="email" 
                name="paypalEmail" 
                id="paypalEmail" 
                x-model="paypalEmail"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter PayPal email address"
                x-bind:required="withdrawMethod === 'PayPal'"
            />
        </div>
        
        <!-- PayPal Email Note -->
        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Please ensure this is the email address associated with your PayPal account</p>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/paypal.blade.php ENDPATH**/ ?>