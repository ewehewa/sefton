
<div class="bg-desktop-card-bg rounded-xl shadow-soft">
    <div class="px-6 py-4 border-b border-desktop-border flex justify-between items-center">
        <h3 class="text-lg font-semibold text-desktop-text">Transactions</h3>
        <button class="text-desktop-text-muted hover:text-desktop-text">
            <i class="fa-solid fa-ellipsis"></i>
        </button>
    </div>
    <div class="divide-y divide-desktop-border">
        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="flex items-center p-4 hover:bg-desktop-bg/50 transition-colors">
            <div class="p-2.5 rounded-full mr-4 <?php echo e($tx->bg_class); ?>">
                <i class="<?php echo e($tx->icon_fa); ?> text-base <?php echo e($tx->color_class); ?>"></i>
            </div>
            <div class="flex-grow">
                <p class="font-medium text-sm text-desktop-text"><?php echo e($tx->name); ?></p>
                <p class="text-xs text-desktop-text-muted"><?php echo e($tx->date); ?></p>
            </div>
            <p class="font-semibold text-sm <?php echo e($tx->color_class); ?>"><?php echo e($tx->amount_formatted); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="p-4 text-sm text-desktop-text-muted text-center">No recent transactions.</p>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/_dashboard_transactions_desktop.blade.php ENDPATH**/ ?>