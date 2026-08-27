
<div class="bg-gradient-to-br from-primary-600 via-primary-500 to-primary-700 dark:from-primary-700 dark:via-primary-600 dark:to-primary-800 rounded-2xl p-6 text-white shadow-xl dark:shadow-2xl dark:shadow-primary-900/50 relative overflow-hidden z-10">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-6 right-6 w-32 h-32 bg-white rounded-full -translate-y-8 translate-x-8"></div>
        <div class="absolute bottom-6 left-6 w-24 h-24 bg-white rounded-full translate-y-6 -translate-x-6"></div>
        <div class="absolute top-1/2 left-1/2 w-20 h-20 bg-white rounded-full -translate-x-10 -translate-y-10"></div>
    </div>
    
    <div class="relative z-10">
        <!-- Top Row: Bank Info and Account Number -->
        <div class="flex justify-between items-start mb-6">
            <div>
                <div class="flex items-center space-x-2 mb-1">
                    <div class="w-6 h-6 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-university text-white text-xs"></i>
                    </div>
                    <p class="text-white/90 text-base font-semibold"><?php echo e($settings->site_name); ?> Bank</p>
                </div>
                <p class="text-white/70 text-xs">Primary Account</p>
            </div>
            <div class="text-right bg-white/10 dark:bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2">
                <p class="text-white/70 dark:text-white/80 text-xs uppercase tracking-wide mb-1">Account Number</p>
                <p class="text-white font-mono text-sm">•••• •••• •••• <?php echo e($walletBalance->cardLastFour); ?></p>
            </div>
        </div>

        <!-- Middle Row: Account Holder and Balances -->
        <div class="grid grid-cols-3 gap-6 mb-6">
            <!-- Account Holder Info -->
            <div>
                <p class="text-white/70 text-xs mb-1">Account Holder</p>
                <p class="text-white text-base font-semibold mb-3"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></p>
                
                <!-- Account Status -->
                <div class="space-y-1">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                        <span class="text-white/80 text-xs">Account Active</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-shield-check text-green-400 text-xs"></i>
                        <span class="text-white/80 text-xs">Verified & Secured</span>
                    </div>
                </div>
            </div>

            <!-- Fiat Balance Display -->
            <div class="text-center">
                <p class="text-white/70 text-xs mb-1">Fiat Balance</p>
                <div class="flex items-center justify-center space-x-2 mb-1">
                    <div class="text-center">
                        <p class="text-2xl font-bold leading-none" x-show="balanceVisible" x-transition>
                            <?php echo e($walletBalance->currency); ?><?php echo e(number_format($walletBalance->amount_raw, 2)); ?>

                        </p>
                        <p class="text-2xl font-bold leading-none" x-show="!balanceVisible" x-transition>
                            <?php echo e($walletBalance->currency); ?> ••••••
                        </p>
                    </div>
                    <button @click="toggleBalance()" class="text-white/60 hover:text-white transition-colors p-1">
                        <i x-show="balanceVisible" class="fa-solid fa-eye-slash text-sm"></i>
                        <i x-show="!balanceVisible" class="fa-solid fa-eye text-sm"></i>
                    </button>
                </div>
                <p class="text-white/60 text-xs"><?php echo e(Auth::user()->curr); ?> Balance</p>
            </div>

            <!-- Crypto Balance Display -->
            <div class="text-center">
                <p class="text-white/70 text-xs mb-1">Bitcoin Balance</p>
                <div class="mb-1">
                    <p class="text-lg font-bold leading-none" x-show="balanceVisible" x-transition>
                        <?php echo e(number_format(Auth::user()->btc_balance ?? 0, 6)); ?> BTC
                    </p>
                    <p class="text-lg font-bold leading-none" x-show="!balanceVisible" x-transition>
                        ••••••• BTC
                    </p>
                    <p class="text-white/60 text-xs mt-1" x-show="balanceVisible" x-transition>
                        ≈ <?php echo e($walletBalance->currency); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2)); ?>

                    </p>
                </div>
                <div class="flex items-center justify-center space-x-1">
                    <div class="w-1.5 h-1.5 bg-orange-400 rounded-full"></div>
                    <span class="text-white/60 text-xs">1 BTC = <?php echo e($walletBalance->currency); ?><?php echo e(number_format($btc_rate, 0)); ?></span>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Action Buttons -->
        <div class="flex justify-between items-center">
            <!-- Left: Total Portfolio Value -->
            <div class="bg-white/10 dark:bg-white/20 backdrop-blur-sm rounded-lg p-3">
                <p class="text-white/60 dark:text-white/70 text-xs mb-1">Total Portfolio</p>
                <p class="text-white text-lg font-bold" x-show="balanceVisible" x-transition>
                    <?php echo e($walletBalance->currency); ?><?php echo e(number_format($walletBalance->amount_raw + ((Auth::user()->btc_balance ?? 0) * $btc_rate), 2)); ?>

                </p>
                <p class="text-white text-lg font-bold" x-show="!balanceVisible" x-transition>
                    <?php echo e($walletBalance->currency); ?> ••••••
                </p>
            </div>

            <!-- Right: Action Buttons -->
            <div class="flex space-x-3">
                <button @click="showSendMoney = true" class="bg-white/20 dark:bg-white/30 backdrop-blur-sm px-6 py-3 rounded-lg text-white font-semibold hover:bg-white/30 dark:hover:bg-white/40 transition-all duration-200 flex items-center space-x-2">
                    <i class="fa-solid fa-paper-plane text-sm"></i>
                    <span class="text-sm">Send Money</span>
                </button>
                <button onclick="window.location.href='<?php echo e(route('deposits')); ?>'" class="bg-white dark:bg-gray-100 text-primary-600 dark:text-primary-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 dark:hover:bg-gray-200 transition-all duration-200 flex items-center space-x-2 shadow-lg dark:shadow-gray-900/25">
                    <i class="fa-solid fa-plus text-sm"></i>
                    <span class="text-sm">Add Money</span>
                </button>
            </div>
        </div>
    </div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/desktop-balance-card.blade.php ENDPATH**/ ?>