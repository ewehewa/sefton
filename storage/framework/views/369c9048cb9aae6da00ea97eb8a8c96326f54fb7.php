
<div 
    x-data="{ 
        showBankAccount: false, 
        showSendMoney: false,
        showReceiveModal: false,
        showMobileMenu: false,
        showMobileNotifications: false,
        greeting: '',
        currentDate: '',
        balanceVisible: true,
        toggleBalance() {
            this.balanceVisible = !this.balanceVisible;
            localStorage.setItem('balanceVisible', this.balanceVisible);
        },
        updateTime() {
            const now = new Date();
            if (now.getHours() < 12) { this.greeting = 'Good Morning'; } 
            else if (now.getHours() < 18) { this.greeting = 'Good Afternoon'; } 
            else { this.greeting = 'Good Evening'; }
            const options = { weekday: 'long', month: 'long', day: 'numeric' };
            this.currentDate = now.toLocaleDateString(undefined, options);
        }
    }" 
    x-init="
        updateTime();
        setInterval(() => updateTime(), 60000);
        balanceVisible = localStorage.getItem('balanceVisible') === null 
            ? true 
            : localStorage.getItem('balanceVisible') === 'true';
    "
>
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

    
    <?php echo $__env->make('partials.dashboard.mobile-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.mobile-wallet-cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.mobile-quick-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.mobile-notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.mobile-quick-transfer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="px-4 mb-4">
        <?php echo $__env->make('partials._dashboard_cards_section_mobile', ['cards' => $cards ?? collect(), 'settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('partials._mobile_services_overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._mobile_financial_insights', [
        'monthly_deposits' => $monthly_deposits ?? 0,
        'monthly_expenses' => $monthly_expenses ?? 0
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._mobile_activity_feed', [
        'recentTransactions' => $recentTransactions,
        'settings' => $settings
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._mobile_support_widget', ['settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.mobile-menu-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('partials.dashboard.desktop-stats-cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.dashboard.desktop-main-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('partials._bank_account_modal', ['settings' => $settings, 'user' => Auth::user()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._send_money_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._receive_btc_modal', ['btc_address' => Auth::user()->btc_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/content.blade.php ENDPATH**/ ?>