
<div class="lg:hidden mb-6" x-data="{ 
    currentCard: 0, 
    totalCards: 2,
    startX: 0,
    currentX: 0,
    isDragging: false,
    handleTouchStart(e) {
        this.startX = e.touches[0].clientX;
        this.isDragging = true;
    },
    handleTouchMove(e) {
        if (!this.isDragging) return;
        this.currentX = e.touches[0].clientX;
    },
    handleTouchEnd() {
        if (!this.isDragging) return;
        const diffX = this.startX - this.currentX;
        const threshold = 50;
        
        if (Math.abs(diffX) > threshold) {
            if (diffX > 0 && this.currentCard < this.totalCards - 1) {
                this.currentCard++;
            } else if (diffX < 0 && this.currentCard > 0) {
                this.currentCard--;
            }
        }
        
        this.isDragging = false;
        this.startX = 0;
        this.currentX = 0;
    }
}">
    <!-- Card Container -->
    <div class="relative overflow-hidden">
        <div class="flex transition-transform duration-300 ease-in-out" 
             :style="`transform: translateX(-${currentCard * 100}%)`"
             @touchstart="handleTouchStart($event)"
             @touchmove="handleTouchMove($event)"
             @touchend="handleTouchEnd()"
             @mousedown="handleTouchStart({touches: [{clientX: $event.clientX}]})"
             @mousemove="isDragging && handleTouchMove({touches: [{clientX: $event.clientX}]})"
             @mouseup="handleTouchEnd()"
             @mouseleave="handleTouchEnd()"
             class="cursor-grab active:cursor-grabbing">
            
            <!-- Fiat Balance Card -->
            <div class="w-full flex-shrink-0">
                <div class="bg-gradient-to-br from-primary-600 via-primary-500 to-primary-700 dark:from-primary-700 dark:via-primary-600 dark:to-primary-800 rounded-2xl p-4 text-white shadow-xl dark:shadow-2xl dark:shadow-primary-900/50 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-3 right-3 w-24 h-24 bg-white rounded-full -translate-y-6 translate-x-6"></div>
                        <div class="absolute bottom-3 left-3 w-20 h-20 bg-white rounded-full translate-y-4 -translate-x-4"></div>
                    </div>
                    <div class="relative z-10">
                        <!-- Account Info -->
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <p class="text-white/60 text-xs uppercase tracking-wide"><?php echo e($settings->site_name); ?> Bank</p>
                                <p class="text-white/80 text-xs"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></p>
                            </div>
                            <div class="text-right">
                                <p class="text-white/60 text-xs">Fiat Account</p>
                                <p class="text-white/80 text-xs font-mono">•••• <?php echo e($walletBalance->cardLastFour); ?></p>
                            </div>
                        </div>

                        <!-- Balance Section -->
                        <div class="text-center mb-3">
                            <p class="text-white/80 text-xs mb-1">Available Balance</p>
                            <div class="flex items-center justify-center space-x-2">
                                <p class="text-3xl font-bold" x-show="balanceVisible" x-transition>
                                    <?php echo e($walletBalance->currency); ?><?php echo e(number_format($walletBalance->amount_raw, 2)); ?>

                                </p>
                                <p class="text-3xl font-bold" x-show="!balanceVisible" x-transition>
                                    <?php echo e($walletBalance->currency); ?> ******
                                </p>
                                <button @click="toggleBalance()" @touchstart.stop @mousedown.stop class="text-white/60 hover:text-white">
                                    <i x-show="balanceVisible" class="fa-solid fa-eye-slash text-base"></i>
                                    <i x-show="!balanceVisible" class="fa-solid fa-eye text-base"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Account Status -->
                        <div class="flex justify-between items-center text-xs">
                            <div class="flex items-center space-x-2">
                                <div class="w-1.5 h-1.5 bg-green-400 rounded-full"></div>
                                <span class="text-white/70">Active</span>
                            </div>
                            <div class="text-white/70">
                                Last updated: <?php echo e(now()->format('M d, H:i')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Crypto Balance Card -->
            <div class="w-full flex-shrink-0">
                <div class="bg-gradient-to-br from-secondary-700 via-secondary-600 to-secondary-800 dark:from-secondary-800 dark:via-secondary-700 dark:to-secondary-900 rounded-2xl p-4 text-white shadow-xl dark:shadow-2xl dark:shadow-secondary-900/50 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-3 right-3 w-24 h-24 bg-white rounded-full -translate-y-6 translate-x-6"></div>
                        <div class="absolute bottom-3 left-3 w-20 h-20 bg-white rounded-full translate-y-4 -translate-x-4"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <!-- Account Info -->
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <p class="text-white/60 text-xs uppercase tracking-wide">Bitcoin Wallet</p>
                                <p class="text-white/80 text-xs"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></p>
                            </div>
                            <div class="text-right">
                                <p class="text-white/60 text-xs">Crypto Account</p>
                                <div class="flex items-center space-x-1">
                                    <i class="fab fa-bitcoin text-white/80 text-xs"></i>
                                    <span class="text-white/80 text-xs">BTC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Balance Section -->
                        <div class="text-center mb-3">
                            <p class="text-white/80 text-xs mb-1">Bitcoin Balance</p>
                            <div class="flex items-center justify-center space-x-2">
                                <p class="text-3xl font-bold" x-show="balanceVisible" x-transition>
                                    <?php echo e(number_format(Auth::user()->btc_balance ?? 0, 6)); ?> BTC
                                </p>
                                <p class="text-3xl font-bold" x-show="!balanceVisible" x-transition>
                                    ••••••• BTC
                                </p>
                                <button @click="toggleBalance()" @touchstart.stop @mousedown.stop class="text-white/60 hover:text-white">
                                    <i x-show="balanceVisible" class="fa-solid fa-eye-slash text-base"></i>
                                    <i x-show="!balanceVisible" class="fa-solid fa-eye text-base"></i>
                                </button>
                            </div>
                            <p class="text-white/60 text-xs mt-1" x-show="balanceVisible" x-transition>
                                ≈ <?php echo e($walletBalance->currency); ?><?php echo e(number_format((Auth::user()->btc_balance ?? 0) * $btc_rate, 2)); ?>

                            </p>
                        </div>

                        <!-- BTC Rate -->
                        <div class="flex justify-between items-center text-xs">
                            <div class="flex items-center space-x-2">
                                <div class="w-1.5 h-1.5 bg-secondary-400 rounded-full"></div>
                                <span class="text-white/70">1 BTC = <?php echo e($walletBalance->currency); ?><?php echo e(number_format($btc_rate, 0)); ?></span>
                            </div>
                            <div class="text-white/70">
                                Live Rate
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Indicators -->
    <div class="lg:hidden flex justify-center space-x-2 mt-3">
        <button @click="currentCard = 0" 
                :class="currentCard === 0 ? 'bg-white' : 'bg-white/30'" 
                class="w-2 h-2 rounded-full transition-colors duration-200"></button>
        <button @click="currentCard = 1" 
                :class="currentCard === 1 ? 'bg-white' : 'bg-white/30'" 
                class="w-2 h-2 rounded-full transition-colors duration-200"></button>
    </div>

    <!-- Swipe Instructions -->
    <div class="lg:hidden text-center mt-2">
        <p class="text-white/50 text-xs">
            <i class="fa-solid fa-hand-pointer mr-1"></i>
            Swipe to switch between accounts
        </p>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/mobile-wallet-cards.blade.php ENDPATH**/ ?>