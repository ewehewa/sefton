<!-- Amount Input with Currency (Enhanced) -->
<div class="mb-4 bg-gradient-to-br from-gray-50 to-white dark:from-gray-800/50 dark:to-gray-700/50 p-4 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
    <label for="amount" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-2">Amount to Transfer</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <span class="text-gray-500 text-lg font-bold" x-text="balanceType === 'fiat' ? '<?php echo e(Auth::user()->s_curr); ?>' : ''"></span>
        </div>
        <input 
            type="number" 
            name="amount" 
            id="amount" 
            x-model="amount"
            @input="validateAmount()"
            min="0.00000001" 
            :max="balanceType === 'fiat' ? <?php echo e(Auth::user()->account_bal); ?> : <?php echo e(Auth::user()->btc_balance ?? 0); ?>"
            :step="balanceType === 'fiat' ? '0.01' : '0.00000001'"
            class="block w-full pl-12 pr-20 py-3 border-2 border-primary-100 dark:border-primary-800 rounded-lg bg-white dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-xl font-bold"
            :placeholder="balanceType === 'fiat' ? '0.00' : '0.00000000'"
            required
        />
        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-400 pointer-events-none" x-text="balanceType === 'fiat' ? '' : 'BTC'"></div>
    </div>
    <div class="mt-2 flex items-center justify-between">
        <!-- Quick Amount Buttons -->
        <div class="flex space-x-2">
            <template x-if="balanceType === 'fiat'">
                <div class="flex space-x-2">
                    <button type="button" @click="amount = '100'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors"><?php echo e(Auth::user()->s_curr); ?>100</button>
                    <button type="button" @click="amount = '500'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors"><?php echo e(Auth::user()->s_curr); ?>500</button>
                    <button type="button" @click="amount = '1000'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors"><?php echo e(Auth::user()->s_curr); ?>1000</button>
                    <button type="button" @click="amount = <?php echo e(Auth::user()->account_bal); ?>" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors">Max</button>
                </div>
            </template>
            <template x-if="balanceType === 'btc'">
                <div class="flex space-x-2">
                    <button type="button" @click="amount = '0.001'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors">0.001 BTC</button>
                    <button type="button" @click="amount = '0.01'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors">0.01 BTC</button>
                    <button type="button" @click="amount = '0.1'" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors">0.1 BTC</button>
                    <button type="button" @click="amount = <?php echo e(Auth::user()->btc_balance ?? 0); ?>" class="px-2 py-1 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-md text-xs font-medium text-gray-700 dark:text-gray-300 transition-colors">Max</button>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Conversion Preview -->
    <div class="mt-3 text-xs text-gray-600 dark:text-gray-400" x-show="amount && parseFloat(amount) > 0">
        <template x-if="balanceType === 'fiat'">
            <p>Equivalent: <span class="font-medium" x-text="'≈ ' + (parseFloat(amount) / <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC'"></span></p>
        </template>
        <template x-if="balanceType === 'btc'">
            <p>Equivalent: <span class="font-medium" x-text="'≈ <?php echo e(Auth::user()->s_curr); ?>' + (parseFloat(amount) * <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e(Auth::user()->curr); ?>'"></span></p>
        </template>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/amount_input.blade.php ENDPATH**/ ?>