
<div class="lg:hidden px-4 mb-6">
    <div class="grid grid-cols-4 gap-3">
        <!-- Top Up - Circular -->
        <button onclick="window.location.href='<?php echo e(route('deposits')); ?>'" class="flex flex-col items-center justify-center">
            <div class="w-14 h-14 bg-yellow-400 dark:bg-yellow-500 rounded-full flex items-center justify-center shadow-lg dark:shadow-yellow-500/25 mb-1">
                <i class="fa-solid fa-plus text-black dark:text-gray-900 text-lg"></i>
            </div>
            <span class="text-white text-xs font-medium">Top Up</span>
        </button>

        <!-- Send -->
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
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/mobile-quick-actions.blade.php ENDPATH**/ ?>