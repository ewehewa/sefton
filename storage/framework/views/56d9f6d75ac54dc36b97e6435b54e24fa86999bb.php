

<?php
    $user = Auth::user();
    
    // Create activity feed with only transactions
    $activities = collect();
    
    // Add recent transactions
    if(isset($recentTransactions)) {
        foreach($recentTransactions->take(5) as $tx) {
            $activities->push((object)[
                'type' => 'transaction',
                'icon' => $tx->icon_fa,
                'icon_bg' => $tx->bg_class,
                'icon_color' => $tx->color_class,
                'title' => $tx->name,
                'description' => $tx->amount_formatted,
                'time' => $tx->date,
                'action' => 'View Details',
                'action_url' => route('accounthistory')
            ]);
        }
    }
    
    // Account milestones and achievements
    $milestones = [];
    
    if($user->created_at->diffInDays() <= 7) {
        $milestones[] = [
            'icon' => 'fa-solid fa-star',
            'title' => 'Welcome to ' . ($settings->site_name ?? 'Banking'),
            'description' => 'Account created ' . $user->created_at->diffForHumans(),
            'color' => 'text-yellow-600'
        ];
    }
    
    if($user->account_bal > 0) {
        $milestones[] = [
            'icon' => 'fa-solid fa-trophy',
            'title' => 'First Deposit',
            'description' => 'Great start to your financial journey!',
            'color' => 'text-green-600'
        ];
    }
    
    if($user->two_factor_enabled) {
        $milestones[] = [
            'icon' => 'fa-solid fa-shield-check',
            'title' => 'Security Enhanced',
            'description' => 'Two-factor authentication enabled',
            'color' => 'text-blue-600'
        ];
    }
?>

<div class="px-4 mb-4">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Recent Activity</h3>
        <a href="<?php echo e(route('accounthistory')); ?>" class="text-xs text-primary-600 dark:text-primary-400 font-medium flex items-center hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
            View All
            <i class="fa-solid fa-chevron-right ml-1 text-xs"></i>
        </a>
    </div>
    
    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 overflow-hidden">
        <?php if($activities->count() > 0): ?>
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                    <div class="flex items-start space-x-3">
                        <!-- Activity Icon -->
                        <div class="w-10 h-10 rounded-xl <?php echo e($activity->icon_bg); ?> flex items-center justify-center flex-shrink-0">
                            <i class="<?php echo e($activity->icon); ?> <?php echo e($activity->icon_color); ?> text-sm"></i>
                        </div>
                        
                        <!-- Activity Content -->
                        <div class="flex-1 min-w-0">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white"><?php echo e($activity->title); ?></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1"><?php echo e($activity->description); ?></p>
                                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-1"><?php echo e($activity->time); ?></p>
                                </div>
                                
                                <!-- Action Button -->
                                <a href="<?php echo e($activity->action_url); ?>" class="ml-3 text-xs text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 font-medium">
                                    <?php echo e($activity->action); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="p-8 text-center">
                <div class="w-16 h-16 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-clock text-gray-400 dark:text-gray-500 text-xl"></i>
                </div>
                <h4 class="text-sm font-medium text-gray-900 dark:text-white mb-2">No Recent Activity</h4>
                <p class="text-xs text-gray-500 dark:text-gray-400">Your account activity will appear here</p>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- Milestones Section -->
    <?php if(count($milestones) > 0): ?>
    <div class="mt-4">
        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">Achievements</h4>
        <div class="space-y-2">
            <?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-700 rounded-xl border border-primary-100 dark:border-gray-600 p-3">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-sm">
                        <i class="<?php echo e($milestone['icon']); ?> <?php echo e($milestone['color']); ?> text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white"><?php echo e($milestone['title']); ?></p>
                        <p class="text-xs text-gray-600 dark:text-gray-300"><?php echo e($milestone['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php endif; ?>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/_mobile_activity_feed.blade.php ENDPATH**/ ?>