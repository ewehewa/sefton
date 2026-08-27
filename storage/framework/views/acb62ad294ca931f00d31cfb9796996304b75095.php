



<div class="lg:hidden mb-4">
    <!-- Mobile Header with Extended Gradient Background -->
    <div class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 text-white px-4 pt-6 pb-8 rounded-b-3xl">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-2">
                <img src="<?php echo e($financeUser->avatarUrl); ?>" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white/20">
                <div>
                    <p class="text-white/80 text-xs" x-text="greeting + ' 👋'"></p>
                    <p class="text-white font-semibold text-base">
                        <?php echo e(explode(' ', $financeUser->name)[0]); ?> <?php echo e(Auth::user()->lastname); ?>

                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <!-- Dark Mode Toggle -->
                <button @click="toggleDarkMode()" 
                        class="w-10 h-10 bg-white/10 dark:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-200 hover:bg-white/20 dark:hover:bg-white/30">
                    <i x-show="!darkMode" class="fa-solid fa-moon text-white text-base"></i>
                    <i x-show="darkMode" class="fa-solid fa-sun text-yellow-400 text-base"></i>
                </button>

                <!-- Notifications -->
                <div class="relative">
                    <button @click="showMobileNotifications = !showMobileNotifications" class="w-10 h-10 bg-white/10 dark:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-200 hover:bg-white/20 dark:hover:bg-white/30">
                        <i class="fa-solid fa-bell text-white text-base"></i>
                    </button>
                    <?php
                        $mobileUnreadCount = Auth::user()->notifications()->where('is_read', false)->count();
                    ?>
                    <?php if($mobileUnreadCount > 0): ?>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 dark:bg-red-600 rounded-full flex items-center justify-center text-xs font-bold text-white animate-pulse">
                            <?php echo e($mobileUnreadCount > 9 ? '9+' : $mobileUnreadCount); ?>

                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Swipeable Mobile Wallet Cards -->
        <div class="mb-6" x-data="{ 
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
                                        <button @click="toggleBalance()" @touchstart.stop 
    @mousedown.stop class="text-white/60 hover:text-white">
                                            <i x-show="balanceVisible" class="fa-solid fa-eye-slash text-base"></i>
                                            <i x-show="!balanceVisible" class="fa-solid fa-eye text-base"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Account Status -->
                                <div class="flex justify-between items-center text-xs">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-1.5 h-1.5 bg-green-400"></div>
                                       <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e(Auth::user()->account_status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'); ?>">
                                <span class="h-1.5 w-1.5 rounded-full <?php echo e(Auth::user()->account_status == 'active' ? 'bg-green-600' : 'bg-red-600'); ?> mr-1"></span>
                                <?php echo e(ucfirst(Auth::user()->account_status)); ?>

                            </span>
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
                                        <button @click="toggleBalance()" @touchstart.stop 
    @mousedown.stop class="text-white/60 hover:text-white">
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
            <div class="flex justify-center space-x-2 mt-3">
                <button @click="currentCard = 0" 
                        :class="currentCard === 0 ? 'bg-white' : 'bg-white/30'" 
                        class="w-2 h-2 rounded-full transition-colors duration-200"></button>
                <button @click="currentCard = 1" 
                        :class="currentCard === 1 ? 'bg-white' : 'bg-white/30'" 
                        class="w-2 h-2 rounded-full transition-colors duration-200"></button>
            </div>

            <!-- Swipe Instructions -->
            <div class="text-center mt-2">
                <p class="text-white/50 text-xs">
                    <i class="fa-solid fa-hand-pointer mr-1"></i>
                    Swipe to switch between accounts
                </p>
            </div>
        </div>

        <!-- Mobile Quick Actions - Circular Design (Inside Gradient) -->
        <div class="grid grid-cols-4 gap-3">
            <!-- Top Up - Circular -->
            <button onclick="window.location.href='<?php echo e(route('deposits')); ?>'" class="flex flex-col items-center justify-center">
                <div class="w-14 h-14 bg-yellow-400 dark:bg-yellow-500 rounded-full flex items-center justify-center shadow-lg dark:shadow-yellow-500/25 mb-1">
                    <i class="fa-solid fa-plus text-black dark:text-gray-900 text-lg"></i>
                </div>
                <span class="text-white text-xs font-medium">Top Up</span>
            </button>

            <!-- Send - Circular -->
            <button @click="showSendMoney = true" class="flex flex-col items-center justify-center">
                <div class="w-14 h-14 bg-white/20 dark:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg dark:shadow-white/10 mb-1 border border-white/10 dark:border-white/20">
                    <i class="fa-solid fa-paper-plane text-white text-lg"></i>
                </div>
                <span class="text-white text-xs font-medium">Send</span>
            </button>

            <!-- Receive -->
            <button @click="showReceiveModal = true" class="flex flex-col items-center justify-center">
                <div class="w-14 h-14 bg-white/20 dark:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg dark:shadow-white/10 mb-1 border border-white/10 dark:border-white/20">
                    <i class="fa-solid fa-arrow-down text-white text-lg"></i>
                </div>
                <span class="text-white text-xs font-medium">Receive</span>
            </button>

            <!-- More -->
            <button @click="showMobileMenu = true" class="flex flex-col items-center justify-center">
                <div class="w-14 h-14 bg-white/20 dark:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg dark:shadow-white/10 mb-1 border border-white/10 dark:border-white/20">
                    <i class="fa-solid fa-grid-2 text-white text-lg"></i>
                </div>
                <span class="text-white text-xs font-medium">More</span>
            </button>
        </div>
    </div>

    <!-- Mobile Notifications Panel -->
    <div x-show="showMobileNotifications" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0 -translate-y-4" 
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100 translate-y-0" 
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="fixed inset-0 z-50 bg-black/20 backdrop-blur-sm" 
         @click="showMobileNotifications = false">
        
        <div @click.stop class="absolute top-0 left-0 right-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 text-white rounded-b-3xl shadow-2xl dark:shadow-slate-900/50 max-h-[80vh] overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b border-white/10 dark:border-white/20">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/10 dark:bg-white/20 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid fa-bell text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Notifications</h3>
                        <?php
                            $mobileUnreadNotifications = Auth::user()->notifications()->where('is_read', false)->count();
                        ?>
                        <?php if($mobileUnreadNotifications > 0): ?>
                            <p class="text-xs text-white/60"><?php echo e($mobileUnreadNotifications); ?> new notification<?php echo e($mobileUnreadNotifications > 1 ? 's' : ''); ?></p>
                        <?php else: ?>
                            <p class="text-xs text-white/60">All caught up!</p>
                        <?php endif; ?>
                    </div>
                </div>
                <button @click="showMobileNotifications = false" class="w-8 h-8 bg-white/10 dark:bg-white/20 rounded-xl flex items-center justify-center hover:bg-white/20 dark:hover:bg-white/30 transition-colors">
                    <i class="fa-solid fa-times text-white text-sm"></i>
                </button>
            </div>

            <!-- Notifications List -->
            <div class="overflow-y-auto max-h-96 custom-scrollbar">
                <?php
                    $mobileNotifications = Auth::user()->notifications()->latest()->take(8)->get();
                ?>
                
                <?php $__empty_1 = true; $__currentLoopData = $mobileNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-4 border-b border-white/5 dark:border-white/10 hover:bg-white/5 dark:hover:bg-white/10 transition-colors <?php echo e(!$notification->is_read ? 'bg-white/5 dark:bg-white/10' : ''); ?>">
                    <div class="flex items-start space-x-3">
                        <?php
                            $mobileIconClass = 'fa-solid fa-bell';
                            $mobileColorClass = 'primary';
                            
                            switch($notification->type) {
                                case 'success':
                                    $mobileIconClass = 'fa-solid fa-check-circle';
                                    $mobileColorClass = 'green';
                                    break;
                                case 'warning':
                                    $mobileIconClass = 'fa-solid fa-exclamation-triangle';
                                    $mobileColorClass = 'yellow';
                                    break;
                                case 'danger':
                                    $mobileIconClass = 'fa-solid fa-exclamation-circle';
                                    $mobileColorClass = 'red';
                                    break;
                                case 'info':
                                default:
                                    $mobileIconClass = 'fa-solid fa-info-circle';
                                    $mobileColorClass = 'blue';
                                    break;
                            }
                        ?>
                        <div class="w-10 h-10 bg-<?php echo e($mobileColorClass); ?>-500/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i class="<?php echo e($mobileIconClass); ?> text-<?php echo e($mobileColorClass); ?>-400 text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-white"><?php echo e($notification->title ?? 'Notification'); ?></p>
                                    <p class="text-xs text-white/70 mt-1 line-clamp-2"><?php echo e($notification->message ?? 'You have a new notification.'); ?></p>
                                </div>
                                <?php if(!$notification->is_read): ?>
                                    <div class="w-2 h-2 bg-primary-400 rounded-full flex-shrink-0 mt-2 ml-2"></div>
                                <?php endif; ?>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <p class="text-xs text-white/50 flex items-center">
                                    <i class="fa-solid fa-clock mr-1"></i>
                                    <?php echo e($notification->created_at->diffForHumans()); ?>

                                </p>
                                <?php if(!$notification->is_read): ?>
                                    <span class="text-xs bg-primary-500/20 text-primary-300 px-2 py-1 rounded-full font-medium">New</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="p-8 text-center">
                    <div class="w-16 h-16 bg-white/10 dark:bg-white/20 rounded-3xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-bell-slash text-white/40 dark:text-white/60 text-2xl"></i>
                    </div>
                    <p class="text-white font-semibold mb-1">No notifications yet</p>
                    <p class="text-xs text-white/60 dark:text-white/70">We'll notify you when something happens</p>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Footer Actions -->
            <?php if($mobileNotifications->count() > 0): ?>
            <div class="p-4 border-t border-white/10 dark:border-white/20 bg-white/5 dark:bg-white/10">
                <div class="flex items-center justify-between">
                    <button class="text-sm font-semibold text-white/70 dark:text-white/80 hover:text-white transition-colors">
                        Mark all as read
                    </button>
                    <a href="<?php echo e(route('notifications')); ?>" class="text-sm font-semibold text-primary-400 dark:text-primary-300 hover:text-primary-300 dark:hover:text-primary-200 transition-colors flex items-center">
                        View All
                        <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Quick Transfer Section -->
    <div class="px-4 mb-4 mt-4" x-data="dashboardQuickTransfer()" x-init="loadBeneficiaries()">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Quick Transfer</h3>
            <a href="<?php echo e(route('beneficiaries.index')); ?>" class="text-xs text-primary-600 dark:text-primary-400 font-medium flex items-center hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
                View All
                <i class="fa-solid fa-chevron-right ml-1 text-xs"></i>
            </a>
        </div>
        
        <div class="flex space-x-3 overflow-x-auto pb-2" x-show="!loading">
            <!-- Add New Beneficiary -->
            <a href="<?php echo e(route('localtransfer')); ?>" class="flex-shrink-0 flex flex-col items-center justify-center group">
                <div class="w-14 h-14 rounded-full border-2 border-dashed border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 flex items-center justify-center mb-1 group-hover:bg-gray-100 dark:group-hover:bg-gray-700 group-hover:border-primary-400 dark:group-hover:border-primary-500 transition-all duration-200">
                    <i class="fa-solid fa-plus text-gray-400 dark:text-gray-500 text-base group-hover:text-primary-500 dark:group-hover:text-primary-400 transition-colors"></i>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400 text-center group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">Add New</span>
            </a>

            <!-- Beneficiaries List -->
            <template x-for="beneficiary in beneficiaries.slice(0, 6)" :key="beneficiary.id">
                <div class="flex-shrink-0 flex flex-col items-center justify-center group relative">
                    <button 
                        @click="selectBeneficiary(beneficiary)"
                        class="relative w-14 h-14 rounded-full flex items-center justify-center mb-1 border-2 border-white dark:border-gray-800 shadow-sm dark:shadow-gray-900/25 hover:scale-105 transition-all duration-200"
                        :class="beneficiary.color"
                    >
                        <span class="text-white font-semibold text-sm" x-text="beneficiary.initials"></span>
                        
                        <!-- Favorite Star -->
                        <div 
                            x-show="beneficiary.is_favorite" 
                            class="absolute -top-1 -right-1 w-4 h-4 bg-yellow-400 rounded-full flex items-center justify-center"
                        >
                            <i class="fa-solid fa-star text-white text-xs"></i>
                        </div>
                    </button>
                    
                    <span class="text-xs text-gray-700 dark:text-gray-300 text-center max-w-16 truncate" x-text="beneficiary.name"></span>
                </div>
            </template>

            <!-- Loading State -->
            <template x-if="loading">
                <div class="flex space-x-3">
                    <template x-for="i in 4">
                        <div class="flex-shrink-0 flex flex-col items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700 animate-pulse mb-1"></div>
                            <div class="w-12 h-2 bg-gray-200 dark:bg-gray-700 rounded animate-pulse"></div>
                        </div>
                    </template>
                </div>
            </template>

            <!-- Empty State -->
            <template x-if="!loading && beneficiaries.length === 0">
                <div class="flex-shrink-0 flex flex-col items-center justify-center py-4 px-8">
                    <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center mb-2">
                        <i class="fa-solid fa-users text-gray-400 dark:text-gray-500 text-base"></i>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 text-center">No saved beneficiaries</p>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Mobile Cards Section -->
    <div class="px-4 mb-4">
        <?php echo $__env->make('partials._dashboard_cards_section_mobile', ['cards' => $cards, 'settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Mobile Financial Services Overview -->
    <?php echo $__env->make('partials._mobile_services_overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Mobile Financial Insights -->
    <?php echo $__env->make('partials._mobile_financial_insights', [
        'monthly_deposits' => $monthly_deposits,
        'monthly_expenses' => $monthly_expenses
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Mobile Activity Feed -->
    <?php echo $__env->make('partials._mobile_activity_feed', [
        'recentTransactions' => $recentTransactions,
        'settings' => $settings
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Mobile Support Widget -->
    <?php echo $__env->make('partials._mobile_support_widget', ['settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Mobile Menu Modal - Sleek Bottom Sheet Design -->
    <div x-show="showMobileMenu" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 lg:hidden" 
         style="display: none;">
        
        <!-- Backdrop with Blur -->
        <div class="fixed inset-0 bg-black/40 backdrop-blur-sm" @click="showMobileMenu = false"></div>
        
        <!-- Bottom Sheet Container -->
        <div class="fixed inset-x-0 bottom-0 z-50">
            <div x-show="showMobileMenu"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="translate-y-full"
                 x-transition:enter-end="translate-y-0"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="translate-y-0"
                 x-transition:leave-end="translate-y-full"
                 class="bg-white dark:bg-gray-900 rounded-t-3xl shadow-2xl dark:shadow-gray-900/50 max-h-[85vh] overflow-hidden">
                
                <!-- Handle Bar -->
                <div class="flex justify-center pt-3 pb-2">
                    <div class="w-12 h-1.5 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
                </div>
                
                <!-- Header -->
                <div class="px-6 py-4 border-b border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center">
                                <i class="fa-solid fa-user text-white text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400"><?php echo e(Auth::user()->email); ?></p>
                            </div>
                        </div>
                        <button @click="showMobileMenu = false" 
                                class="w-8 h-8 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                            <i class="fa-solid fa-times text-gray-600 dark:text-gray-300 text-sm"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Navigation Content -->
                <div class="px-6 py-4 max-h-[60vh] overflow-y-auto">
                    
                    <!-- Main Section -->
                    <div class="mb-6">
                        <h4 class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3">Main</h4>
                        <div class="space-y-1">
                            <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl bg-primary-50 dark:bg-slate-700/80 border border-primary-100 dark:border-slate-600 group">
                                <div class="w-10 h-10 bg-primary-100 dark:bg-primary-600 rounded-xl flex items-center justify-center group-hover:bg-primary-200 dark:group-hover:bg-primary-500 transition-colors">
                                    <i class="fa-solid fa-house text-primary-600 dark:text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-primary-900 dark:text-white">Dashboard</p>
                                    <p class="text-xs text-primary-600 dark:text-slate-300">Overview & balance</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-primary-400 dark:text-slate-400 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('accounthistory')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center group-hover:bg-blue-200 dark:group-hover:bg-blue-800/50 transition-colors">
                                    <i class="fa-solid fa-chart-line text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Transactions</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">View transaction history</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('cards')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-xl flex items-center justify-center group-hover:bg-purple-200 dark:group-hover:bg-purple-800/50 transition-colors">
                                    <i class="fa-solid fa-credit-card text-purple-600 dark:text-purple-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Cards</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Manage your cards</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Transfers Section -->
                    <div class="mb-6">
                        <h4 class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3">Transfers</h4>
                        <div class="space-y-1">
                            <a href="<?php echo e(route('localtransfer')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-orange-100 dark:bg-orange-900/30 rounded-xl flex items-center justify-center group-hover:bg-orange-200 dark:group-hover:bg-orange-800/50 transition-colors">
                                    <i class="fa-solid fa-paper-plane text-orange-600 dark:text-orange-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Local Transfer</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Send to local accounts</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('internationaltransfer')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900/30 rounded-xl flex items-center justify-center group-hover:bg-indigo-200 dark:group-hover:bg-indigo-800/50 transition-colors">
                                    <i class="fa-solid fa-globe text-indigo-600 dark:text-indigo-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">International</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Global transfers</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('deposits')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center group-hover:bg-green-200 dark:group-hover:bg-green-800/50 transition-colors">
                                    <i class="fa-solid fa-plus text-green-600 dark:text-green-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Deposit</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Add funds to account</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('user.swap')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900/30 rounded-xl flex items-center justify-center group-hover:bg-yellow-200 dark:group-hover:bg-yellow-800/50 transition-colors">
                                    <i class="fa-solid fa-arrows-rotate text-yellow-600 dark:text-yellow-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Currency Swap</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Exchange currencies</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Services Section -->
                    <div class="mb-6">
                        <h4 class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3">Services</h4>
                        <div class="space-y-1">
                            <a href="<?php echo e(route('loan')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center group-hover:bg-blue-200 dark:group-hover:bg-blue-800/50 transition-colors">
                                    <i class="fa-solid fa-landmark text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Loans</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Apply for loans</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('irs-refund')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center group-hover:bg-green-200 dark:group-hover:bg-green-800/50 transition-colors">
                                    <i class="fa-solid fa-receipt text-green-600 dark:text-green-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Tax Refund</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">IRS refund services</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('grant.index')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-xl flex items-center justify-center group-hover:bg-purple-200 dark:group-hover:bg-purple-800/50 transition-colors">
                                    <i class="fa-solid fa-hand-holding-dollar text-purple-600 dark:text-purple-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Grants</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Apply for grants</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Account Section -->
                    <div class="mb-4">
                        <h4 class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3">Account</h4>
                        <div class="space-y-1">
                            <button @click="showBankAccount = true" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors w-full text-left">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center group-hover:bg-blue-200 dark:group-hover:bg-blue-800/50 transition-colors">
                                    <i class="fa-solid fa-building-columns text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Bank Details</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">View account info</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </button>
                            
                            <a href="<?php echo e(route('profile')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-teal-100 dark:bg-teal-900/30 rounded-xl flex items-center justify-center group-hover:bg-teal-200 dark:group-hover:bg-teal-800/50 transition-colors">
                                    <i class="fa-solid fa-gear text-teal-600 dark:text-teal-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Settings</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Manage your account</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <a href="<?php echo e(route('support')); ?>" class="flex items-center space-x-4 p-3 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 group transition-colors">
                                <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900/30 rounded-xl flex items-center justify-center group-hover:bg-pink-200 dark:group-hover:bg-pink-800/50 transition-colors">
                                    <i class="fa-solid fa-headset text-pink-600 dark:text-pink-400"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 dark:text-white">Support</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Get assistance</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs"></i>
                            </a>
                            
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <button type="submit" class="w-full text-left flex items-center space-x-4 p-3 rounded-2xl hover:bg-red-50 dark:hover:bg-red-900/20 group transition-colors">
        <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center group-hover:bg-red-200 dark:group-hover:bg-red-800/50 transition-colors">
            <i class="fa-solid fa-right-from-bracket text-red-600 dark:text-red-400"></i>
        </div>
        <div class="flex-1">
            <p class="font-semibold text-red-900 dark:text-red-400">Sign Out</p>
            <p class="text-xs text-red-600 dark:text-red-500">Logout from account</p>
        </div>
        <i class="fa-solid fa-chevron-right text-red-400 dark:text-red-500 text-xs"></i>
    </button>
</form>

                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="px-6 py-4 bg-gray-50 dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-center space-x-6">
                        <div class="text-center">
                            <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mx-auto mb-1">
                                <i class="fa-solid fa-shield-alt text-primary-600 dark:text-primary-400 text-xs"></i>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-300 font-medium">Secure</p>
                        </div>
                        <div class="text-center">
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-1">
                                <i class="fa-solid fa-clock text-green-600 dark:text-green-400 text-xs"></i>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-300 font-medium">24/7</p>
                        </div>
                        <div class="text-center">
                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-1">
                                <i class="fa-solid fa-phone text-blue-600 dark:text-blue-400 text-xs"></i>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-300 font-medium">Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\seftonproedit\resources\views/partials/dashboard/mobile_view.blade.php ENDPATH**/ ?>