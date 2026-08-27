


        <!-- Right Column -->
        <div class="space-y-4">
            <!-- Recent Transactions -->
            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm dark:shadow-gray-900/25 border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">Recent Transactions</h3>
                    <a href="<?php echo e(route('accounthistory')); ?>" class="text-xs text-primary-600 dark:text-primary-400 font-medium hover:text-primary-700 dark:hover:text-primary-300 transition-colors">View All</a>
                </div>
                
                <div class="space-y-3">
                    <?php $__empty_1 = true; $__currentLoopData = $recentTransactions->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 rounded-full <?php echo e($tx->bg_class); ?> flex items-center justify-center">
                                <i class="<?php echo e($tx->icon_fa); ?> text-xs <?php echo e($tx->color_class); ?>"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900 dark:text-white text-xs"><?php echo e($tx->name); ?></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400"><?php echo e($tx->date); ?></p>
                            </div>
                        </div>
                        <p class="font-semibold text-xs <?php echo e($tx->color_class); ?>"><?php echo e($tx->amount_formatted); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center py-6">
                        <i class="fa-solid fa-receipt text-gray-300 dark:text-gray-600 text-2xl mb-2"></i>
                        <p class="text-gray-500 dark:text-gray-400 text-xs">No recent transactions</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Account Stats -->
            <?php echo $__env->make('partials._dashboard_account_stats', [
                'limit' => $limit, 
                'pending_deposits' => $total_deposited_pending, 
                'pending_withdrawals' => $total_withdrawal_pending, 
                'total_volume' => $total_withdrawal + $deposited, 
                'currency_symbol' => $currency_symbol
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Help & Support -->
            <?php echo $__env->make('partials._dashboard_help_support', ['support_route' => route('support')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/aureviatrust/public_html/resources/views/partials/dashboard/desktop_right.blade.php ENDPATH**/ ?>