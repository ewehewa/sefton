
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div class="p-4 space-y-4" x-data="{ 
    fromCurrency: 'fiat',
    toCurrency: 'btc',
    amount: '',
    isSubmitting: false,
    
    updateCurrencyLabel() {
        return this.fromCurrency === 'fiat' ? '<?php echo e($user->curr); ?>' : 'BTC';
    },
    
    calculateConversion() {
        const amount = parseFloat(this.amount) || 0;
        const btcRate = <?php echo e($btc_rate); ?>;
        
        if (amount <= 0) return 'Enter an amount to see conversion';
        
        if (this.fromCurrency === 'fiat') {
            const btcAmount = amount / btcRate;
            return `${amount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})} <?php echo e($user->curr); ?> ≈ ${btcAmount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8})} BTC`;
        } else {
            const fiatAmount = amount * btcRate;
            return `${amount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8})} BTC ≈ <?php echo e($user->s_curr); ?>${fiatAmount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})} <?php echo e($user->curr); ?>`;
        }
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-alert','data' => []]); ?>
<?php $component->withName('error-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Mobile Header -->
    <div class="lg:hidden mb-2">
        <?php echo $__env->make('partials._mobile_header', [
            'title' => 'Currency Swap',
            'showBackButton' => true,
            'backUrl' => route('dashboard'),
            'showNotifications' => true,
            'showDarkMode' => true,
            'financeUser' => Auth::user()
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block">
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary-500 to-primary-600 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid fa-arrows-rotate text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Currency Swap</h1>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Convert between <?php echo e($user->curr); ?> and Bitcoin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 overflow-hidden">
        <div class="p-4">
            <!-- Balance Information -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                <!-- Current Balances Card -->
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4">
                    <h3 class="text-base font-semibold text-gray-800 dark:text-gray-200 mb-3">Current Balances</h3>
                        
                    <!-- Fiat Balance -->
                    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm mb-3">
                        <div class="flex items-center">
                            <div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-full mr-3">
                                <i class="fa-solid fa-wallet text-blue-600 dark:text-blue-400 text-sm"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 text-sm"><?php echo e($user->curr); ?> Balance</span>
                        </div>
                        <span class="font-semibold text-gray-900 dark:text-white text-sm"><?php echo e($user->s_curr); ?><?php echo e(number_format($user->account_bal, 2, '.', ',')); ?></span>
                    </div>
                    
                    <!-- Bitcoin Balance -->
                    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm mb-3">
                        <div class="flex items-center">
                            <div class="bg-amber-100 dark:bg-amber-900/30 p-2 rounded-full mr-3">
                                <i class="fa-brands fa-bitcoin text-amber-600 dark:text-amber-400 text-sm"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 text-sm">Bitcoin Balance</span>
                        </div>
                        <span class="font-semibold text-gray-900 dark:text-white text-sm"><?php echo e(number_format($user->btc_balance ?? 0, 8, '.', ',')); ?> BTC</span>
                    </div>
                    
                    <!-- Exchange Rate -->
                    <div class="p-3 bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-700 dark:to-gray-600 rounded-lg border border-primary-100 dark:border-gray-600">
                        <h4 class="text-xs font-medium text-primary-700 dark:text-primary-300 mb-2 text-center">Current Exchange Rate</h4>
                        <div class="flex justify-center items-center space-x-2">
                            <div class="bg-amber-100 dark:bg-amber-900/50 p-1.5 rounded-full">
                                <i class="fa-brands fa-bitcoin text-amber-600 dark:text-amber-400 text-xs"></i>
                            </div>
                            <span class="font-semibold text-gray-900 dark:text-white text-xs">1 BTC = <?php echo e($user->s_curr); ?><?php echo e(number_format($btc_rate, 2, '.', ',')); ?> <?php echo e($user->curr); ?></span>
                        </div>
                    </div>
                </div>
                    
                <!-- Swap Form -->
                <div>
                    <form action="<?php echo e(route('user.process.swap')); ?>" method="POST" id="swapForm">
                        <?php echo csrf_field(); ?>
                        
                        <!-- From Currency -->
                        <div class="mb-4">
                            <label for="from_currency" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">From Currency</label>
                            <select 
                                id="from_currency" 
                                name="from_currency" 
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-primary-500 px-3 py-2 border focus:ring focus:ring-primary-500 focus:ring-opacity-50 text-sm"
                                required
                            >
                                <option value="fiat"><?php echo e($user->curr); ?> (<?php echo e($user->s_curr); ?><?php echo e(number_format($user->account_bal, 2, '.', ',')); ?>)</option>
                                <option value="btc">BTC (<?php echo e(number_format($user->btc_balance ?? 0, 8, '.', ',')); ?>)</option>
                            </select>
                        </div>
                        
                        <!-- To Currency -->
                        <div class="mb-4">
                            <label for="to_currency" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">To Currency</label>
                            <select 
                                id="to_currency" 
                                name="to_currency" 
                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-primary-500 px-3 py-2 border focus:ring focus:ring-primary-500 focus:ring-opacity-50 text-sm"
                                required
                            >
                                <option value="btc">BTC</option>
                                <option value="fiat"><?php echo e($user->curr); ?></option>
                            </select>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Destination currency is automatically selected</p>
                        </div>
                        
                        <!-- Amount -->
                        <div class="mb-4">
                            <label for="amount" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Amount</label>
                            <div class="relative rounded-md shadow-sm">
                                <input 
                                    type="number" 
                                    id="amount" 
                                    name="amount" 
                                    class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-primary-500 px-3 py-2 border focus:ring focus:ring-primary-500 focus:ring-opacity-50 pr-16 text-sm" 
                                    step="any" 
                                    min="0.00000001" 
                                    placeholder="0.00" 
                                    required
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center">
                                    <span class="h-full inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-300 text-xs currency-label"><?php echo e($user->curr); ?></span>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Enter the amount you want to swap</p>
                        </div>
                        
                        <!-- Conversion Preview -->
                        <div class="mb-4">
                            <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Estimated Conversion</label>
                            <div class="p-3 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600 rounded-lg" id="conversionResult">
                                <div class="text-center text-gray-500 dark:text-gray-400 text-xs">Enter an amount to see conversion</div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 flex items-center justify-center text-sm"
                        >
                            <i class="fa-solid fa-arrows-rotate text-xs mr-2"></i>
                            <span>Swap Currencies</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to update currency label
        function updateCurrencyLabel() {
            var fromCurrency = $('#from_currency').val();
            if (fromCurrency === 'fiat') {
                $('.currency-label').text('<?php echo e($user->curr); ?>');
            } else {
                $('.currency-label').text('BTC');
            }
        }
        
        // Function to update to_currency based on from_currency
        function updateToCurrency() {
            var fromCurrency = $('#from_currency').val();
            if (fromCurrency === 'fiat') {
                $('#to_currency').html('<option value="btc">BTC</option>');
            } else {
                $('#to_currency').html('<option value="fiat"><?php echo e($user->curr); ?></option>');
            }
        }
        
        // Function to calculate and display conversion
        function calculateConversion() {
            var fromCurrency = $('#from_currency').val();
            var amount = parseFloat($('#amount').val()) || 0;
            var btcRate = <?php echo e($btc_rate); ?>;
            
            if (amount <= 0) {
                $('#conversionResult').html('<div class="text-center text-gray-500 text-sm">Enter an amount to see conversion</div>');
                return;
            }
            
            var html = '';
            
            if (fromCurrency === 'fiat') {
                // Convert fiat to BTC
                var btcAmount = amount / btcRate;
                
                html = '<div class="flex items-center justify-between">'
                     + '<div class="flex flex-col">'
                     + '<span class="text-xs text-gray-500 dark:text-gray-400">From:</span>'
                     + '<span class="font-medium text-gray-900 dark:text-white">' + amount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e($user->curr); ?></span>'
                     + '</div>'
                     + '<div class="flex items-center justify-center mx-2">'
                     + '<i class="fa-solid fa-arrow-right text-gray-400 text-sm"></i>'
                     + '</div>'
                     + '<div class="flex flex-col items-end">'
                     + '<span class="text-xs text-gray-500 dark:text-gray-400">To:</span>'
                     + '<span class="font-medium text-gray-900 dark:text-white">' + btcAmount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC</span>'
                     + '</div>'
                     + '</div>';
            } else {
                // Convert BTC to fiat
                var fiatAmount = amount * btcRate;
                
                html = '<div class="flex items-center justify-between">'
                     + '<div class="flex flex-col">'
                     + '<span class="text-xs text-gray-500 dark:text-gray-400">From:</span>'
                     + '<span class="font-medium text-gray-900 dark:text-white">' + amount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC</span>'
                     + '</div>'
                     + '<div class="flex items-center justify-center mx-2">'
                     + '<i class="fa-solid fa-arrow-right text-gray-400 text-sm"></i>'
                     + '</div>'
                     + '<div class="flex flex-col items-end">'
                     + '<span class="text-xs text-gray-500 dark:text-gray-400">To:</span>'
                     + '<span class="font-medium text-gray-900 dark:text-white"><?php echo e($user->s_curr); ?>' + fiatAmount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e($user->curr); ?></span>'
                     + '</div>'
                     + '</div>';
            }
            
            $('#conversionResult').html(html);
        }
        
        // Event listeners
        $('#from_currency').change(function() {
            updateCurrencyLabel();
            updateToCurrency();
            calculateConversion();
        });
        
        $('#amount').on('input', function() {
            calculateConversion();
        });
        
        // Initialize
        updateCurrencyLabel();
        updateToCurrency();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/user/swap.blade.php ENDPATH**/ ?>