
<section class="fade-in-section">
    <div class="flex justify-between items-center mb-2">
        <h2 class="font-semibold text-lg text-mobile-text">Recent Transactions</h2>
         <a href="<?php echo e(route('accounthistory')); ?>" class="text-sm text-mobile-text-muted hover:text-mobile-text flex items-center">
            See All <i class="fa-solid fa-chevron-right h-3 w-3 ml-1"></i>
        </a>
    </div>
    <div class="bg-mobile-bg rounded-xl shadow-md divide-y divide-gray-700 border border-gray-700">
        <?php $__empty_1 = true; $__currentLoopData = $transactions->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
        <div class="flex items-center py-3.5 px-4 hover:bg-gray-700/50 transition-colors">
            <div class="p-2.5 rounded-full mr-3 <?php echo e($tx->bg_class); ?>">
                <i class="<?php echo e($tx->icon_fa); ?> h-5 w-5 <?php echo e($tx->color_class); ?>"></i>
            </div>
            <div class="flex-grow min-w-0">
                <p class="font-medium text-sm text-mobile-text truncate"><?php echo e($tx->name); ?></p>
                <p class="text-xs text-mobile-text-muted"><?php echo e($tx->date); ?></p>
            </div>
            <p class="font-semibold text-sm <?php echo e($tx->color_class); ?> ml-2 whitespace-nowrap"><?php echo e($tx->amount_formatted); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="p-4 text-sm text-mobile-text-muted text-center">No recent transactions.</p>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/_dashboard_transactions_mobile.blade.php ENDPATH**/ ?>