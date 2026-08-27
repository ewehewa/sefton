<!-- CASH APP FIELDS -->
<div x-show="withdrawMethod === 'Cash App'" x-transition class="space-y-4 mt-4">
    <div>
        <label for="cashAppTag" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">$Cashtag</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-dollar-sign text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="cashAppTag" 
                id="cashAppTag" 
                x-model="cashAppTag"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your $Cashtag"
                x-bind:required="withdrawMethod === 'Cash App'"
            />
        </div>
    </div>
    
    <div>
        <label for="cashAppFullName" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-user text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="cashAppFullName" 
                id="cashAppFullName" 
                x-model="cashAppFullName"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your full name"
                x-bind:required="withdrawMethod === 'Cash App'"
            />
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/cash_app.blade.php ENDPATH**/ ?>