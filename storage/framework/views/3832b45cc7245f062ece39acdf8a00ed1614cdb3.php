<!-- PIN INPUT - required for all methods -->
<div class="mb-4 mt-6">
    <label for="pin_input" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Transaction PIN</label>
    <div class="relative rounded-lg">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fa-solid fa-key text-gray-400 text-sm"></i>
        </div>
        <input 
            type="password" 
            name="pin" 
            id="pin_input" 
            x-model="pin"
            pattern="[0-9]+"
            minlength="4"
            maxlength="10"
            autocomplete="current-password"
            class="block w-full pl-10 pr-10 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
            placeholder="Enter your 4-10 digit PIN"
            required
        />
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
            <button 
                type="button" 
                class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 focus:outline-none"
                @click="document.getElementById('pin_input').type = document.getElementById('pin_input').type === 'password' ? 'text' : 'password'"
            >
                <i class="fa-solid fa-eye text-sm" x-show="document.getElementById('pin_input').type === 'password'"></i>
                <i class="fa-solid fa-eye-slash text-sm" x-show="document.getElementById('pin_input').type === 'text'"></i>
            </button>
        </div>
    </div>
    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">This is your transaction PIN, not your login password</p>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/pin_input.blade.php ENDPATH**/ ?>