
<div class="hidden lg:block px-6 grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Left Column -->
    <div class="lg:col-span-2 space-y-6">
        <?php echo $__env->make('partials.dashboard.desktop-balance-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('partials.dashboard.desktop-quick-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- Desktop Cards Section -->
        <?php echo $__env->make('partials._dashboard_cards_section', ['cards' => $cards ?? collect(), 'settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Right Column -->
    <div class="space-y-4">
        <?php echo $__env->make('partials.dashboard.recent-transactions', ['recentTransactions' => $recentTransactions], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.dashboard.account-stats', [
            'limit' => Auth::user()->limit, 
            'pending_deposits' => $total_deposited_pending ?? 0, 
            'pending_withdrawals' => $total_withdrawal_pending ?? 0, 
            'total_volume' => ($total_withdrawal ?? 0) + ($deposited ?? 0), 
            'currency_symbol' => Auth::user()->s_curr
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.dashboard.help-support', ['support_route' => route('support')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/desktop-main-content.blade.php ENDPATH**/ ?>