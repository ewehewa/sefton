
<?php $__env->startSection('title', 'Card Transactions'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <div class="max-w-8xl mx-auto p-4 lg:p-6 space-y-6">
        
        <div class="lg:hidden mb-2">
            <?php echo $__env->make('partials._mobile_header', [
                'title' => 'Card Transactions',
                'showBackButton' => true,
                'backUrl' => route('cards'),
                'showNotifications' => true,
                'showDarkMode' => true,
                'financeUser' => Auth::user()
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Desktop Header -->
        <div class="hidden lg:block mb-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                        <i class="fas fa-list text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Card Transactions</h1>
                        <p class="text-gray-600 dark:text-gray-400">View all transactions for your <?php echo e(ucfirst(str_replace('_', ' ', $card->card_type))); ?> <?php echo e(ucfirst($card->card_level)); ?> card ending in <?php echo e($card->last_four); ?></p>
                    </div>
                </div>
                <a href="<?php echo e(route('cards')); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 transition-all duration-300">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Cards
                </a>
            </div>
        </div>

        <!-- Alert Messages -->
        <?php if(session('message')): ?>
            <div class="rounded-xl <?php echo e(session('type') == 'success' ? 'bg-green-50/80 dark:bg-green-900/20 text-green-800 dark:text-green-300 border border-green-200/50 dark:border-green-700/50' : 'bg-red-50/80 dark:bg-red-900/20 text-red-800 dark:text-red-300 border border-red-200/50 dark:border-red-700/50'); ?> p-4 backdrop-blur-sm mb-2">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                        <?php if(session('type') == 'success'): ?>
                            <i class="fas fa-check-circle text-green-500 dark:text-green-400"></i>
                        <?php else: ?>
                            <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400"></i>
                        <?php endif; ?>
                    </div>
                    <p class="text-sm font-medium"><?php echo e(session('message')); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <!-- Transaction Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-green-500 to-emerald-600 flex items-center justify-center">
                        <i class="fas fa-trending-up text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">Total Spending</p>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white"><?php echo e($card->currency); ?> <?php echo e(number_format($totalSpending, 2)); ?></h3>
                    </div>
                </div>
            </div>
            
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-credit-card text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">Total Transactions</p>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white"><?php echo e($transactions->total()); ?></h3>
                    </div>
                </div>
            </div>
            
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-calendar text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">Last Activity</p>
                        <h3 class="text-sm font-bold text-gray-900 dark:text-white">
                            <?php if($lastActivity): ?>
                                <?php echo e(\Carbon\Carbon::parse($lastActivity->transaction_date)->format('M d, Y')); ?>

                            <?php else: ?>
                                No activity yet
                            <?php endif; ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction Filters -->
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden">
            <div class="flex items-center space-x-2 p-4 border-b border-gray-200/50 dark:border-gray-700/50">
                <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                    <i class="fas fa-filter text-white text-xs"></i>
                </div>
                <h2 class="text-base font-semibold text-gray-900 dark:text-white">Filters</h2>
            </div>
            <div class="p-4">
                <form action="<?php echo e(route('cards.transactions', $card)); ?>" method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div>
                        <label for="type" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Transaction Type</label>
                        <select id="type" name="type" class="w-full py-3 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                            <option value="">All Types</option>
                            <option value="purchase" <?php echo e(request()->get('type') == 'purchase' ? 'selected' : ''); ?>>Purchases</option>
                            <option value="refund" <?php echo e(request()->get('type') == 'refund' ? 'selected' : ''); ?>>Refunds</option>
                            <option value="funding" <?php echo e(request()->get('type') == 'funding' ? 'selected' : ''); ?>>Funding</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="status" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Status</label>
                        <select id="status" name="status" class="w-full py-3 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                            <option value="">All Statuses</option>
                            <option value="completed" <?php echo e(request()->get('status') == 'completed' ? 'selected' : ''); ?>>Completed</option>
                            <option value="pending" <?php echo e(request()->get('status') == 'pending' ? 'selected' : ''); ?>>Pending</option>
                            <option value="declined" <?php echo e(request()->get('status') == 'declined' ? 'selected' : ''); ?>>Declined</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="date_start" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Date From</label>
                        <input type="date" id="date_start" name="date_start" value="<?php echo e(request()->get('date_start')); ?>" class="w-full py-3 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                    </div>
                    
                    <div>
                        <label for="date_end" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Date To</label>
                        <input type="date" id="date_end" name="date_end" value="<?php echo e(request()->get('date_end')); ?>" class="w-full py-3 px-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                    </div>
                    
                    <div class="flex flex-col justify-end space-y-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300">
                            <i class="fas fa-filter mr-2"></i> Filter
                        </button>
                        
                        <a href="<?php echo e(route('cards.transactions', $card)); ?>" class="w-full inline-flex items-center justify-center py-3 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm text-sm font-semibold text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300">
                            <i class="fas fa-times mr-2"></i> Clear
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Transactions Table -->
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden">
            <div class="flex items-center space-x-2 p-4 border-b border-gray-200/50 dark:border-gray-700/50">
                <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                    <i class="fas fa-list text-white text-xs"></i>
                </div>
                <h2 class="text-base font-semibold text-gray-900 dark:text-white">Transaction History</h2>
            </div>
            
            <?php if(count($transactions) > 0): ?>
                <!-- Desktop Table View -->
                <div class="hidden lg:block overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200/50 dark:divide-gray-700/50">
                        <thead class="bg-gray-50/80 dark:bg-gray-700/50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Date & Time</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Merchant</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Type</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/50 dark:bg-gray-800/50 divide-y divide-gray-200/50 dark:divide-gray-700/50">
                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-gray-50/80 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <div class="font-medium text-gray-900 dark:text-white"><?php echo e(\Carbon\Carbon::parse($transaction->transaction_date)->format('M d, Y')); ?></div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400"><?php echo e(\Carbon\Carbon::parse($transaction->transaction_date)->format('h:i A')); ?></div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white"><?php echo e($transaction->description); ?></div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Ref: <?php echo e(Str::limit($transaction->transaction_reference, 10)); ?></div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white"><?php echo e($transaction->merchant_name ?: 'N/A'); ?></div>
                                        <?php if($transaction->merchant_category): ?>
                                            <div class="text-xs text-gray-500 dark:text-gray-400"><?php echo e($transaction->merchant_category); ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-lg 
                                            <?php if($transaction->transaction_type == 'purchase'): ?> bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 
                                            <?php elseif($transaction->transaction_type == 'refund'): ?> bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 
                                            <?php elseif($transaction->transaction_type == 'funding'): ?> bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 
                                            <?php else: ?> bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 
                                            <?php endif; ?>">
                                            <?php echo e(ucfirst($transaction->transaction_type)); ?>

                                        </span>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-lg 
                                            <?php if($transaction->status == 'completed'): ?> bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 
                                            <?php elseif($transaction->status == 'pending'): ?> bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 
                                            <?php elseif($transaction->status == 'declined'): ?> bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 
                                            <?php else: ?> bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 
                                            <?php endif; ?>">
                                            <?php echo e(ucfirst($transaction->status)); ?>

                                        </span>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-bold text-right">
                                        <span class="<?php if($transaction->transaction_type == 'purchase'): ?> text-red-600 dark:text-red-400 
                                                      <?php elseif(in_array($transaction->transaction_type, ['refund', 'funding'])): ?> text-green-600 dark:text-green-400 
                                                      <?php else: ?> text-gray-900 dark:text-white <?php endif; ?>">
                                            <?php if($transaction->transaction_type == 'purchase'): ?>
                                                -<?php echo e($card->currency); ?> <?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                            <?php elseif(in_array($transaction->transaction_type, ['refund', 'funding'])): ?>
                                                +<?php echo e($card->currency); ?> <?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                            <?php else: ?>
                                                <?php echo e($card->currency); ?> <?php echo e(number_format($transaction->amount, 2)); ?>

                                            <?php endif; ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="lg:hidden space-y-3 p-4">
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white/80 dark:bg-gray-700/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-600/50 p-4 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-600 flex items-center justify-center">
                                        <?php if($transaction->transaction_type == 'purchase'): ?>
                                            <i class="fas fa-shopping-cart text-red-500 text-sm"></i>
                                        <?php elseif($transaction->transaction_type == 'refund'): ?>
                                            <i class="fas fa-undo text-green-500 text-sm"></i>
                                        <?php elseif($transaction->transaction_type == 'funding'): ?>
                                            <i class="fas fa-plus text-blue-500 text-sm"></i>
                                        <?php else: ?>
                                            <i class="fas fa-exchange-alt text-gray-500 text-sm"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white"><?php echo e($transaction->description); ?></h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400"><?php echo e($transaction->merchant_name ?: 'N/A'); ?></p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold <?php if($transaction->transaction_type == 'purchase'): ?> text-red-600 dark:text-red-400 <?php elseif(in_array($transaction->transaction_type, ['refund', 'funding'])): ?> text-green-600 dark:text-green-400 <?php else: ?> text-gray-900 dark:text-white <?php endif; ?>">
                                        <?php if($transaction->transaction_type == 'purchase'): ?>
                                            -<?php echo e($card->currency); ?> <?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                        <?php elseif(in_array($transaction->transaction_type, ['refund', 'funding'])): ?>
                                            +<?php echo e($card->currency); ?> <?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                        <?php else: ?>
                                            <?php echo e($card->currency); ?> <?php echo e(number_format($transaction->amount, 2)); ?>

                                        <?php endif; ?>
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400"><?php echo e(\Carbon\Carbon::parse($transaction->transaction_date)->format('M d, h:i A')); ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between pt-3 border-t border-gray-200/50 dark:border-gray-600/50">
                                <div class="flex items-center space-x-2">
                                    <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-lg 
                                        <?php if($transaction->transaction_type == 'purchase'): ?> bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 
                                        <?php elseif($transaction->transaction_type == 'refund'): ?> bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 
                                        <?php elseif($transaction->transaction_type == 'funding'): ?> bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 
                                        <?php else: ?> bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 
                                        <?php endif; ?>">
                                        <?php echo e(ucfirst($transaction->transaction_type)); ?>

                                    </span>
                                    <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-lg 
                                        <?php if($transaction->status == 'completed'): ?> bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 
                                        <?php elseif($transaction->status == 'pending'): ?> bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 
                                        <?php elseif($transaction->status == 'declined'): ?> bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 
                                        <?php else: ?> bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 
                                        <?php endif; ?>">
                                        <?php echo e(ucfirst($transaction->status)); ?>

                                    </span>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Ref: <?php echo e(Str::limit($transaction->transaction_reference, 8)); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <!-- Pagination -->
                <?php if($transactions->hasPages()): ?>
                    <div class="px-4 py-3 border-t border-gray-200/50 dark:border-gray-700/50">
                        <?php echo e($transactions->appends(request()->query())->links()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-receipt text-gray-400 dark:text-gray-500 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Transactions Found</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">No transactions match your current filters. Try adjusting your search criteria.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/user/cards/transactions.blade.php ENDPATH**/ ?>