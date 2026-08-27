
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
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/mobile-header.blade.php ENDPATH**/ ?>