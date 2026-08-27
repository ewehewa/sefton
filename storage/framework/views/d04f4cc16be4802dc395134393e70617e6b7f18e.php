
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div x-data="{ 
    showProfilePictureModal: false,
    showTransactionPinModal: false
}" class="p-4 space-y-4">
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
            'title' => 'Account Settings',
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
                <div>
                    <h1 class="text-lg font-bold text-gray-900 dark:text-white">Account Settings</h1>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Manage your profile and security settings</p>
                </div>
                <div class="w-8 h-8 bg-primary-500 rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-user text-white text-sm"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
        <!-- Left Column - Profile Card -->
        <div class="lg:col-span-4 space-y-4">
            <!-- Profile Card -->
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 overflow-hidden">
                <!-- Profile Header -->
                <div class="relative bg-gradient-to-br from-primary-500 to-primary-600 p-4">
                    <div class="flex flex-col items-center text-center">
                        <!-- Profile Photo -->
                        <div class="relative mb-3">
                            <div class="h-16 w-16 rounded-2xl border-2 border-white/50 overflow-hidden bg-white shadow-lg">
                                <img
                                src="<?php echo e(asset('storage/app/public/photos/'.Auth::user()->profile_photo_path)); ?>"
                                class="h-full w-full object-cover"
                                alt="<?php echo e(Auth::user()->name); ?>"
                                onerror="this.src='https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>&background=random'"
                            />
                            </div>
                            <button 
                                @click="showProfilePictureModal = true"
                                class="absolute -bottom-1 -right-1 h-6 w-6 rounded-xl bg-white shadow-md flex items-center justify-center hover:bg-gray-100 transition-colors"
                            >
                                <i class="fa-solid fa-camera text-primary-600 text-xs"></i>
                            </button>
                        </div>
                        
                        <!-- User Info -->
                        <h2 class="text-sm font-bold text-white"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></h2>
                        <p class="text-white/80 text-xs">Account #<?php echo e(Auth::user()->usernumber); ?></p>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="p-3">
                    <nav class="space-y-1">
                        <a href="<?php echo e(route('profile')); ?>" class="flex items-center px-3 py-2 rounded-xl bg-primary-50 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 font-medium text-xs">
                            <i class="fa-solid fa-user text-xs mr-2"></i>
                            <span>Profile Information</span>
                        </a>
                        
                        <a href="<?php echo e(route('editpass')); ?>" class="flex items-center px-3 py-2 rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 font-medium text-xs transition-colors">
                            <i class="fa-solid fa-key text-xs mr-2"></i>
                            <span>Password Settings</span>
                        </a>
                        
                        <a href="<?php echo e(route('twofa')); ?>" class="flex items-center px-3 py-2 rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 font-medium text-xs transition-colors">
                            <i class="fa-solid fa-shield text-xs mr-2"></i>
                            <span>Two-Factor Authentication</span>
                            <?php if(auth()->user()->two_factor_enabled): ?>
                                <span class="ml-auto inline-flex items-center px-1.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400">
                                    <i class="fa-solid fa-check text-xs mr-0.5"></i>
                                    On
                                </span>
                            <?php endif; ?>
                        </a>
                        
                        <button @click="showTransactionPinModal = true" class="w-full flex items-center px-3 py-2 rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 font-medium text-xs text-left transition-colors">
                            <i class="fa-solid fa-credit-card text-xs mr-2"></i>
                            <span>Transaction PIN</span>
                        </button>
                    </nav>
                </div>
            </div>
            
            <!-- Support Card -->
            <?php echo $__env->make('partials._dashboard_help_support', ['support_route' => route('support')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <!-- Right Column - Main Content -->
        <div class="lg:col-span-8">
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 overflow-hidden">
                <!-- Content Header -->
                <div class="border-b border-gray-200/50 dark:border-gray-700/50 px-4 py-3">
                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-primary-500 rounded-lg flex items-center justify-center mr-2">
                            <i class="fa-solid fa-user text-white text-xs"></i>
                        </div>
                        <div>
                            <h2 class="text-sm font-bold text-gray-900 dark:text-white">Profile Information</h2>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Your personal information and account details</p>
                        </div>
                    </div>
                </div>
                
                <!-- Form Content -->
                <div class="p-4">
                    <form action="#" method="post" class="space-y-4">
                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label for="name" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">First Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa-solid fa-user text-gray-400 text-xs"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name"
                                        class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                        value="<?php echo e(Auth::user()->name); ?>" 
                                        readonly
                                    />
                                </div>
                            </div>
                            
                            <div>
                                <label for="lastname" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Last Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa-solid fa-user text-gray-400 text-xs"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="lastname" 
                                        name="lastname"
                                        class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                        value="<?php echo e(Auth::user()->lastname); ?>" 
                                        readonly
                                    />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Account Number -->
                        <div>
                            <label for="accountnumber" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Account Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-hashtag text-gray-400 text-xs"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="accountnumber" 
                                    class="block w-full pl-8 pr-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    value="<?php echo e(Auth::user()->usernumber); ?>" 
                                    readonly
                                />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <button 
                                        type="button"
                                        class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 focus:outline-none"
                                        onclick="navigator.clipboard.writeText('<?php echo e(Auth::user()->usernumber); ?>').then(() => alert('Account number copied!'))"
                                    >
                                        <i class="fa-solid fa-copy text-xs"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Your unique account identifier</p>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-envelope text-gray-400 text-xs"></i>
                                </div>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email"
                                    class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    value="<?php echo e(Auth::user()->email); ?>" 
                                    readonly
                                />
                            </div>
                        </div>
                        
                        <!-- Date of Birth -->
                        <div>
                            <label for="dob" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Date of Birth</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-calendar text-gray-400 text-xs"></i>
                                </div>
                                <input 
                                    type="date" 
                                    id="dob" 
                                    name="dob"
                                    class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    value="<?php echo e(Auth::user()->dob); ?>" 
                                    readonly
                                />
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-phone text-gray-400 text-xs"></i>
                                </div>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone"
                                    class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    value="<?php echo e(Auth::user()->phone); ?>" 
                                    readonly
                                />
                            </div>
                        </div>
                        
                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Address</label>
                            <div class="relative">
                                <div class="absolute top-2 left-3 flex items-start pointer-events-none">
                                    <i class="fa-solid fa-map-pin text-gray-400 text-xs"></i>
                                </div>
                                <textarea 
                                    id="address" 
                                    name="address"
                                    rows="2"
                                    class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 resize-none"
                                    readonly
                                ><?php echo e(Auth::user()->address); ?></textarea>
                            </div>
                        </div>
                        
                        <!-- Info Card -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-3 border border-blue-100 dark:border-blue-800/50">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class="fa-solid fa-info-circle text-blue-500 text-sm"></i>
                                </div>
                                <div class="ml-2">
                                    <h3 class="text-xs font-medium text-blue-800 dark:text-blue-300">Account Information</h3>
                                    <p class="mt-1 text-xs text-blue-700 dark:text-blue-400">
                                        To update your personal information, please contact our customer support team.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Picture Modal -->
    <div 
        x-show="showProfilePictureModal" 
        x-cloak
        class="fixed inset-0 overflow-y-auto z-50 flex items-center justify-center p-4"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="showProfilePictureModal = false"></div>
        
        <div class="relative bg-white dark:bg-gray-800 rounded-2xl w-full max-w-md shadow-2xl border border-gray-200 dark:border-gray-700"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Upload Profile Picture</h3>
                    <button @click="showProfilePictureModal = false" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                        <i class="fa-solid fa-times text-sm"></i>
                    </button>
                </div>
                
                <form action="<?php echo e(route('updateprofilephoto')); ?>" method="post" enctype="multipart/form-data" class="space-y-3">
                    <?php echo csrf_field(); ?>
                    
                    <div>
                        <label for="photo" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-2">Select New Profile Picture</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="photo-upload" class="flex flex-col items-center justify-center w-full h-24 border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-xl cursor-pointer bg-gray-50 dark:bg-gray-700/50 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex flex-col items-center justify-center pt-2 pb-2">
                                    <i class="fa-solid fa-cloud-upload text-gray-400 text-lg mb-1"></i>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">Click to upload</span>
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX. 2MB)</p>
                                </div>
                                <input id="photo-upload" type="file" name="photo" class="hidden" required />
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full px-3 py-2 border border-transparent rounded-xl text-xs font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                        <i class="fa-solid fa-upload text-xs mr-1"></i>
                        Upload Profile Picture
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Transaction PIN Modal -->
    <div 
        x-show="showTransactionPinModal" 
        x-cloak
        class="fixed inset-0 overflow-y-auto z-50 flex items-center justify-center p-4"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="showTransactionPinModal = false"></div>
        
        <div class="relative bg-white dark:bg-gray-800 rounded-2xl w-full max-w-md shadow-2xl border border-gray-200 dark:border-gray-700"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Change Transaction PIN</h3>
                    <button @click="showTransactionPinModal = false" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                        <i class="fa-solid fa-times text-sm"></i>
                    </button>
                </div>
                
                <form action="<?php echo e(route('changepin')); ?>" method="post" class="space-y-3">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <div>
                        <label for="pin" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">New Transaction PIN</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-key text-gray-400 text-xs"></i>
                            </div>
                            <input 
                                type="password" 
                                id="pin" 
                                name="pin"
                                class="block w-full pl-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Enter new transaction PIN"
                                required
                            />
                        </div>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Create a secure PIN you can remember</p>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Current Password</label>
                        <div class="relative" x-data="{ showPassword: false }">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-gray-400 text-xs"></i>
                            </div>
                            <input 
                                :type="showPassword ? 'text' : 'password'" 
                                id="password" 
                                name="current_password"
                                class="block w-full pl-8 pr-8 py-2 text-xs border border-gray-200 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Enter your current password"
                                required
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button 
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 focus:outline-none"
                                >
                                    <i x-show="!showPassword" class="fa-solid fa-eye text-xs"></i>
                                    <i x-show="showPassword" class="fa-solid fa-eye-slash text-xs"></i>
                                </button>
                            </div>
                        </div>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">For security verification</p>
                    </div>
                    
                    <div class="bg-yellow-50 dark:bg-yellow-900/20 rounded-xl p-3 border border-yellow-100 dark:border-yellow-800/50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fa-solid fa-exclamation-triangle text-yellow-500 text-sm"></i>
                            </div>
                            <div class="ml-2">
                                <h3 class="text-xs font-medium text-yellow-800 dark:text-yellow-300">Security Alert</h3>
                                <p class="mt-1 text-xs text-yellow-700 dark:text-yellow-400">
                                    Keep your transaction PIN confidential. Never share it with anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full px-3 py-2 border border-transparent rounded-xl text-xs font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                        <i class="fa-solid fa-rotate-right text-xs mr-1"></i>
                        Update Transaction PIN
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/user/profile.blade.php ENDPATH**/ ?>