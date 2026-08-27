<!-- Transaction Details Summary -->
<div x-show="amount > 0 && withdrawMethod !== ''" class="bg-gradient-to-br from-gray-50 to-white dark:from-gray-800/50 dark:to-gray-700/50 rounded-2xl p-4 mb-4 border border-gray-100 dark:border-gray-700 shadow-sm">
    <div class="flex items-center mb-3">
        <i class="fa-solid fa-clipboard-list text-primary-500 dark:text-primary-400 text-sm mr-2"></i>
        <h3 class="text-xs font-medium text-gray-700 dark:text-gray-300">Transaction Summary</h3>
    </div>
    <div class="space-y-2">
        <!-- Amount Row -->
        <div class="flex justify-between items-center">
            <span class="text-gray-500 dark:text-gray-400 text-xs">Amount</span>
            <template x-if="balanceType === 'fiat'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs" x-text="amount ? '<?php echo e(Auth::user()->s_curr); ?>' + parseFloat(amount).toFixed(2) : '<?php echo e(Auth::user()->s_curr); ?>0.00'"></span>
            </template>
            <template x-if="balanceType === 'btc'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs" x-text="amount ? parseFloat(amount).toFixed(8) + ' BTC' : '0.00000000 BTC'"></span>
            </template>
        </div>
        
        <!-- Source Balance Row -->
        <div class="flex justify-between items-center">
            <span class="text-gray-500 dark:text-gray-400 text-xs">Source</span>
            <template x-if="balanceType === 'fiat'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs">Fiat Balance</span>
            </template>
            <template x-if="balanceType === 'btc'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs">Bitcoin Balance</span>
            </template>
        </div>
        
        <!-- Fee Row -->
        <div class="flex justify-between items-center">
            <span class="text-gray-500 dark:text-gray-400 text-xs">Fee</span>
            <template x-if="balanceType === 'fiat'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs"><?php echo e(Auth::user()->s_curr); ?>0.00</span>
            </template>
            <template x-if="balanceType === 'btc'">
                <span class="font-medium text-gray-700 dark:text-gray-300 text-xs">0.00000000 BTC</span>
            </template>
        </div>
        
        <!-- Total Row -->
        <div class="border-t border-gray-200 dark:border-gray-600 pt-2 mt-2">
            <div class="flex justify-between items-center">
                <span class="text-gray-700 dark:text-gray-300 font-medium text-xs">Total</span>
                <template x-if="balanceType === 'fiat'">
                    <span class="font-bold text-sm text-gray-900 dark:text-white" x-text="amount ? '<?php echo e(Auth::user()->s_curr); ?>' + parseFloat(amount).toFixed(2) : '<?php echo e(Auth::user()->s_curr); ?>0.00'"></span>
                </template>
                <template x-if="balanceType === 'btc'">
                    <span class="font-bold text-sm text-gray-900 dark:text-white" x-text="amount ? parseFloat(amount).toFixed(8) + ' BTC' : '0.00000000 BTC'"></span>
                </template>
            </div>
        </div>
        
        <!-- New Balance Row -->
        <div class="flex justify-between items-center pt-1">
            <span class="font-medium text-gray-500 dark:text-gray-400 text-xs">New Balance After Transfer</span>
            <template x-if="balanceType === 'fiat'">
                <span class="text-gray-900 dark:text-white text-xs" x-text="'<?php echo e(Auth::user()->s_curr); ?>' + (<?php echo e(Auth::user()->account_bal); ?> - (parseFloat(amount) || 0)).toFixed(2)"></span>
            </template>
            <template x-if="balanceType === 'btc'">
                <span class="text-gray-900 dark:text-white text-xs" x-text="(<?php echo e(Auth::user()->btc_balance ?? 0); ?> - (parseFloat(amount) || 0)).toFixed(8) + ' BTC'"></span>
            </template>
        </div>
        
        <!-- Equivalent Value Row (shown only when amount is entered) -->
        <div class="flex justify-between items-center pt-1" x-show="amount && parseFloat(amount) > 0">
            <span class="font-medium text-gray-500 dark:text-gray-400 text-xs">Equivalent Value</span>
            <template x-if="balanceType === 'fiat'">
                <span class="text-gray-700 dark:text-gray-300 text-xs" x-text="'≈ ' + (parseFloat(amount) / <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC'"></span>
            </template>
            <template x-if="balanceType === 'btc'">
                <span class="text-gray-700 dark:text-gray-300 text-xs" x-text="'≈ <?php echo e(Auth::user()->s_curr); ?>' + (parseFloat(amount) * <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})"></span>
            </template>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/transaction_summary.blade.php ENDPATH**/ ?>