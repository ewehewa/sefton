<!-- VENMO FIELDS -->
<div x-show="withdrawMethod === 'Venmo'" x-transition class="space-y-4 mt-4">
    <div>
        <label for="venmoUsername" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Venmo Username</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-at text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="venmoUsername" 
                id="venmoUsername" 
                x-model="venmoUsername"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter Venmo username"
                x-bind:required="withdrawMethod === 'Venmo'"
            />
        </div>
    </div>
    
    <div>
        <label for="venmoPhone" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-phone text-gray-400 text-sm"></i>
            </div>
            <input 
                type="tel" 
                name="venmoPhone" 
                id="venmoPhone" 
                x-model="venmoPhone"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter phone number associated with Venmo"
                x-bind:required="withdrawMethod === 'Venmo'"
            />
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/venmo.blade.php ENDPATH**/ ?>