<div x-data="{
        amount: '', 
        accountname: '',
        accountnumber: '',
        bankname: '',
        Accounttype: 'Online Banking',
        pin: '',
        Description: '',
        isSubmitting: false,
        showPreview: false,
        balanceType: 'fiat',
        
        validateAmount() {
            const maxBalance = this.balanceType === 'fiat' ? <?php echo e(Auth::user()->account_bal); ?> : <?php echo e(Auth::user()->btc_balance ?? 0); ?>;
            if (this.amount > maxBalance) {
                this.amount = maxBalance;
            }
        },
        
        getMaxBalance() {
            return this.balanceType === 'fiat' ? <?php echo e(Auth::user()->account_bal); ?> : <?php echo e(Auth::user()->btc_balance ?? 0); ?>;
        },
        
        getFormattedBalance() {
            if (this.balanceType === 'fiat') {
                return '<?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?>';
            } else {
                return '<?php echo e(number_format(Auth::user()->btc_balance ?? 0, 8, '.', ',')); ?> BTC (≈ <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2, '.', ',')); ?>)';
            }
        },
        
        getCurrencySymbol() {
            return this.balanceType === 'fiat' ? '<?php echo e(Auth::user()->s_curr); ?>' : '';
        },
        
        getCurrencyCode() {
            return this.balanceType === 'fiat' ? '<?php echo e(Auth::user()->curr); ?>' : 'BTC';
        }
    }" class="pt-4">
    <!-- Alerts -->
    <div class="mb-2">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    <!-- Main Transfer Card -->
    <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-2xl shadow-xl border border-white/20 dark:border-gray-700/50 overflow-hidden">
        <!-- Modern Header -->
        <div class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 dark:from-primary-600 dark:via-primary-700 dark:to-primary-800 p-6 lg:p-8">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                            <i class="fas fa-paper-plane text-white text-lg"></i>
                        </div>
                        <div>
                            <h2 class="text-xl lg:text-2xl font-bold text-white">Local Transfer</h2>
                            <p class="text-white/80 text-sm">Send money instantly</p>
                        </div>
                    </div>
                    <div class="hidden lg:flex items-center space-x-2 text-white/60">
                        <i class="fas fa-shield-alt"></i>
                        <span class="text-xs font-medium">Secure</span>
                    </div>
                </div>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3">
                        <div class="flex items-center space-x-1 mb-1">
                            <i class="fas fa-clock text-white/80 text-xs"></i>
                            <span class="text-white/80 text-xs font-medium">Time</span>
                        </div>
                        <p class="text-white font-bold text-sm">Instant</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3">
                        <div class="flex items-center space-x-1 mb-1">
                            <i class="fas fa-percentage text-white/80 text-xs"></i>
                            <span class="text-white/80 text-xs font-medium">Fee</span>
                        </div>
                        <p class="text-white font-bold text-sm">Free</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3">
                        <div class="flex items-center space-x-1 mb-1">
                            <i class="fas fa-university text-white/80 text-xs"></i>
                            <span class="text-white/80 text-xs font-medium">Banks</span>
                        </div>
                        <p class="text-white font-bold text-sm">All Local</p>
                    </div>
                </div>
            </div>
            
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-32 h-32 rounded-full bg-white transform translate-x-16 -translate-y-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 rounded-full bg-white transform -translate-x-12 translate-y-12"></div>
            </div>
        </div>

        <!-- Form Content -->
        <div class="p-4 lg:p-6 space-y-6">
            <form @submit.prevent="showPreview = true" id="transferForm">
                <?php echo csrf_field(); ?>
                
                <!-- Balance Selection -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2 mb-1">
                        <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                            <i class="fas fa-wallet text-white text-xs"></i>
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Select Payment Source</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Fiat Balance Card -->
                        <div 
                            @click="balanceType = 'fiat'; validateAmount()"
                            :class="balanceType === 'fiat' ? 'ring-2 ring-primary-500 border-primary-500 bg-primary-50/50 dark:bg-primary-900/20' : 'border-gray-200 dark:border-gray-700 hover:border-primary-300 dark:hover:border-primary-600'"
                            class="cursor-pointer bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border p-4 transition-all duration-300 hover:shadow-lg group"
                        >
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                                        <i class="fas fa-university text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Fiat Balance</h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Traditional Currency</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div 
                                        :class="balanceType === 'fiat' ? 'bg-primary-500 border-primary-500' : 'bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600'"
                                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all duration-200"
                                    >
                                        <i class="fas fa-check text-white text-xs" x-show="balanceType === 'fiat'"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="space-y-1">
                                <div class="flex items-baseline space-x-1">
                                    <span class="text-xl font-bold text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?></span>
                                </div>
                                <div class="flex items-center space-x-1 text-xs text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-circle text-green-500 text-xs"></i>
                                    <span>Available for transfer</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bitcoin Balance Card -->
                        <div 
                            @click="balanceType = 'btc'; validateAmount()"
                            :class="balanceType === 'btc' ? 'ring-2 ring-primary-500 border-primary-500 bg-primary-50/50 dark:bg-primary-900/20' : 'border-gray-200 dark:border-gray-700 hover:border-primary-300 dark:hover:border-primary-600'"
                            class="cursor-pointer bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border p-4 transition-all duration-300 hover:shadow-lg group"
                        >
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-orange-500 to-orange-600 flex items-center justify-center">
                                        <i class="fab fa-bitcoin text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Bitcoin Balance</h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Cryptocurrency</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div 
                                        :class="balanceType === 'btc' ? 'bg-primary-500 border-primary-500' : 'bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600'"
                                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all duration-200"
                                    >
                                        <i class="fas fa-check text-white text-xs" x-show="balanceType === 'btc'"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="space-y-1">
                                <div class="flex items-baseline space-x-1">
                                    <span class="text-xl font-bold text-gray-900 dark:text-white"><?php echo e(number_format(Auth::user()->btc_balance ?? 0, 8, '.', ',')); ?></span>
                                    <span class="text-xs font-medium text-gray-500 dark:text-gray-400">BTC</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                    ≈ <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2, '.', ',')); ?>

                                </div>
                                <div class="flex items-center space-x-1 text-xs text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-circle text-green-500 text-xs"></i>
                                    <span>Available for transfer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hidden input to pass the balance type to the controller -->
                    <input type="hidden" name="balance_type" x-model="balanceType">
                </div>
                
                <!-- Amount Input Section -->
                <div class="space-y-4 pt-2">
                    <div class="flex items-center space-x-2 mb-1">
                        <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-white text-xs"></i>
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Transfer Amount</h3>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-50/80 to-white/80 dark:from-gray-800/50 dark:to-gray-900/50 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                        <!-- Amount Input -->
                        <div class="relative mb-4">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                <span class="text-gray-400 dark:text-gray-500 text-xl font-bold" x-text="getCurrencySymbol()"></span>
                            </div>
                            <input 
                                type="number" 
                                name="amount" 
                                id="amount" 
                                x-model="amount"
                                @input="validateAmount()"
                                min="balanceType === 'fiat' ? '1' : '0.00000001'" 
                                :max="getMaxBalance()"
                                :step="balanceType === 'fiat' ? '0.01' : '0.00000001'"
                                class="block w-full pl-12 pr-16 py-4 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-2xl font-bold text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500"
                                :placeholder="balanceType === 'fiat' ? '0.00' : '0.00000000'"
                                required
                            />
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 z-10">
                                <span class="text-lg font-bold text-gray-400 dark:text-gray-500" x-text="balanceType === 'fiat' ? '' : 'BTC'"></span>
                            </div>
                        </div>
                    
                        <!-- Quick Amount Buttons -->
                        <div class="space-y-2">
                            <p class="text-xs font-medium text-gray-700 dark:text-gray-300">Quick amounts:</p>
                            
                            <!-- Fiat Quick Buttons -->
                            <template x-if="balanceType === 'fiat'">
                                <div class="flex flex-wrap gap-2">
                                    <button type="button" @click="amount = '100'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600"><?php echo e(Auth::user()->s_curr); ?>100</button>
                                    <button type="button" @click="amount = '500'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600"><?php echo e(Auth::user()->s_curr); ?>500</button>
                                    <button type="button" @click="amount = '1000'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600"><?php echo e(Auth::user()->s_curr); ?>1000</button>
                                    <button type="button" @click="amount = Math.floor(<?php echo e(Auth::user()->account_bal); ?>)" class="px-3 py-1.5 bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 rounded-lg text-xs font-medium text-white transition-all duration-200 shadow-sm hover:shadow-md">
                                        <i class="fas fa-wallet mr-1"></i>All
                                    </button>
                                </div>
                            </template>
                            
                            <!-- BTC Quick Buttons -->
                            <template x-if="balanceType === 'btc'">
                                <div class="flex flex-wrap gap-2">
                                    <button type="button" @click="amount = '0.001'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600">0.001 BTC</button>
                                    <button type="button" @click="amount = '0.01'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600">0.01 BTC</button>
                                    <button type="button" @click="amount = '0.1'" class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 hover:bg-primary-100 dark:hover:bg-primary-900/50 rounded-lg text-xs font-medium text-gray-700 dark:text-gray-300 hover:text-primary-700 dark:hover:text-primary-300 transition-all duration-200 border border-gray-200 dark:border-gray-600 hover:border-primary-300 dark:hover:border-primary-600">0.1 BTC</button>
                                    <button type="button" @click="amount = <?php echo e(Auth::user()->btc_balance ?? 0); ?>" class="px-3 py-1.5 bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 rounded-lg text-xs font-medium text-white transition-all duration-200 shadow-sm hover:shadow-md">
                                        <i class="fas fa-wallet mr-1"></i>All
                                    </button>
                                </div>
                            </template>
                        </div>
                        
                        <!-- Conversion Preview -->
                        <div class="mt-6 p-4 bg-primary-50/50 dark:bg-primary-900/20 rounded-xl border border-primary-200/50 dark:border-primary-700/50" x-show="amount && parseFloat(amount) > 0">
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-exchange-alt text-primary-500 dark:text-primary-400"></i>
                                <span class="text-sm font-medium text-primary-700 dark:text-primary-300">Conversion Rate</span>
                            </div>
                            <template x-if="balanceType === 'fiat'">
                                <p class="text-sm text-gray-600 dark:text-gray-400">Equivalent: <span class="font-semibold text-gray-900 dark:text-white" x-text="'≈ ' + (parseFloat(amount) / <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC'"></span></p>
                            </template>
                            <template x-if="balanceType === 'btc'">
                                <p class="text-sm text-gray-600 dark:text-gray-400">Equivalent: <span class="font-semibold text-gray-900 dark:text-white" x-text="'≈ <?php echo e(Auth::user()->s_curr); ?>' + (parseFloat(amount) * <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e(Auth::user()->curr); ?>'"></span></p>
                            </template>
                        </div>
                    </div>
                
                    <!-- Beneficiary Details Section -->
                    <div class="space-y-4 pt-2">
                        <div class="flex items-center space-x-2 mb-1">
                            <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Beneficiary Details</h3>
                        </div>
                        
                        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4 space-y-4">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <!-- Beneficiary Account Name -->
                                <div class="space-y-2">
                                    <label for="accountname" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Account Holder Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-user text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="accountname" 
                                            id="accountname" 
                                            x-model="accountname"
                                            class="block w-full pl-10 pr-3 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm"
                                            placeholder="Enter full name as on bank account"
                                            required
                                        />
                                    </div>
                                </div>
                                
                                <!-- Beneficiary Account Number -->
                                <div class="space-y-2">
                                    <label for="accountnumber" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Account Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-hashtag text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="accountnumber" 
                                            id="accountnumber" 
                                            x-model="accountnumber"
                                            class="block w-full pl-10 pr-3 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm"
                                            placeholder="Enter account number"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <!-- Bank Name -->
                                <div class="space-y-2">
                                    <label for="bankname" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Bank Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-university text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="bankname" 
                                            id="bankname" 
                                            x-model="bankname"
                                            class="block w-full pl-10 pr-3 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm"
                                            placeholder="Enter bank name"
                                            required
                                        />
                                    </div>
                                </div>
                                
                                <!-- Account Type -->
                                <div class="space-y-2">
                                    <label for="Accounttype" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Account Type</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-credit-card text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <select 
                                            name="Accounttype" 
                                            id="Accounttype" 
                                            x-model="Accounttype"
                                            class="block w-full pl-10 pr-10 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all appearance-none text-gray-900 dark:text-white text-sm"
                                            required
                                        >
                                            <option value="Online Banking">Online Banking</option>
                                            <option value="Joint Account">Joint Account</option>
                                            <option value="Checking">Checking</option>
                                            <option value="Savings Account">Savings Account</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-chevron-down text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Information Section -->
                    <div class="space-y-4 pt-2">
                        <div class="flex items-center space-x-2 mb-1">
                            <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-info-circle text-white text-xs"></i>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Additional Information</h3>
                        </div>
                        
                        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4 space-y-4">
                            <!-- Description -->
                            <div class="space-y-2">
                                <label for="Description" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Description/Memo</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-3 flex items-start pointer-events-none z-10">
                                        <i class="fas fa-comment-alt text-gray-400 dark:text-gray-500"></i>
                                    </div>
                                    <textarea 
                                        name="Description" 
                                        id="Description" 
                                        x-model="Description"
                                        class="block w-full pl-10 pr-3 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all resize-none text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm"
                                        placeholder="Enter transaction description or purpose of payment (optional)"
                                        rows="2"
                                    ></textarea>
                                </div>
                            </div>
                            
                            <!-- Transaction PIN -->
                            <div class="space-y-2">
                                <label for="pin" class="block text-xs font-semibold text-gray-700 dark:text-gray-300">Transaction PIN</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-lock text-gray-400 dark:text-gray-500"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        name="pin" 
                                        id="pin" 
                                        x-model="pin"
                                        autocomplete="current-password"
                                        class="block w-full pl-10 pr-10 py-3 border-2 border-gray-200 dark:border-gray-700 rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm"
                                        placeholder="Enter your transaction PIN"
                                        required
                                    />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center z-10">
                                        <button 
                                            type="button" 
                                            class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 focus:outline-none transition-colors"
                                            @click="document.getElementById('pin').type = document.getElementById('pin').type === 'password' ? 'text' : 'password'"
                                        >
                                            <i class="fas fa-eye" x-show="document.getElementById('pin').type === 'password'"></i>
                                            <i class="fas fa-eye-slash" x-show="document.getElementById('pin').type === 'text'" style="display: none;"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-1 mt-2">
                                    <i class="fas fa-shield-alt text-primary-500 dark:text-primary-400 text-xs"></i>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">This is your transaction PIN, not your login password</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Transfer Summary -->
                    <div x-show="amount > 0" class="bg-gradient-to-br from-primary-50/80 to-blue-50/80 dark:from-primary-900/30 dark:to-slate-800/60 backdrop-blur-sm rounded-xl border border-primary-200/50 dark:border-primary-700/50 p-4 shadow-lg mt-4">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-receipt text-white text-xs"></i>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Transaction Summary</h3>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-1">
                                <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Transfer Amount</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-bold text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount || 0).toFixed(2)"></span></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-bold text-gray-900 dark:text-white"><span x-text="parseFloat(amount || 0).toFixed(8)"></span> BTC</span>
                                </template>
                            </div>
                            
                            <div class="flex justify-between items-center py-1">
                                <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Payment Source</span>
                                <template x-if="balanceType === 'fiat'">
                                    <div class="flex items-center space-x-1">
                                        <i class="fas fa-university text-blue-600 dark:text-blue-400 text-xs"></i>
                                        <span class="font-semibold text-gray-900 dark:text-white text-sm">Fiat Balance</span>
                                    </div>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <div class="flex items-center space-x-1">
                                        <i class="fab fa-bitcoin text-orange-600 dark:text-orange-400 text-xs"></i>
                                        <span class="font-semibold text-gray-900 dark:text-white text-sm">Bitcoin Balance</span>
                                    </div>
                                </template>
                            </div>
                            
                            <div class="flex justify-between items-center py-1">
                                <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Transfer Fee</span>
                                <div class="flex items-center space-x-1">
                                    <span class="bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300 px-2 py-0.5 rounded-full text-xs font-medium">FREE</span>
                                </div>
                            </div>
                            
                            <div class="border-t border-gray-300 dark:border-gray-600 pt-3 mt-3">
                                <div class="flex justify-between items-center py-1">
                                    <span class="text-gray-900 dark:text-white font-bold">Total Amount</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-bold text-xl text-primary-700 dark:text-primary-300"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount || 0).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-bold text-xl text-primary-700 dark:text-primary-300"><span x-text="parseFloat(amount || 0).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                                
                                <div class="flex justify-between items-center py-1 mt-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Remaining Balance</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-semibold text-gray-900 dark:text-white text-sm"><?php echo e(Auth::user()->s_curr); ?><span x-text="(<?php echo e(Auth::user()->account_bal); ?> - parseFloat(amount || 0)).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-semibold text-gray-900 dark:text-white text-sm"><span x-text="(<?php echo e(Auth::user()->btc_balance ?? 0); ?> - parseFloat(amount || 0)).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col lg:flex-row lg:space-x-3 space-y-2 lg:space-y-0 pt-4">
                        <button 
                            type="submit" 
                            class="w-full lg:flex-1 inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-xl shadow-lg text-base font-semibold text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98]"
                            :disabled="!amount || !accountname || !accountnumber || !bankname || !pin"
                            :class="{ 'opacity-60 cursor-not-allowed hover:scale-100': !amount || !accountname || !accountnumber || !bankname || !pin }"
                        >
                            <i class="fas fa-eye mr-2"></i>
                            Preview Transfer
                        </button>
                        <a 
                            href="<?php echo e(route('dashboard')); ?>" 
                            class="w-full lg:w-auto inline-flex items-center justify-center px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-base font-semibold text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300"
                        >
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to Dashboard
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/local_transfer/transfer_form.blade.php ENDPATH**/ ?>