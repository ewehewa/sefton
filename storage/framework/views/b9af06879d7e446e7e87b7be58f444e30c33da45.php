<!-- Balance Selection -->
<div class="mb-4">
    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-2">Select Balance to Use</label>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <!-- Fiat Balance Option -->
        <div 
            @click="balanceType = 'fiat'; validateAmount()"
            :class="balanceType === 'fiat' ? 'border-primary-500 ring-2 ring-primary-200 dark:ring-primary-800' : 'border-white/20 dark:border-gray-700/50 hover:border-gray-300 dark:hover:border-gray-600'"
            class="cursor-pointer bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl border p-3 transition-all duration-200"
        >
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-xl flex items-center justify-center bg-blue-100 dark:bg-blue-900/30 mr-3">
                    <i class="fa-solid fa-building-columns text-blue-600 dark:text-blue-400 text-sm"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Fiat Balance</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?></p>
                </div>
                <div class="ml-auto">
                    <div 
                        :class="balanceType === 'fiat' ? 'bg-primary-500 border-primary-500' : 'bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600'"
                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center transition-colors"
                    >
                        <i class="fa-solid fa-check text-white text-xs" x-show="balanceType === 'fiat'"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bitcoin Balance Option -->
        <div 
            @click="balanceType = 'btc'; validateAmount()"
            :class="balanceType === 'btc' ? 'border-primary-500 ring-2 ring-primary-200 dark:ring-primary-800' : 'border-white/20 dark:border-gray-700/50 hover:border-gray-300 dark:hover:border-gray-600'"
            class="cursor-pointer bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl border p-3 transition-all duration-200"
        >
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-xl flex items-center justify-center bg-amber-100 dark:bg-amber-900/30 mr-3">
                    <i class="fa-brands fa-bitcoin text-amber-600 dark:text-amber-400 text-sm"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Bitcoin Balance</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white"><?php echo e(number_format(Auth::user()->btc_balance ?? 0, 8, '.', ',')); ?> BTC</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">≈ <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2, '.', ',')); ?></p>
                </div>
                <div class="ml-auto">
                    <div 
                        :class="balanceType === 'btc' ? 'bg-primary-500 border-primary-500' : 'bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600'"
                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center transition-colors"
                    >
                        <i class="fa-solid fa-check text-white text-xs" x-show="balanceType === 'btc'"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hidden input to pass the balance type to the controller -->
    <input type="hidden" name="balance_type" x-model="balanceType">
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/balance_selection.blade.php ENDPATH**/ ?>