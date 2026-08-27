
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

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
}">
    <!-- Alerts -->
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

    <!-- Page Header with Breadcrumbs -->
    <div class="flex flex-col mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 mb-1">Local Transfer</h1>
            <div class="flex items-center text-sm text-gray-500">
                <a href="<?php echo e(route('dashboard')); ?>" class="hover:text-primary-600">Dashboard</a>
                <i data-lucide="chevron-right" class="h-4 w-4 mx-2"></i>
                <span class="font-medium text-gray-700">Local Transfer</span>
            </div>
        </div>
    </div>

    <!-- Interactive Card Container -->
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
            <!-- Card Header -->
            <div class="relative bg-gradient-to-r from-primary-600 to-primary-700 px-6 py-8">
                <div class="flex flex-col items-center">
                    <div class="bg-white/20 backdrop-blur-sm p-4 rounded-full mb-4">
                        <i data-lucide="send" class="h-10 w-10 text-white"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-white">Local Bank Transfer</h2>
                    <p class="text-white/80 mt-1 text-center">Send money to any local bank account securely</p>
                </div>
                
                <!-- Wave decoration at the bottom -->
                <div class="absolute left-0 right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="h-12 w-full text-white fill-current">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5"></path>
                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
                    </svg>
                </div>
            </div>

            <!-- Form Content -->
            <div class="p-6 md:p-8">
                <form @submit.prevent="showPreview = true" id="transferForm">
                    <?php echo csrf_field(); ?>
                    
                    <!-- Balance Selection -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Balance to Use</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Fiat Balance Option -->
                            <div 
                                @click="balanceType = 'fiat'; validateAmount()"
                                :class="balanceType === 'fiat' ? 'border-primary-500 ring-2 ring-primary-200' : 'border-gray-200 hover:border-gray-300'"
                                class="cursor-pointer bg-white rounded-xl border p-4 transition-all duration-200"
                            >
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center bg-blue-100 mr-3">
                                        <i data-lucide="landmark" class="h-5 w-5 text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Fiat Balance</p>
                                        <p class="text-xl font-bold text-gray-900"><?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?></p>
                                    </div>
                                    <div class="ml-auto">
                                        <div 
                                            :class="balanceType === 'fiat' ? 'bg-primary-500 border-primary-500' : 'bg-white border-gray-300'"
                                            class="w-6 h-6 rounded-full border-2 flex items-center justify-center transition-colors"
                                        >
                                            <i data-lucide="check" class="h-4 w-4 text-white" x-show="balanceType === 'fiat'"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bitcoin Balance Option -->
                            <div 
                                @click="balanceType = 'btc'; validateAmount()"
                                :class="balanceType === 'btc' ? 'border-primary-500 ring-2 ring-primary-200' : 'border-gray-200 hover:border-gray-300'"
                                class="cursor-pointer bg-white rounded-xl border p-4 transition-all duration-200"
                            >
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center bg-orange-100 mr-3">
                                        <i data-lucide="bitcoin" class="h-5 w-5 text-orange-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Bitcoin Balance</p>
                                        <p class="text-xl font-bold text-gray-900"><?php echo e(number_format(Auth::user()->btc_balance ?? 0, 8, '.', ',')); ?> BTC</p>
                                        <p class="text-xs text-gray-500">≈ <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2, '.', ',')); ?></p>
                                    </div>
                                    <div class="ml-auto">
                                        <div 
                                            :class="balanceType === 'btc' ? 'bg-primary-500 border-primary-500' : 'bg-white border-gray-300'"
                                            class="w-6 h-6 rounded-full border-2 flex items-center justify-center transition-colors"
                                        >
                                            <i data-lucide="check" class="h-4 w-4 text-white" x-show="balanceType === 'btc'"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hidden input to pass the balance type to the controller -->
                        <input type="hidden" name="balance_type" x-model="balanceType">
                    </div>
                    
                    <!-- Amount Input with Currency -->
                    <div class="mb-6 bg-gradient-to-br from-gray-50 to-white p-5 rounded-xl border border-gray-100 shadow-sm">
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Transfer Amount</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg font-bold" x-text="getCurrencySymbol()"></span>
                            </div>
                            <input 
                                type="number" 
                                name="amount" 
                                id="amount" 
                                x-model="amount"
                                @input="validateAmount()"
                                min="0.00000001" 
                                :max="getMaxBalance()"
                                :step="balanceType === 'fiat' ? '0.01' : '0.00000001'"
                                class="block w-full pl-12 pr-20 py-4 border-2 border-primary-100 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-2xl font-bold"
                                :placeholder="balanceType === 'fiat' ? '0.00' : '0.00000000'"
                                required
                            />
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-400 pointer-events-none" x-text="balanceType === 'fiat' ? '' : 'BTC'"></div>
                        </div>
                        
                        <!-- Quick Amount Buttons -->
                        <div class="mt-4 flex flex-wrap gap-2">
                            <!-- Fiat Quick Buttons -->
                            <template x-if="balanceType === 'fiat'">
                                <div class="flex flex-wrap gap-2">
                                    <button type="button" @click="amount = '100'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors"><?php echo e(Auth::user()->s_curr); ?>100</button>
                                    <button type="button" @click="amount = '500'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors"><?php echo e(Auth::user()->s_curr); ?>500</button>
                                    <button type="button" @click="amount = '1000'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors"><?php echo e(Auth::user()->s_curr); ?>1000</button>
                                    <button type="button" @click="amount = Math.floor(<?php echo e(Auth::user()->account_bal); ?>)" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors">All</button>
                                </div>
                            </template>
                            
                            <!-- BTC Quick Buttons -->
                            <template x-if="balanceType === 'btc'">
                                <div class="flex flex-wrap gap-2">
                                    <button type="button" @click="amount = '0.001'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors">0.001 BTC</button>
                                    <button type="button" @click="amount = '0.01'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors">0.01 BTC</button>
                                    <button type="button" @click="amount = '0.1'" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors">0.1 BTC</button>
                                    <button type="button" @click="amount = <?php echo e(Auth::user()->btc_balance ?? 0); ?>" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-sm font-medium text-gray-700 transition-colors">All</button>
                                </div>
                            </template>
                        </div>
                        
                        <!-- Conversion Preview -->
                        <div class="mt-4 text-sm text-gray-600" x-show="amount && parseFloat(amount) > 0">
                            <template x-if="balanceType === 'fiat'">
                                <p>Equivalent: <span class="font-medium" x-text="'≈ ' + (parseFloat(amount) / <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC'"></span></p>
                            </template>
                            <template x-if="balanceType === 'btc'">
                                <p>Equivalent: <span class="font-medium" x-text="'≈ <?php echo e(Auth::user()->s_curr); ?>' + (parseFloat(amount) * <?php echo e($btc_rate); ?>).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e(Auth::user()->curr); ?>'"></span></p>
                            </template>
                        </div>
                    </div>
                
                    <!-- Beneficiary Details Section -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center mr-3">
                                <i data-lucide="user" class="h-4 w-4 text-gray-600"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Beneficiary Details</h3>
                        </div>
                        
                        <div class="bg-white rounded-xl border border-gray-200 p-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- Beneficiary Account Name -->
                                <div>
                                    <label for="accountname" class="block text-sm font-medium text-gray-700 mb-1">Beneficiary Account Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="user" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="accountname" 
                                            id="accountname" 
                                            x-model="accountname"
                                            class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all"
                                            placeholder="Enter beneficiary's full name"
                                            required
                                        />
                                    </div>
                                </div>
                                
                                <!-- Beneficiary Account Number -->
                                <div>
                                    <label for="accountnumber" class="block text-sm font-medium text-gray-700 mb-1">Beneficiary Account Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="hash" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="accountnumber" 
                                            id="accountnumber" 
                                            x-model="accountnumber"
                                            class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all"
                                            placeholder="Enter account number"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                                <!-- Bank Name -->
                                <div>
                                    <label for="bankname" class="block text-sm font-medium text-gray-700 mb-1">Bank Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="building" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            name="bankname" 
                                            id="bankname" 
                                            x-model="bankname"
                                            class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all"
                                            placeholder="Enter bank name"
                                            required
                                        />
                                    </div>
                                </div>
                                
                                <!-- Account Type -->
                                <div>
                                    <label for="Accounttype" class="block text-sm font-medium text-gray-700 mb-1">Transfer Type</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="credit-card" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <select 
                                            name="Accounttype" 
                                            id="Accounttype" 
                                            x-model="Accounttype"
                                            class="block w-full pl-10 pr-10 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all appearance-none"
                                            required
                                        >
                                            <option value="Online Banking">Online Banking</option>
                                            <option value="Joint Account">Joint Account</option>
                                            <option value="Checking">Checking</option>
                                            <option value="Savings Account">Savings Account</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Transfer Information -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center mr-3">
                                <i data-lucide="info" class="h-4 w-4 text-gray-600"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Additional Information</h3>
                        </div>
                        
                        <div class="bg-white rounded-xl border border-gray-200 p-5">
                            <!-- Description -->
                            <div class="mb-5">
                                <label for="Description" class="block text-sm font-medium text-gray-700 mb-1">Description/Memo</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                        <i data-lucide="message-square" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                    <textarea 
                                        name="Description" 
                                        id="Description" 
                                        x-model="Description"
                                        class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all resize-none"
                                        placeholder="Enter transaction description or purpose of payment"
                                        rows="3"
                                    ></textarea>
                                </div>
                            </div>
                            
                            <!-- Transaction PIN -->
                            <div>
                                <label for="pin" class="block text-sm font-medium text-gray-700 mb-1">Transaction PIN</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        name="pin" 
                                        id="pin" 
                                        x-model="pin"
                                        class="block w-full pl-10 pr-10 py-3 border border-gray-200 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all"
                                        placeholder="Enter your transaction PIN"
                                        required
                                    />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button 
                                            type="button" 
                                            class="text-gray-400 hover:text-gray-500 focus:outline-none"
                                            @click="document.getElementById('pin').type = document.getElementById('pin').type === 'password' ? 'text' : 'password'"
                                        >
                                            <i data-lucide="eye" class="h-5 w-5" x-show="document.getElementById('pin').type === 'password'"></i>
                                            <i data-lucide="eye-off" class="h-5 w-5" x-show="document.getElementById('pin').type === 'text'" style="display: none;"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">This is your transaction PIN, not your login password</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Transfer Summary -->
                    <div x-show="amount > 0" class="mb-6 bg-gradient-to-br from-primary-50 to-white p-5 rounded-xl border border-primary-100 shadow-sm">
                        <div class="flex items-center mb-3">
                            <i data-lucide="clipboard-list" class="h-5 w-5 text-primary-500 mr-2"></i>
                            <h3 class="text-sm font-medium text-gray-700">Transaction Summary</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500">Amount</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-medium text-gray-700"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount || 0).toFixed(2)"></span></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-medium text-gray-700"><span x-text="parseFloat(amount || 0).toFixed(8)"></span> BTC</span>
                                </template>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500">Source</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-medium text-gray-700">Fiat Balance</span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-medium text-gray-700">Bitcoin Balance</span>
                                </template>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500">Fee</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-medium text-gray-700"><?php echo e(Auth::user()->s_curr); ?>0.00</span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-medium text-gray-700">0.00000000 BTC</span>
                                </template>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-2 mt-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 font-medium">Total</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-bold text-xl text-gray-900"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount || 0).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-bold text-xl text-gray-900"><span x-text="parseFloat(amount || 0).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                                
                                <div class="flex justify-between items-center mt-1">
                                    <span class="text-gray-500">New Balance After Transfer</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-medium text-gray-700"><?php echo e(Auth::user()->s_curr); ?><span x-text="(<?php echo e(Auth::user()->account_bal); ?> - parseFloat(amount || 0)).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-medium text-gray-700"><span x-text="(<?php echo e(Auth::user()->btc_balance ?? 0); ?> - parseFloat(amount || 0)).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <button 
                            type="submit" 
                            class="w-full mb-3 sm:mb-0 inline-flex items-center justify-center px-6 py-3.5 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors relative overflow-hidden"
                            :disabled="!amount || !accountname || !accountnumber || !bankname || !pin"
                            :class="{ 'opacity-60 cursor-not-allowed': !amount || !accountname || !accountnumber || !bankname || !pin }"
                        >
                            <span class="relative z-10 flex items-center">
                                <i data-lucide="eye" class="h-5 w-5 mr-2"></i>
                                Preview Transfer
                            </span>
                            <span 
                                class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-500 transform transition-transform duration-300 ease-out"
                                :class="{ 'translate-x-full': !amount || !accountname || !accountnumber || !bankname || !pin }"
                            ></span>
                        </button>
                        <a 
                            href="<?php echo e(route('dashboard')); ?>" 
                            class="w-full inline-flex items-center justify-center px-6 py-3.5 border border-gray-300 rounded-lg shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                        >
                            <i data-lucide="arrow-left" class="h-5 w-5 mr-2"></i>
                            Back to Dashboard
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Security Notice -->
        <div class="mt-6 mb-6 p-5 border border-gray-200 rounded-lg bg-white shadow-sm">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-0.5">
                    <i data-lucide="shield" class="h-5 w-5 text-primary-500"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-gray-900">Secure Transaction</h3>
                    <p class="text-xs text-gray-500 mt-1">All transfers are encrypted and processed securely. Your financial information is never stored on our servers.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Preview Modal -->
    <div 
        x-show="showPreview" 
        x-cloak 
        class="fixed inset-0 z-50 overflow-y-auto"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div 
                class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-50" 
                aria-hidden="true"
                @click="showPreview = false"
            ></div>
            
            <!-- Modal panel -->
            <div 
                class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white rounded-2xl shadow-xl sm:align-middle sm:max-w-lg"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
                <!-- Modal header -->
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <i data-lucide="file-check" class="h-5 w-5 mr-2 text-primary-600"></i>
                        Confirm Transfer Details
                    </h3>
                    <button 
                        type="button" 
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                        @click="showPreview = false"
                    >
                        <i data-lucide="x" class="h-5 w-5"></i>
                    </button>
                </div>
                
                <!-- Modal content -->
                <div class="space-y-4">
                    <!-- Transfer summary -->
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-lg p-4 border border-gray-100">
                        <div class="mb-3 pb-2 border-b border-gray-200">
                            <h4 class="text-sm font-medium text-gray-700">Transfer Summary</h4>
                        </div>
                        
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-500">Amount</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-medium text-gray-900"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount).toFixed(2)"></span></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-medium text-gray-900"><span x-text="parseFloat(amount).toFixed(8)"></span> BTC</span>
                                </template>
                            </div>
                            
                            <div class="flex justify-between">
                                <span class="text-gray-500">Recipient</span>
                                <span class="font-medium text-gray-900" x-text="accountname"></span>
                            </div>
                            
                            <div class="flex justify-between">
                                <span class="text-gray-500">Account Number</span>
                                <span class="font-medium text-gray-900" x-text="accountnumber"></span>
                            </div>
                            
                            <div class="flex justify-between">
                                <span class="text-gray-500">Bank</span>
                                <span class="font-medium text-gray-900" x-text="bankname"></span>
                            </div>
                            
                            <div class="flex justify-between">
                                <span class="text-gray-500">Account Type</span>
                                <span class="font-medium text-gray-900" x-text="Accounttype"></span>
                            </div>
                            
                            <div class="flex justify-between" x-show="Description.trim() !== ''">
                                <span class="text-gray-500">Description</span>
                                <span class="font-medium text-gray-900" x-text="Description"></span>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-2 mt-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-700 font-medium">Total</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-bold text-gray-900"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-bold text-gray-900"><span x-text="parseFloat(amount).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                                
                                <div class="flex justify-between mt-1">
                                    <span class="text-gray-500">New Balance After Transfer</span>
                                    <template x-if="balanceType === 'fiat'">
                                        <span class="font-medium text-gray-900"><?php echo e(Auth::user()->s_curr); ?><span x-text="(<?php echo e(Auth::user()->account_bal); ?> - parseFloat(amount)).toFixed(2)"></span></span>
                                    </template>
                                    <template x-if="balanceType === 'btc'">
                                        <span class="font-medium text-gray-900"><span x-text="(<?php echo e(Auth::user()->btc_bal); ?> - parseFloat(amount)).toFixed(8)"></span> BTC</span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Security notice -->
                    <div class="flex items-start text-sm mb-2 p-3 bg-amber-50 border-l-4 border-amber-400 rounded-r-md">
                        <i data-lucide="alert-triangle" class="h-5 w-5 text-amber-500 mr-2 flex-shrink-0"></i>
                        <p class="text-amber-800">
                            Please verify the transfer details carefully before proceeding. Once confirmed, transfers cannot be reversed.
                        </p>
                    </div>
                    
                    <!-- Action buttons -->
                    <div class="flex flex-col-reverse sm:flex-row sm:space-x-3">
                        <button 
                            type="button" 
                            class="w-full mt-3 sm:mt-0 inline-flex justify-center items-center px-4 py-3 border border-gray-300 rounded-lg shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors"
                            @click="showPreview = false"
                        >
                            <i data-lucide="x" class="h-5 w-5 mr-2 text-gray-400"></i>
                            Cancel
                        </button>
                        
                        <form action="<?php echo e(route('localtransfer')); ?>" method="POST" class="w-full" id="transferForm">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="amount" :value="amount">
                            <input type="hidden" name="accountname" :value="accountname">
                            <input type="hidden" name="accountnumber" :value="accountnumber">
                            <input type="hidden" name="bankname" :value="bankname">
                            <input type="hidden" name="Accounttype" :value="Accounttype">
                            <input type="hidden" name="Description" :value="Description">
                            <input type="hidden" name="pin" :value="pin">
                            
                            <button 
                                type="button" 
                                id="confirmTransferBtn"
                                class="w-full inline-flex justify-center items-center px-4 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                                :class="{'opacity-75 cursor-not-allowed': isSubmitting}"
                                :disabled="isSubmitting"
                            >
                                <div class="flex items-center">
                                    <i data-lucide="check-circle" class="h-5 w-5 mr-2"></i>
                                    Confirm Transfer
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Processing Modal (Hidden by default) -->
<div id="processingModal" class="fixed inset-0 z-50 overflow-y-auto hidden">

    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-70"></div>
        
        <!-- Modal panel -->
        <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white rounded-2xl shadow-xl sm:align-middle sm:max-w-lg">
            <!-- Processing animation and content -->
            <div class="text-center py-6">
                <!-- Animated bank card with pulse effect -->
                <div class="relative mx-auto w-64 h-40 mb-8 perspective-500">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500 to-primary-700 rounded-xl shadow-lg transform rotate-y-10 rotate-x-5 animate-card-float">
                        <!-- Card chip -->
                        <div class="absolute top-6 left-6 w-10 h-8 bg-yellow-300 bg-opacity-80 rounded-md grid grid-cols-3 grid-rows-3 gap-px p-1">
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                        </div>
                        
                        <!-- Animated pulse circles -->
                        <div class="absolute bottom-6 right-8 w-8 h-8 rounded-full bg-blue-400 bg-opacity-70 flex items-center justify-center">
                            <div class="absolute w-full h-full rounded-full bg-blue-400 animate-ping opacity-75"></div>
                            <div class="absolute w-8 h-8 rounded-full border-2 border-white border-opacity-50"></div>
                            <div class="absolute w-6 h-6 rounded-full border-2 border-white border-opacity-50"></div>
                        </div>
                        
                        <!-- Card number dots -->
                        <div class="absolute bottom-14 left-6 right-6 flex justify-between">
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                        </div>
                        
                        <!-- Card holder info -->
                        <div class="absolute bottom-6 left-6 text-white text-opacity-80 text-xs font-medium tracking-wider">
                            <span id="cardHolderName"></span>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-2" id="processingMessage">Initiating transfer...</h3>
                <p class="text-gray-500 mb-6">Please do not close this window</p>
                
                <!-- Progress bar with percentage -->
                <div class="mb-6">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                        <div id="progressBar" class="bg-primary-600 h-2.5 rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
                    </div>
                    <p class="text-xs font-medium text-gray-500 mt-2"><span id="progressPercentage">0</span>% Complete</p>
                </div>
                
                <!-- Transaction details -->
                <div class="bg-gray-50 rounded-lg p-4 text-left border border-gray-200 mb-4">
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-500">Amount</p>
                            <p class="font-medium text-gray-900"><?php echo e(Auth::user()->s_curr); ?><span id="modalAmount"></span></p>
                        </div>
                        <div>
                            <p class="text-gray-500">To</p>
                            <p class="font-medium text-gray-900" id="modalRecipient"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Bank</p>
                            <p class="font-medium text-gray-900" id="modalBank"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Account</p>
                            <p class="font-medium text-gray-900" id="modalAccount"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Security message -->
                <div class="flex items-center justify-center text-sm text-gray-500">
                    <i data-lucide="shield" class="h-4 w-4 mr-2 text-primary-500"></i>
                    <span>Secured by bank-level encryption</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Account Status Modal (Hidden by default) -->
