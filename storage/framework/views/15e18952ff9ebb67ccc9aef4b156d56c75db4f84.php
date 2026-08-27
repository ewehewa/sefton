
<?php $__env->startSection('title', 'Apply for Virtual Card'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 p-4 lg:p-6">
    <div class="max-w-8xl mx-auto">
        <!-- Mobile Header -->
        <div class="lg:hidden mb-2">
            <?php echo $__env->make('partials._mobile_header', [
                'title' => 'Apply for Card',
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
                        <i class="fas fa-credit-card text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Apply for Virtual Card</h1>
                        <p class="text-gray-600 dark:text-gray-400">Get instant access to a virtual card for online payments</p>
                    </div>
                </div>
                <a href="<?php echo e(route('cards')); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 transition-all duration-300">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Cards
                </a>
            </div>
        </div>

        <!-- Alerts -->
        <div class="mb-2">
            <?php if(session('error') || (session('message') && session('type') == 'error')): ?>
                <div class="bg-red-50/90 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-400 p-4 mb-4 rounded-r-xl backdrop-blur-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700 dark:text-red-300"><?php echo e(session('error') ?: session('message')); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if(session('success') || (session('message') && session('type') == 'success')): ?>
                <div class="bg-green-50/90 dark:bg-green-900/20 border-l-4 border-green-500 dark:border-green-400 p-4 mb-4 rounded-r-xl backdrop-blur-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-500 dark:text-green-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700 dark:text-green-300"><?php echo e(session('success') ?: session('message')); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if(session('message') && session('type') == 'danger'): ?>
                <div class="bg-red-50/90 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-400 p-4 mb-4 rounded-r-xl backdrop-blur-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700 dark:text-red-300"><?php echo e(session('message')); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Main Application Card -->
        <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-2xl shadow-xl border border-white/20 dark:border-gray-700/50 overflow-hidden">
            <!-- Card Info Banner -->
            <div class="bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 dark:from-primary-600 dark:via-primary-700 dark:to-primary-800 p-6 text-white">
                <div class="relative">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-xl lg:text-2xl font-bold mb-2">Apply for a Virtual Card</h2>
                            <p class="text-white/90 text-sm">Get instant access to a virtual card for online payments and subscriptions</p>
                        </div>
                        <div class="hidden md:block">
                            <i class="fas fa-credit-card text-white/75 text-4xl"></i>
                        </div>
                    </div>
                    
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 right-0 w-32 h-32 rounded-full bg-white transform translate-x-16 -translate-y-16"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 rounded-full bg-white transform -translate-x-12 translate-y-12"></div>
                    </div>
                </div>
            </div>
            
            <!-- Application Form -->
            <div class="p-6">
                <form action="<?php echo e(route('cards.apply.post')); ?>" method="POST" class="space-y-6">
                    <?php echo csrf_field(); ?>
                    
                    <!-- Card Details Section -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 mb-1">
                            <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-credit-card text-white text-xs"></i>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Card Details</h3>
                        </div>
                        
                        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4 space-y-4">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <!-- Card Type -->
                                <div class="lg:col-span-2">
                                    <label class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-2">Card Type</label>
                                    <div class="space-y-3">
                                        <div class="relative border rounded-xl p-4 <?php $__errorArgs = ['card_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-200 dark:border-gray-700 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="visa" name="card_type" type="radio" value="visa" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-600 dark:bg-gray-700" checked>
                                                </div>
                                                <div class="ml-3 flex justify-between w-full">
                                                    <div>
                                                        <label for="visa" class="font-semibold text-gray-900 dark:text-white">Visa</label>
                                                        <p class="text-gray-500 dark:text-gray-400 text-xs">Accepted worldwide, suitable for most online purchases</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="text-xs font-bold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900/50 px-2 py-1 rounded">VISA</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="relative border rounded-xl p-4 <?php $__errorArgs = ['card_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-200 dark:border-gray-700 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="mastercard" name="card_type" type="radio" value="mastercard" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                                </div>
                                                <div class="ml-3 flex justify-between w-full">
                                                    <div>
                                                        <label for="mastercard" class="font-semibold text-gray-900 dark:text-white">Mastercard</label>
                                                        <p class="text-gray-500 dark:text-gray-400 text-xs">Global acceptance with enhanced security features</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="text-xs font-bold text-orange-600 dark:text-orange-400 bg-orange-100 dark:bg-orange-900/50 px-2 py-1 rounded">MASTERCARD</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="relative border rounded-xl p-4 <?php $__errorArgs = ['card_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-200 dark:border-gray-700 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="amex" name="card_type" type="radio" value="american_express" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                                </div>
                                                <div class="ml-3 flex justify-between w-full">
                                                    <div>
                                                        <label for="amex" class="font-semibold text-gray-900 dark:text-white">American Express</label>
                                                        <p class="text-gray-500 dark:text-gray-400 text-xs">Premium benefits and exclusive rewards program</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="text-xs font-bold text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-700/50 px-2 py-1 rounded">AMEX</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['card_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- Card Level -->
                                <div>
                                    <label for="card_level" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Card Level <span class="text-red-500">*</span></label>
                                    <select id="card_level" name="card_level" class="mt-1 block w-full py-3 px-3 border <?php $__errorArgs = ['card_level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                                        <option value="">Select a card level</option>
                                        <option value="standard" <?php echo e(old('card_level') == 'standard' ? 'selected' : ''); ?>>Standard - <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($issuanceFees['standard'], 2)); ?></option>
                                        <option value="gold" <?php echo e(old('card_level') == 'gold' ? 'selected' : ''); ?>>Gold - <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($issuanceFees['gold'], 2)); ?></option>
                                        <option value="platinum" <?php echo e(old('card_level') == 'platinum' ? 'selected' : ''); ?>>Platinum - <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($issuanceFees['platinum'], 2)); ?></option>
                                        <option value="black" <?php echo e(old('card_level') == 'black' ? 'selected' : ''); ?>>Black - <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($issuanceFees['black'], 2)); ?></option>
                                    </select>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Different levels offer varied spending limits and features</p>
                                    <?php $__errorArgs = ['card_level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400">Please select a valid card level</p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- Currency -->
                                <div>
                                    <label for="currency" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Currency</label>
                                    <select id="currency" name="currency" class="mt-1 block w-full py-3 px-3 border <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white text-sm">
                                        <option value="USD">USD - US Dollar</option>
                                        <option value="EUR">EUR - Euro</option>
                                        <option value="GBP">GBP - British Pound</option>
                                    </select>
                                    <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- Daily Limit -->
                                <div class="lg:col-span-2">
                                    <label for="daily_limit" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Daily Spending Limit</label>
                                    <div class="mt-1 relative rounded-lg shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <span class="text-gray-500 dark:text-gray-400 text-sm"><?php echo e(Auth::user()->s_curr); ?></span>
                                        </div>
                                        <input type="number" name="daily_limit" id="daily_limit" min="<?php echo e($minLimit); ?>" max="<?php echo e($maxLimit); ?>" value="<?php echo e(old('daily_limit', $minLimit)); ?>" class="focus:ring-2 focus:ring-primary-500 px-2 py-3 border focus:border-primary-500 block w-full pl-12 pr-20 text-sm border-gray-300 dark:border-gray-600 rounded-lg <?php $__errorArgs = ['daily_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-900 dark:text-white">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none z-10">
                                            <span class="text-gray-500 dark:text-gray-400 text-sm"><?php echo e(Auth::user()->curr); ?></span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Limits: <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($minLimit, 2)); ?> - <?php echo e(Auth::user()->s_curr); ?><?php echo e(number_format($maxLimit, 2)); ?></p>
                                    <?php $__errorArgs = ['daily_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Billing Information Section -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 mb-1">
                            <div class="w-6 h-6 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">Billing Information</h3>
                        </div>
                        
                        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4 space-y-4">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <!-- Card Holder Name -->
                                <div class="lg:col-span-2">
                                    <label for="card_holder_name" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Cardholder Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-user text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input type="text" name="card_holder_name" id="card_holder_name" value="<?php echo e(old('card_holder_name', Auth::user()->first_name . ' ' . Auth::user()->last_name)); ?>" class="block w-full pl-10 pr-3 py-3 border <?php $__errorArgs = ['card_holder_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm" placeholder="Enter full name as it should appear on card" required>
                                    </div>
                                    <?php $__errorArgs = ['card_holder_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- Address -->
                                <div class="lg:col-span-2">
                                    <label for="billing_address" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">Billing Address</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-map-marker-alt text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input type="text" name="billing_address" id="billing_address" value="<?php echo e(old('billing_address', Auth::user()->address)); ?>" class="block w-full pl-10 pr-3 py-3 border <?php $__errorArgs = ['billing_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm" placeholder="Enter your billing address" required>
                                    </div>
                                    <?php $__errorArgs = ['billing_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- City -->
                                <div>
                                    <label for="billing_city" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">City</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-city text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input type="text" name="billing_city" id="billing_city" value="<?php echo e(old('billing_city', Auth::user()->city)); ?>" class="block w-full pl-10 pr-3 py-3 border <?php $__errorArgs = ['billing_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm" placeholder="Enter city" required>
                                    </div>
                                    <?php $__errorArgs = ['billing_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <!-- ZIP Code -->
                                <div>
                                    <label for="billing_zip" class="block text-xs font-semibold text-gray-700 dark:text-gray-300 mb-1">ZIP/Postal Code</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none z-10">
                                            <i class="fas fa-mail-bulk text-gray-400 dark:text-gray-500"></i>
                                        </div>
                                        <input type="text" name="billing_zip" id="billing_zip" value="<?php echo e(old('billing_zip', Auth::user()->zip)); ?>" class="block w-full pl-10 pr-3 py-3 border <?php $__errorArgs = ['billing_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 dark:border-red-500 <?php else: ?> border-gray-300 dark:border-gray-600 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 text-sm" placeholder="Enter ZIP code" required>
                                    </div>
                                    <?php $__errorArgs = ['billing_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Terms and Conditions -->
                    <div class="bg-gradient-to-br from-primary-50/80 to-blue-50/80 dark:from-gray-800/90 dark:to-gray-900/90 backdrop-blur-sm rounded-xl border border-primary-200/50 dark:border-gray-600/50 p-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex items-center h-5 mt-1">
                                <input id="terms" name="terms" type="checkbox" class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-500 rounded" required>
                            </div>
                            <div class="text-sm">
                                <label for="terms" class="font-semibold text-gray-900 dark:text-white">
                                    I agree to the Terms and Conditions
                                </label>
                                <p class="text-gray-700 dark:text-gray-200 text-xs mt-1">
                                    By checking this box, you agree to our virtual card terms, including fees, limits, and usage policies. 
                                    You also consent to electronic communications regarding your card account.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="flex flex-col lg:flex-row lg:space-x-3 space-y-2 lg:space-y-0 pt-4">
                        <button type="submit" class="w-full lg:flex-1 inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-xl shadow-lg text-base font-semibold text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
                            <i class="fas fa-credit-card mr-2"></i>
                            Submit Application
                        </button>
                        <a href="<?php echo e(route('cards')); ?>" class="w-full lg:w-auto inline-flex items-center justify-center px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-base font-semibold text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to Cards
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Info Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-4">
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-green-500 to-emerald-600 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white text-sm"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Secure</h3>
                </div>
                <p class="text-xs text-gray-600 dark:text-gray-400">Bank-level security with real-time fraud monitoring and instant notifications.</p>
            </div>
            
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-bolt text-white text-sm"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Instant</h3>
                </div>
                <p class="text-xs text-gray-600 dark:text-gray-400">Get your virtual card instantly after approval. Start using it for online purchases immediately.</p>
            </div>
            
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 p-4">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-sliders-h text-white text-sm"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Control</h3>
                </div>
                <p class="text-xs text-gray-600 dark:text-gray-400">Set spending limits, freeze cards instantly, and monitor all transactions in real-time.</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tidetrus/public_html/resources/views/user/cards/apply.blade.php ENDPATH**/ ?>