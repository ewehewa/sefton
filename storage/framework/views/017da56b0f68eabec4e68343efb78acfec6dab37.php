<!-- WIRE TRANSFER FIELDS -->
<div x-show="withdrawMethod === 'Wire Transfer'" x-transition class="space-y-4 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="accountname" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Beneficiary Account Name</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-user text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="text" 
                    name="accountname" 
                    id="accountname" 
                    x-model="accountName"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter beneficiary's full name"
                    x-bind:required="withdrawMethod === 'Wire Transfer'"
                />
            </div>
        </div>
        
        <div>
            <label for="accountnumber" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Beneficiary Account Number</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-hashtag text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="text" 
                    name="accountnumber" 
                    id="accountnumber" 
                    x-model="accountNumber"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter account number"
                    x-bind:required="withdrawMethod === 'Wire Transfer'"
                />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="bankname" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Bank Name</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-building text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="text" 
                    name="bankname" 
                    id="bankname" 
                    x-model="bankName"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter bank name"
                    x-bind:required="withdrawMethod === 'Wire Transfer'"
                />
            </div>
        </div>

        <div>
            <label for="bankaddress" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Bank Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-location-dot text-gray-400 text-sm"></i>
                </div>
                <input 
                    type="text" 
                    name="bankaddress" 
                    id="bankaddress" 
                    x-model="bankAddress"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                    placeholder="Enter bank address"
                    x-bind:required="withdrawMethod === 'Wire Transfer'"
                />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="Accounttype" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Account Type</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-list text-gray-400 text-sm"></i>
                </div>
                <select 
                    name="Accounttype" 
                    id="Accounttype" 
                    x-model="accountType"
                    class="block w-full pl-10 pr-8 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all appearance-none text-sm"
                    x-bind:required="withdrawMethod === 'Wire Transfer'"
                >
                    <option value="Online Banking">Online Banking</option>
                    <option value="Joint Account">Joint Account</option>
                    <option value="Checking">Checking</option>
                    <option value="Savings Account">Savings Account</option>
                </select>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
                </div>
            </div>
        </div>

        <div>
            <label for="country" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Country</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-globe text-gray-400 text-sm"></i>
                </div>
                <div class="pl-10">
                    <?php echo $__env->make('partials.country-select', ['fieldName' => 'country', 'required' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/wire_transfer.blade.php ENDPATH**/ ?>