<div id="accountStatusModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-75"></div>
        
        <!-- Modal panel -->
        <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white rounded-2xl shadow-xl sm:align-middle sm:max-w-lg">
            <div class="text-center py-6">
                <div class="mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-full bg-amber-100">
                    <i data-lucide="alert-circle" class="h-8 w-8 text-amber-600"></i>
                </div>
                
                <h3 id="accountStatusTitle" class="text-xl font-bold text-gray-900 mb-2">Account Status</h3>
                <p id="accountStatusMessage" class="text-gray-500 mb-6">Your account status requires attention.</p>
                
                <div class="mt-6">
                    <button type="button" onclick="window.location.href='<?php echo e(route('dashboard')); ?>'" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i data-lucide="home" class="h-5 w-5 mr-2"></i>
                        Return to Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
    
    .perspective-500 {
        perspective: 500px;
    }
    
    .rotate-y-10 {
        transform: rotateY(10deg);
    }
    
    .rotate-x-5 {
        transform: rotateX(5deg);
    }
    
    @keyframes  card-float {
        0%, 100% { transform: translateY(0) rotateY(10deg) rotateX(5deg); }
        50% { transform: translateY(-10px) rotateY(15deg) rotateX(5deg); }
    }
    
    .animate-card-float {
        animation: card-float 3s ease-in-out infinite;
    }
