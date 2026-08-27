<!-- REVOLUT FIELDS -->
<div x-show="withdrawMethod === 'Revolut'" x-transition class="space-y-4 mt-4">
    <div>
        <label for="revolutFullName" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-user text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="revolutFullName" 
                id="revolutFullName" 
                x-model="revolutFullName"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your full name"
                x-bind:required="withdrawMethod === 'Revolut'"
            />
        </div>
    </div>
    
    <div>
        <label for="revolutEmail" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-envelope text-gray-400 text-sm"></i>
            </div>
            <input 
                type="email" 
                name="revolutEmail" 
                id="revolutEmail" 
                x-model="revolutEmail"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your email address"
                x-bind:required="withdrawMethod === 'Revolut'"
            />
        </div>
    </div>
    
    <div>
        <label for="revolutPhone" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-phone text-gray-400 text-sm"></i>
            </div>
            <input 
                type="tel" 
                name="revolutPhone" 
                id="revolutPhone" 
                x-model="revolutPhone"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter phone number associated with Revolut"
                x-bind:required="withdrawMethod === 'Revolut'"
            />
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/revolut.blade.php ENDPATH**/ ?>