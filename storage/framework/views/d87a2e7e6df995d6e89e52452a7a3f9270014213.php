<!-- CRYPTOCURRENCY FIELDS -->
<div x-show="withdrawMethod === 'Cryptocurrency'" x-transition class="space-y-4 mt-4">
    <!-- Crypto Icon and Info -->
    <div class="flex items-center justify-center mb-4">
        <div class="flex items-center h-16 px-4 bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-700 rounded-2xl">
            <template x-if="cryptoCurrency === 'BTC'">
                <div class="w-10 h-10 mr-4 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/npm/cryptocurrency-icons@0.18.1/svg/color/btc.svg" alt="Bitcoin" class="h-6 w-6">
                </div>
            </template>
            
            <div>
                <div class="flex items-center">
                    <span class="text-lg font-bold mr-2 text-gray-900 dark:text-white" x-text="cryptoCurrency"></span>
                    <span class="text-sm text-gray-500 dark:text-gray-400" x-text="cryptoNetwork"></span>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400">Select your preferred cryptocurrency and network</p>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="cryptoCurrency" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Cryptocurrency</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-brands fa-bitcoin text-gray-400 text-sm"></i>
                </div>
                <select 
                    name="cryptoCurrency" 
                    id="cryptoCurrency" 
                    x-model="cryptoCurrency"
                    class="block w-full pl-10 pr-10 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all appearance-none text-sm"
                    x-bind:required="withdrawMethod === 'Cryptocurrency'"
                >
                    <option value="BTC">Bitcoin (BTC)</option>
                </select>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
                </div>
            </div>
        </div>
        
        <div>
            <label for="cryptoNetwork" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Network</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-network-wired text-gray-400 text-sm"></i>
                </div>
                <select 
                    name="cryptoNetwork" 
                    id="cryptoNetwork" 
                    x-model="cryptoNetwork"
                    class="block w-full pl-10 pr-10 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all appearance-none text-sm"
                    x-bind:required="withdrawMethod === 'Cryptocurrency'"
                >
                    <option value="Native">Native</option>
                </select>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Crypto Cards Display -->
    <div class="grid grid-cols-4 gap-2 mb-4">
        <div @click="cryptoCurrency = 'BTC'" class="cursor-pointer p-2 rounded-lg border" :class="{'border-primary-500 bg-primary-50 dark:bg-primary-900/30 dark:border-primary-400': cryptoCurrency === 'BTC', 'border-gray-200 dark:border-gray-600': cryptoCurrency !== 'BTC'}">
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/npm/cryptocurrency-icons@0.18.1/svg/color/btc.svg" alt="Bitcoin" class="h-8 w-8 mb-1">
                <span class="text-xs font-medium text-gray-900 dark:text-white">BTC</span>
            </div>
        </div>
    </div>
    
    <div>
        <label for="walletAddress" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Wallet Address</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-wallet text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="walletAddress" 
                id="walletAddress" 
                x-model="walletAddress"
                class="block w-full pl-10 pr-10 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all font-mono text-sm"
                placeholder="Enter wallet address"
                x-bind:required="withdrawMethod === 'Cryptocurrency'"
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <button 
                    type="button" 
                    class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 focus:outline-none"
                    @click="navigator.clipboard.readText().then(text => walletAddress = text)"
                >
                    <i class="fa-solid fa-clipboard text-sm"></i>
                </button>
            </div>
        </div>
        
        <!-- Wallet Address Warning -->
        <div class="mt-2 p-3 bg-yellow-50 dark:bg-yellow-900/30 border-l-4 border-yellow-400 dark:border-yellow-500 rounded-r-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fa-solid fa-triangle-exclamation text-yellow-500 dark:text-yellow-400 text-sm"></i>
                </div>
                <div class="ml-3">
                    <p class="text-xs text-yellow-700 dark:text-yellow-300">
                        Double-check your wallet address. Transactions to incorrect addresses cannot be reversed.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/cryptocurrency.blade.php ENDPATH**/ ?>