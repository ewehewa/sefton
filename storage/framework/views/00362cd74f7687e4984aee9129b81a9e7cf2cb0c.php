
<div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm dark:shadow-gray-900/25 border border-gray-100 dark:border-gray-700">
    <h3 class="text-base font-semibold text-gray-900 dark:text-white mb-4">Quick Actions</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
        <?php
            $quickActions = [
                ['label' => 'Transfer', 'icon' => 'fa-solid fa-exchange-alt', 'route' => route('localtransfer'), 'color' => 'bg-blue-500'],
                ['label' => 'Pay Bills', 'icon' => 'fa-solid fa-file-invoice', 'route' => route('internationaltransfer'), 'color' => 'bg-green-500'],
                ['label' => 'Request', 'icon' => 'fa-solid fa-hand-holding-dollar', 'action' => 'showReceiveModal = true', 'color' => 'bg-accent-500'],
                ['label' => 'Bank Details', 'icon' => 'fa-solid fa-building-columns', 'action' => 'showBankAccount = true', 'color' => 'bg-primary-500'],
            ];
        ?>
        <?php $__currentLoopData = $quickActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($action['route'])): ?>
            <a href="<?php echo e($action['route']); ?>" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                <div class="w-10 h-10 <?php echo e($action['color']); ?> rounded-lg flex items-center justify-center mb-2">
                    <i class="<?php echo e($action['icon']); ?> text-white text-sm"></i>
                </div>
                <span class="text-xs font-medium text-gray-700 dark:text-gray-300"><?php echo e($action['label']); ?></span>
            </a>
            <?php else: ?>
            <button @click="<?php echo e($action['action']); ?>" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                <div class="w-10 h-10 <?php echo e($action['color']); ?> rounded-lg flex items-center justify-center mb-2">
                    <i class="<?php echo e($action['icon']); ?> text-white text-sm"></i>
                </div>
                <span class="text-xs font-medium text-gray-700 dark:text-gray-300"><?php echo e($action['label']); ?></span>
            </button>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/desktop-quick-actions.blade.php ENDPATH**/ ?>