</style>

<script>
    // Function to show account status modal
    function showAccountStatusModal(status, message) {
        // Get modal element
        const statusModal = document.getElementById('accountStatusModal');
        
        // Set modal content based on status
        const statusColor = status === 'on-hold' ? 'amber' : 'red';
        const statusIcon = status === 'on-hold' ? 'alert-circle' : 'shield-off';
        const statusTitle = status === 'on-hold' ? 'Account On Hold' : 'Account Suspended';
        
        // Update icon container color
        const iconContainer = statusModal.querySelector('.rounded-full');
        if (status === 'on-hold') {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-full bg-amber-100';
        } else {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-full bg-red-100';
        }
        
        // Update icon
        const icon = statusModal.querySelector('[data-lucide]');
        icon.setAttribute('data-lucide', statusIcon);
        if (status === 'on-hold') {
            icon.className = 'h-8 w-8 text-amber-600';
        } else {
            icon.className = 'h-8 w-8 text-red-600';
        }
        
        // Update text content
        statusModal.querySelector('#accountStatusTitle').textContent = statusTitle;
        statusModal.querySelector('#accountStatusMessage').textContent = message;
        
        // Show modal
        statusModal.classList.remove('hidden');
        
        // Reinitialize Lucide icons to update the icon
        lucide.createIcons();
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Get DOM elements
        const confirmBtn = document.getElementById('confirmTransferBtn');
        const transferForm = document.getElementById('transferForm');
        const processingModal = document.getElementById('processingModal');
        const progressBar = document.getElementById('progressBar');
        const processingMessage = document.getElementById('processingMessage');
        
        // Processing messages for different stages
        const processingMessages = [
            'Initiating transfer...',
            'Verifying account details...',
            'Processing transaction...',
            'Confirming with bank...',
            'Finalizing transfer...'
        ];
        
        // Add click event listener to confirm button
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get form data for display in modal
                const amountInput = document.querySelector('[name="amount"]');
                const accountnameInput = document.querySelector('[name="accountname"]');
                const accountnumberInput = document.querySelector('[name="accountnumber"]');
                const banknameInput = document.querySelector('[name="bankname"]');
                
                // Update modal with form data
                document.getElementById('modalAmount').textContent = parseFloat(amountInput.value).toFixed(2);
                document.getElementById('modalRecipient').textContent = accountnameInput.value;
                document.getElementById('modalBank').textContent = banknameInput.value;
                document.getElementById('modalAccount').textContent = accountnumberInput.value;
                document.getElementById('cardHolderName').textContent = accountnameInput.value.substring(0, 20);
                
                // Show processing modal
                processingModal.classList.remove('hidden');
                
                // Reset progress
                let progress = 0;
                let currentStage = 0;
                progressBar.style.width = '0%';
                processingMessage.textContent = processingMessages[0];
                
                // Simulate processing with progress updates
                const totalDuration = 5000; // 5 seconds minimum
                const interval = 50; // Update every 50ms for smooth animation
                const steps = totalDuration / interval;
                const progressIncrement = 100 / steps;
                
                const progressInterval = setInterval(function() {
                    progress += progressIncrement;
                    progressBar.style.width = progress + '%';
                    document.getElementById('progressPercentage').textContent = Math.min(Math.round(progress), 100);
                    
                    // Update message at certain progress points
                    if (progress >= 20 && currentStage < 1) {
                        currentStage = 1;
                        processingMessage.textContent = processingMessages[1];
                    } else if (progress >= 40 && currentStage < 2) {
                        currentStage = 2;
                        processingMessage.textContent = processingMessages[2];
                    } else if (progress >= 60 && currentStage < 3) {
                        currentStage = 3;
                        processingMessage.textContent = processingMessages[3];
                    } else if (progress >= 80 && currentStage < 4) {
                        currentStage = 4;
                        processingMessage.textContent = processingMessages[4];
                    }
                    
                    // When progress is complete
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                        
                        // Check account status before submitting the form
                        fetch('<?php echo e(route("check.account.status")); ?>', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ check_status: true }),
                            credentials: 'same-origin'
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'on-hold' || data.status === 'suspended') {
                                // Hide processing modal
                                processingModal.classList.add('hidden');
                                
                                // Show account status modal
                                showAccountStatusModal(data.status, data.message);
                            } else {
                                // Account is active, proceed with form submission
                                setTimeout(function() {
                                    // Ensure form is submitted as POST
                                    const form = document.getElementById('transferForm');
                                    form.method = 'post';
                                    form.submit();
                                }, 200);
                            }
                        })
                        .catch(error => {
                            console.error('Error checking account status:', error);
                            // Proceed with form submission anyway if there's an error checking status
                            setTimeout(function() {
                                const form = document.getElementById('transferForm');
                                form.method = 'post';
                                form.submit();
                            }, 200);
                        });
                    }
                }, interval);
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/user/localtransfer.blade.php ENDPATH**/ ?>