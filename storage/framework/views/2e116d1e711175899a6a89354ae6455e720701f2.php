<!-- Transfer Preview Modal -->
<div x-show="showPreview" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div 
            x-show="showPreview" 
            x-transition:enter="ease-out duration-300" 
            x-transition:enter-start="opacity-0" 
            x-transition:enter-end="opacity-100" 
            x-transition:leave="ease-in duration-200" 
            x-transition:leave-start="opacity-100" 
            x-transition:leave-end="opacity-0" 
            class="fixed inset-0 transition-opacity" 
            @click="showPreview = false"
        >
            <div class="absolute inset-0 bg-gray-500 dark:bg-gray-800 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        
        <div 
            x-show="showPreview" 
            x-transition:enter="ease-out duration-300" 
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
            x-transition:leave="ease-in duration-200" 
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
            class="inline-block align-bottom bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-2xl text-left overflow-hidden shadow-2xl border border-white/20 dark:border-gray-700/50 transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            @click.away="showPreview = false"
        >
            <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-primary-100 dark:bg-primary-900/30 sm:mx-0 sm:h-10 sm:w-10">
                        <i class="fa-solid fa-circle-check text-primary-600 dark:text-primary-400 text-lg"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                            Confirm Your Transfer
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Please review your transfer details before confirming. Once submitted, this transaction cannot be reversed.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 border-t border-gray-200 dark:border-gray-600 pt-4">
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-gray-500 dark:text-gray-400">Transfer Method</span>
                            <span class="text-gray-900 dark:text-white" x-text="withdrawMethod"></span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-gray-500 dark:text-gray-400">Amount</span>
                            <template x-if="balanceType === 'fiat'">
                                <span class="text-gray-900 dark:text-white font-bold" x-text="'<?php echo e(Auth::user()->s_curr); ?>' + parseFloat(amount).toFixed(2)"></span>
                            </template>
                            <template x-if="balanceType === 'btc'">
                                <span class="text-gray-900 dark:text-white font-bold" x-text="parseFloat(amount).toFixed(8) + ' BTC'"></span>
                            </template>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-gray-500 dark:text-gray-400">Source</span>
                            <template x-if="balanceType === 'fiat'">
                                <span class="text-gray-900 dark:text-white">Fiat Balance</span>
                            </template>
                            <template x-if="balanceType === 'btc'">
                                <span class="text-gray-900 dark:text-white">Bitcoin Balance</span>
                            </template>
                        </div>
                        
                        <!-- Wire Transfer Details -->
                        <template x-if="withdrawMethod === 'Wire Transfer'">
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-500 dark:text-gray-400">Recipient</span>
                                    <span class="text-gray-900 dark:text-white" x-text="accountName"></span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-500 dark:text-gray-400">Account Number</span>
                                    <span class="text-gray-900 dark:text-white" x-text="accountNumber"></span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-500 dark:text-gray-400">Bank</span>
                                    <span class="text-gray-900 dark:text-white" x-text="bankName"></span>
                                </div>
                            </div>
                        </template>
                        
                        <!-- Cryptocurrency Details -->
                        <template x-if="withdrawMethod === 'Cryptocurrency'">
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-500 dark:text-gray-400">Cryptocurrency</span>
                                    <span class="text-gray-900 dark:text-white" x-text="cryptoCurrency + ' (' + cryptoNetwork + ')'"></span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-gray-500 dark:text-gray-400">Wallet Address</span>
                                    <span class="text-gray-900 dark:text-white truncate max-w-[220px]" x-text="walletAddress"></span>
                                </div>
                            </div>
                        </template>
                        
                        <!-- Common fields -->
                        <div class="pt-3 border-t border-gray-200 dark:border-gray-600">
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-500 dark:text-gray-400">Total Amount</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="text-gray-900 dark:text-white font-bold" x-text="'<?php echo e(Auth::user()->s_curr); ?>' + parseFloat(amount).toFixed(2)"></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="text-gray-900 dark:text-white font-bold" x-text="parseFloat(amount).toFixed(8) + ' BTC'"></span>
                                </template>
                            </div>
                            <div class="flex justify-between text-sm mt-1">
                                <span class="font-medium text-gray-500 dark:text-gray-400">New Balance</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="text-gray-900 dark:text-white" x-text="'<?php echo e(Auth::user()->s_curr); ?>' + (<?php echo e(Auth::user()->account_bal); ?> - parseFloat(amount)).toFixed(2)"></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="text-gray-900 dark:text-white" x-text="(<?php echo e(Auth::user()->btc_balance ?? 0); ?> - parseFloat(amount)).toFixed(8) + ' BTC'"></span>
                                </template>
                            </div>
                            <div class="flex justify-between text-sm mt-1" x-show="amount && parseFloat(amount) > 0">
                                <span class="font-medium text-gray-500 dark:text-gray-400">Equivalent Value</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="text-gray-900 dark:text-white" x-text="'≈ ' + (parseFloat(amount) / <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC'"></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="text-gray-900 dark:text-white" x-text="'≈ <?php echo e(Auth::user()->s_curr); ?>' + (parseFloat(amount) * <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50/80 dark:bg-gray-700/50 backdrop-blur-sm px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-200/50 dark:border-gray-600/50">
                <button 
                    type="button" 
                    class="w-full inline-flex justify-center rounded-xl border border-transparent shadow-lg px-6 py-3 bg-gradient-to-r from-primary-500 to-primary-600 text-base font-semibold text-white hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] sm:ml-3 sm:w-auto sm:text-sm"
                    @click="submitForm()"
                >
                    <span class="flex items-center">
                        <i class="fa-solid fa-circle-check text-sm mr-2"></i>
                        Confirm Transfer
                    </span>
                </button>
                <button 
                    type="button" 
                    class="mt-3 w-full inline-flex justify-center rounded-xl border border-gray-300 dark:border-gray-600 shadow-sm px-6 py-3 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm text-base font-semibold text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                    @click="showPreview = false"
                >
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/preview_modal.blade.php ENDPATH**/ ?>