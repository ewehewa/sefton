
<div class="hidden lg:block py-6 mb-6 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <?php
            $statCards = [
                [
                    'label' => 'Account Limit', 
                    'value' => Auth::user()->s_curr . number_format(Auth::user()->limit, 2, '.', ','), 
                    'icon' => 'fa-solid fa-credit-card', 
                    'color' => 'bg-blue-500', 
                    'change' => 'Available'
                ],
                [
                    'label' => 'Monthly Deposits', 
                    'value' => Auth::user()->s_curr . number_format($monthly_deposits ?? 0, 2, '.', ','), 
                    'icon' => 'fa-solid fa-arrow-down', 
                    'color' => 'bg-green-500', 
                    'change' => 'This Month'
                ],
                [
                    'label' => 'Monthly Expenses', 
                    'value' => Auth::user()->s_curr . number_format($monthly_expenses ?? 0, 2, '.', ','), 
                    'icon' => 'fa-solid fa-arrow-up', 
                    'color' => 'bg-red-500', 
                    'change' => 'This Month'
                ],
                [
                    'label' => 'Total Volume', 
                    'value' => Auth::user()->s_curr . number_format($total_volume ?? 0, 2, '.', ','), 
                    'icon' => 'fa-solid fa-chart-line', 
                    'color' => 'bg-accent-500', 
                    'change' => 'All Time'
                ],
            ];
        ?>
        <?php $__currentLoopData = $statCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm dark:shadow-gray-900/25 border border-gray-100 dark:border-gray-700">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 <?php echo e($card['color']); ?> rounded-lg flex items-center justify-center">
                    <i class="<?php echo e($card['icon']); ?> text-white text-sm"></i>
                </div>
                <span class="text-xs font-medium text-gray-500 dark:text-gray-400"><?php echo e($card['change']); ?></span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1"><?php echo e($card['value']); ?></h3>
            <p class="text-gray-600 dark:text-gray-300 text-xs"><?php echo e($card['label']); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/desktop-stats-cards.blade.php ENDPATH**/ ?>