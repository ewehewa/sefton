
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    
<div x-data="{ 
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
    <?php if(session('success')): ?>
        <div class="mb-6 px-4 py-3 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-md">
            <div class="flex items-center">
                <i data-lucide="check-circle" class="h-5 w-5 mr-2 text-green-500"></i>
                <p><?php echo e(session('success')); ?></p>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="mb-6 px-4 py-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-md">
            <div class="flex items-center">
                <i data-lucide="alert-circle" class="h-5 w-5 mr-2 text-red-500"></i>
                <p><?php echo e(session('error')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Header with Breadcrumbs -->
    <div class="flex flex-col mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 mb-1">Currency Swap</h1>
            <div class="flex items-center text-sm text-gray-500">
                <a href="<?php echo e(route('dashboard')); ?>" class="hover:text-primary-600">Dashboard</a>
                <i data-lucide="chevron-right" class="h-4 w-4 mx-2"></i>
                <span class="font-medium text-gray-700">Swap</span>
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
                        <i data-lucide="repeat" class="h-10 w-10 text-white"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-white">Swap Currencies</h2>
                    <p class="text-white/80 mt-1 text-center">Convert between <?php echo e($user->curr); ?> and Bitcoin</p>
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
            <div class="p-6 md:p-8 pb-14">
                <!-- Balance Information -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <!-- Current Balances Card -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Current Balances</h3>
                        
                        <!-- Fiat Balance -->
                        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm mb-4">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-2 rounded-full mr-3">
                                    <i data-lucide="wallet" class="h-5 w-5 text-blue-600"></i>
                                </div>
                                <span class="text-gray-700"><?php echo e($user->curr); ?> Balance</span>
                            </div>
                            <span class="font-semibold text-gray-900"><?php echo e($user->s_curr); ?><?php echo e(number_format($user->account_bal, 2, '.', ',')); ?></span>
                        </div>
                        
                        <!-- Bitcoin Balance -->
                        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm mb-4">
                            <div class="flex items-center">
                                <div class="bg-amber-100 p-2 rounded-full mr-3">
                                    <i data-lucide="bitcoin" class="h-5 w-5 text-amber-600"></i>
                                </div>
                                <span class="text-gray-700">Bitcoin Balance</span>
                            </div>
                            <span class="font-semibold text-gray-900"><?php echo e(number_format($user->btc_balance ?? 0, 8, '.', ',')); ?> BTC</span>
                        </div>
                        
                        <!-- Exchange Rate -->
                        <div class="p-4 bg-primary-50 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-100 mb-2 text-center">Current Exchange Rate</h4>
                            <div class="flex justify-center items-center space-x-2">
                                <div class="bg-amber-100 p-1.5 rounded-full">
                                    <i data-lucide="bitcoin" class="h-4 w-4 text-amber-600"></i>
                                </div>
                                <span class="font-semibold text-gray-900">1 BTC = <?php echo e($user->s_curr); ?><?php echo e(number_format($btc_rate, 2, '.', ',')); ?> <?php echo e($user->curr); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Swap Form -->
                    <div>
                        <form action="<?php echo e(route('user.process.swap')); ?>" method="POST" id="swapForm">
                            <?php echo csrf_field(); ?>
                            
                            <!-- From Currency -->
                            <div class="mb-5">
                                <label for="from_currency" class="block text-sm font-medium text-gray-700 mb-1">From Currency</label>
                                <select 
                                    id="from_currency" 
                                    name="from_currency" 
                                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 px-2 py-3 border focus:ring focus:ring-primary-500 focus:ring-opacity-50"
                                    required
                                >
                                    <option value="fiat"><?php echo e($user->curr); ?> (<?php echo e($user->s_curr); ?><?php echo e(number_format($user->account_bal, 2, '.', ',')); ?>)</option>
                                    <option value="btc">BTC (<?php echo e(number_format($user->btc_balance ?? 0, 8, '.', ',')); ?>)</option>
                                </select>
                            </div>
                            
                            <!-- To Currency -->
                            <div class="mb-5">
                                <label for="to_currency" class="block text-sm font-medium text-gray-700 mb-1">To Currency</label>
                                <select 
                                    id="to_currency" 
                                    name="to_currency" 
                                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 px-2 py-3 border focus:ring focus:ring-primary-500 focus:ring-opacity-50"
                                    required
                                >
                                    <option value="btc">BTC</option>
                                    <option value="fiat"><?php echo e($user->curr); ?></option>
                                </select>
                                <p class="mt-1 text-xs text-gray-500">The destination currency is automatically selected based on your source currency</p>
                            </div>
                            
                            <!-- Amount -->
                            <div class="mb-5">
                                <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Amount</label>
                                <div class="relative rounded-md shadow-sm">
                                    <input 
                                        type="number" 
                                        id="amount" 
                                        name="amount" 
                                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 px-2 py-3 border focus:ring focus:ring-primary-500 focus:ring-opacity-50 pr-12" 
                                        step="any" 
                                        min="0.00000001" 
                                        placeholder="0.00" 
                                        required
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center">
                                        <span class="h-full inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm currency-label"><?php echo e($user->curr); ?></span>
                                    </div>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Enter the amount you want to swap</p>
                            </div>
                            
                            <!-- Conversion Preview -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Estimated Conversion</label>
                                <div class="p-4 bg-gray-50 border border-gray-200 rounded-lg" id="conversionResult">
                                    <div class="text-center text-gray-500 text-sm">Enter an amount to see conversion</div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 flex items-center justify-center"
                            >
                                <i data-lucide="repeat" class="h-4 w-4 mr-2"></i>
                                <span>Swap Currencies</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
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
                     + '<span class="text-xs text-gray-500">From:</span>'
                     + '<span class="font-medium">' + amount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e($user->curr); ?></span>'
                     + '</div>'
                     + '<div class="flex items-center justify-center mx-2">'
                     + '<i data-lucide="arrow-right" class="h-5 w-5 text-gray-400"></i>'
                     + '</div>'
                     + '<div class="flex flex-col items-end">'
                     + '<span class="text-xs text-gray-500">To:</span>'
                     + '<span class="font-medium">' + btcAmount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC</span>'
                     + '</div>'
                     + '</div>';
            } else {
                // Convert BTC to fiat
                var fiatAmount = amount * btcRate;
                
                html = '<div class="flex items-center justify-between">'
                     + '<div class="flex flex-col">'
                     + '<span class="text-xs text-gray-500">From:</span>'
                     + '<span class="font-medium">' + amount.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8}) + ' BTC</span>'
                     + '</div>'
                     + '<div class="flex items-center justify-center mx-2">'
                     + '<i data-lucide="arrow-right" class="h-5 w-5 text-gray-400"></i>'
                     + '</div>'
                     + '<div class="flex flex-col items-end">'
                     + '<span class="text-xs text-gray-500">To:</span>'
                     + '<span class="font-medium"><?php echo e($user->s_curr); ?>' + fiatAmount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ' <?php echo e($user->curr); ?></span>'
                     + '</div>'
                     + '</div>';
            }
            
            $('#conversionResult').html(html);
            
            // Re-initialize Lucide icons for the new content
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
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
        
        // Initialize Lucide icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/atlantictruist/public_html/resources/views/user/swap.blade.php ENDPATH**/ ?>