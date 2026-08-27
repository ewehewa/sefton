
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-4 py-6 max-w-8xl">
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

    <!-- Page Header with Breadcrumbs -->
    <div class="flex flex-col mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 mb-1">KYC Verification</h1>
            <div class="flex items-center text-sm text-gray-500">
                <a href="<?php echo e(route('dashboard')); ?>" class="hover:text-primary-600">Dashboard</a>
                <i data-lucide="chevron-right" class="h-4 w-4 mx-2"></i>
                <span class="font-medium text-gray-700">Account Verification</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden mb-6">
        <!-- Content Header -->
        <div class="border-b border-gray-200 px-6 py-4">
            <div class="flex items-center">
                <i data-lucide="clipboard-check" class="h-6 w-6 mr-2 text-primary-600"></i>
                <h2 class="text-xl font-semibold text-gray-900">Account Information</h2>
            </div>
            <p class="mt-1 text-sm text-gray-500">To comply with regulations, please provide your information to complete the verification process.</p>
        </div>
        
        <!-- Form Content -->
        <div class="p-6">
            <form action="<?php echo e(route('kycsubmit')); ?>" method="POST" enctype="multipart/form-data" class="space-y-8">
                <?php echo csrf_field(); ?>
                
                <!-- Personal Details Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <i data-lucide="user" class="h-5 w-5 mr-2 text-primary-600"></i>
                            <h3 class="text-base font-medium text-gray-900">Personal Details</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Your personal information required for identification</p>
                    </div>
                    
                    <div class="p-4">
                        <p class="text-sm text-gray-600 mb-4">Kindly provide the information requested below to enable us to create an account for you.</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Full Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="user" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="name" id="name" value='<?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?>' class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="mail" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="email" name="email" id="email" value='<?php echo e(Auth::user()->email); ?>' class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                                    Phone <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="phone" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="phone" id="phone" value='<?php echo e(Auth::user()->phone); ?>' class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                                    Title <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="badge" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <select name="title" id="title" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                        <option value="">Please select your Title</option>
                                        <option value="Male">Mr.</option>
                                        <option value="Female">Mrs.</option>
                                        <option value="Female">Mr&Mrs.</option>
                                        <option value="Female">Ms.</option>
                                        <option value="Female">Miss.</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Gender -->
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">
                                    Gender <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="users" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <select name="gender" id="gender" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                        <option value="">Please select your gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Zipcode -->
                            <div>
                                <label for="zipcode" class="block text-sm font-medium text-gray-700 mb-1">
                                    Zipcode <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="map-pin" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="zipcode" id="zipcode" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Date of birth -->
                            <div>
                                <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">
                                    Date of birth <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="calendar" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="date" name="dob" id="dob" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" data-toggle="date" placeholder="Select date" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Employment Information Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <i data-lucide="briefcase" class="h-5 w-5 mr-2 text-primary-600"></i>
                            <h3 class="text-base font-medium text-gray-900">Employment Information</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Required in case of loan or facility application</p>
                    </div>
                    
                    <div class="p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- State Security Number -->
                            <div>
                                <label for="statenumber" class="block text-sm font-medium text-gray-700 mb-1">
                                    State Security Number (SSN, NI, SIN etc.) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="shield" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="statenumber" id="statenumber" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Account Type -->
                            <div>
                                <label for="accounttype" class="block text-sm font-medium text-gray-700 mb-1">
                                    Account Type <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="landmark" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <select name="accounttype" id="accounttype" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                        <option value="">Please select Account Type</option> 
                                        <option value="Checking Account">Checking Account</option>
                                        <option value="Savings Account">Saving Account</option>
                                        <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                        <option value="Current Account">Current Account</option>
                                        <option value="Crypto Currency Account">Crypto Currency Account</option>
                                        <option value="Business Account">Business Account</option>
                                        <option value="Non Resident Account">Non Resident Account</option>
                                        <option value="Cooperate Business Account">Cooperate Business Account</option>
                                        <option value="Investment Account">Investment Account</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Type of Employment -->
                            <div>
                                <label for="employer" class="block text-sm font-medium text-gray-700 mb-1">
                                    Type of Employment <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="building" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <select name="employer" id="employer" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                        <option value="">Select Type of Employment</option>
                                        <option value="Self Employed">Self Employed</option>  
                                        <option value="Public/Government Office">Public/Government Office</option>  
                                        <option value="Private/Partnership Office">Private/Partnership Office</option>  
                                        <option value="Business/Sales">Business/Sales</option>  
                                        <option value="Trading/Market">Trading/Market</option>  
                                        <option value="Military/Paramilitary">Military/Paramilitary</option>  
                                        <option value="Politician/Celebrity">Politician/Celebrity</option>  
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Annual income Range -->
                            <div>
                                <label for="income" class="block text-sm font-medium text-gray-700 mb-1">
                                    Annual income Range <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="dollar-sign" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <select name="income" id="income" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                        <option value="">Select Salary Range</option>
                                        <option value="$100.00 - $500.00">$100.00 - $500.00</option> 
                                        <option value="$700.00 - $1,000.00">$700.00 - $1,000.00</option> 
                                        <option value="$1,000.00 - $2,000.00">$1,000.00 - $2,000.00</option> 
                                        <option value="$2,000.00 - $5,000.00">$2,000.00 - $5,000.00</option> 
                                        <option value="$5,000.00 - $10,000.00">$5,000.00 - $10,000.00</option> 
                                        <option value="$15,000.00 - $20,000.00">$15,000.00 - $20,000.00</option> 
                                        <option value="$25,000.00 - $30,000.00">$25,000.00 - $30,000.00</option> 
                                        <option value="$30,000.00 - $70,000.00">$30,000.00 - $70,000.00</option> 
                                        <option value="$80,000.00 - $140,000.00">$80,000.00 - $140,000.00</option> 
                                        <option value="$150,000.00 - $300,000.00">$150,000.00 - $300,000.00</option> 
                                        <option value="$300,000.00 - $1,000,000.00">$300,000.00 - $1,000,000.00</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Address Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <i data-lucide="map" class="h-5 w-5 mr-2 text-primary-600"></i>
                            <h3 class="text-base font-medium text-gray-900">Your Address</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Your location information required for identification</p>
                    </div>
                    
                    <div class="p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Address line -->
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">
                                    Address line <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="home" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="address" id="address" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- City -->
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700 mb-1">
                                    City <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="building" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="city" id="city" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- State -->
                            <div>
                                <label for="state" class="block text-sm font-medium text-gray-700 mb-1">
                                    State <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="map-pin" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="state" id="state" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Nationality -->
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700 mb-1">
                                    Nationality <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="flag" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="country" id="country" value='<?php echo e(Auth::user()->country); ?>' class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Next of Kin Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <i data-lucide="users" class="h-5 w-5 mr-2 text-primary-600"></i>
                            <h3 class="text-base font-medium text-gray-900">Registered Next of Kin</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Information about your beneficiary</p>
                    </div>
                    
                    <div class="p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Beneficiary Legal Name -->
                            <div>
                                <label for="kinname" class="block text-sm font-medium text-gray-700 mb-1">
                                    Beneficiary Legal Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="user" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="kinname" id="kinname" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Next of kin Address -->
                            <div>
                                <label for="kinaddress" class="block text-sm font-medium text-gray-700 mb-1">
                                    Next of kin Address <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="home" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="kinaddress" id="kinaddress" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Relationship -->
                            <div>
                                <label for="relationship" class="block text-sm font-medium text-gray-700 mb-1">
                                    Relationship <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="heart" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="relationship" id="relationship" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                            
                            <!-- Age -->
                            <div>
                                <label for="age" class="block text-sm font-medium text-gray-700 mb-1">
                                    Age <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="clock" class="h-4 w-4 text-gray-400"></i>
                                    </div>
                                    <input type="text" name="age" id="age" class="pl-10 block w-full py-2 pr-3 border border-gray-200 rounded-lg focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Document Upload Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <i data-lucide="file-text" class="h-5 w-5 mr-2 text-primary-600"></i>
                            <h3 class="text-base font-medium text-gray-900">Document Upload</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Personal documents required for identity verification</p>
                    </div>
                    
                    <div class="p-4">
                        <!-- Document Type Selection -->
                        <div class="mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    
<div class="relative bg-white border border-gray-200 p-4 rounded-lg shadow-sm hover:border-primary-500 cursor-pointer document-type-card" data-doctype="Int'l Passport">
    <div class="flex items-center justify-center mb-2">
        <i data-lucide="book" class="h-6 w-6 text-primary-600"></i>
    </div>
    <div class="text-center">
        <span class="block text-sm font-medium text-gray-900">Int'l Passport</span>
    </div>
    <input type="radio" name="document_type" id="passport-radio" value="Int'l Passport" class="absolute opacity-0" checked>
    <div id="passport-border" class="absolute inset-0 border-2 rounded-lg pointer-events-none border-primary-500"></div>
</div>

<div class="relative bg-white border border-gray-200 p-4 rounded-lg shadow-sm hover:border-primary-500 cursor-pointer document-type-card" data-doctype="National ID">
    <div class="flex items-center justify-center mb-2">
        <i data-lucide="flag" class="h-6 w-6 text-primary-600"></i>
    </div>
    <div class="text-center">
        <span class="block text-sm font-medium text-gray-900">National ID</span>
    </div>
    <input type="radio" name="document_type" id="national-id-radio" value="National ID" class="absolute opacity-0">
    <div id="national-id-border" class="absolute inset-0 border-2 border-transparent rounded-lg pointer-events-none"></div>
</div>

<div class="relative bg-white border border-gray-200 p-4 rounded-lg shadow-sm hover:border-primary-500 cursor-pointer document-type-card" data-doctype="Drivers License">
    <div class="flex items-center justify-center mb-2">
        <i data-lucide="id-card" class="h-6 w-6 text-primary-600"></i>
    </div>
    <div class="text-center">
        <span class="block text-sm font-medium text-gray-900">Drivers License</span>
    </div>
    <input type="radio" name="document_type" id="drivers-license-radio" value="Drivers License" class="absolute opacity-0">
    <div id="drivers-license-border" class="absolute inset-0 border-2 border-transparent rounded-lg pointer-events-none"></div>
</div>
                            </div>
                        </div>
                        
                        <!-- Document Guidelines -->
                        <div class="mb-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 flex items-center">
                                <i data-lucide="alert-circle" class="h-4 w-4 text-primary-600 mr-2"></i>
                                To avoid delays when verifying your account
                            </h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0"></i>
                                    <span>Chosen credential must not have expired</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0"></i>
                                    <span>Document should be in good condition and clearly visible</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check-circle" class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0"></i>
                                    <span>Make sure that there is no light glare on the document</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Front Side Upload -->
                        <div class="mb-6">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">
                                Upload front side <span class="text-red-500">*</span>
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center hover:bg-gray-50 transition-colors" id="frontimg-container">
                                    <input type="file" name="frontimg" id="frontimg" class="hidden" required accept="image/*">
                                    <label for="frontimg" class="cursor-pointer block" id="frontimg-label">
                                        <i data-lucide="upload-cloud" class="h-10 w-10 text-gray-400 mx-auto mb-2"></i>
                                        <span class="text-sm text-gray-600 block mb-1">Click to upload or drag and drop</span>
                                        <span class="text-xs text-gray-500">SVG, PNG, JPG or GIF (max. 2MB)</span>
                                    </label>
                                    <div class="hidden mt-3" id="frontimg-preview-container">
                                        <img id="frontimg-preview" class="mx-auto max-h-40 rounded-lg shadow-sm" src="" alt="ID front preview">
                                        <p class="mt-2 text-xs text-gray-600" id="frontimg-name"></p>
                                        <button type="button" class="mt-2 text-xs text-red-600 hover:text-red-800" id="frontimg-remove">
                                            <span class="flex items-center justify-center">
                                                <i data-lucide="trash-2" class="h-3 w-3 mr-1"></i> Remove
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center" id="frontimg-icon">
                                    <i data-lucide="id-card" class="h-20 w-20 text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Back Side Upload -->
                        <div class="mb-6">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">
                                Upload back side <span class="text-red-500">*</span>
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center hover:bg-gray-50 transition-colors" id="backimg-container">
                                    <input type="file" name="backimg" id="backimg" class="hidden" required accept="image/*">
                                    <label for="backimg" class="cursor-pointer block" id="backimg-label">
                                        <i data-lucide="upload-cloud" class="h-10 w-10 text-gray-400 mx-auto mb-2"></i>
                                        <span class="text-sm text-gray-600 block mb-1">Click to upload or drag and drop</span>
                                        <span class="text-xs text-gray-500">SVG, PNG, JPG or GIF (max. 2MB)</span>
                                    </label>
                                    <div class="hidden mt-3" id="backimg-preview-container">
                                        <img id="backimg-preview" class="mx-auto max-h-40 rounded-lg shadow-sm" src="" alt="ID back preview">
                                        <p class="mt-2 text-xs text-gray-600" id="backimg-name"></p>
                                        <button type="button" class="mt-2 text-xs text-red-600 hover:text-red-800" id="backimg-remove">
                                            <span class="flex items-center justify-center">
                                                <i data-lucide="trash-2" class="h-3 w-3 mr-1"></i> Remove
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center" id="backimg-icon">
                                    <i data-lucide="credit-card" class="h-20 w-20 text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Passport Photo Upload -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-900 mb-2">
                                Upload Passport Photograph <span class="text-red-500">*</span>
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center hover:bg-gray-50 transition-colors" id="photo-container">
                                    <input type="file" name="photo" id="photo" class="hidden" required accept="image/*">
                                    <label for="photo" class="cursor-pointer block" id="photo-label">
                                        <i data-lucide="upload-cloud" class="h-10 w-10 text-gray-400 mx-auto mb-2"></i>
                                        <span class="text-sm text-gray-600 block mb-1">Click to upload or drag and drop</span>
                                        <span class="text-xs text-gray-500">SVG, PNG, JPG or GIF (max. 2MB)</span>
                                    </label>
                                    <div class="hidden mt-3" id="photo-preview-container">
                                        <img id="photo-preview" class="mx-auto max-h-40 rounded-lg shadow-sm" src="" alt="Passport photo preview">
                                        <p class="mt-2 text-xs text-gray-600" id="photo-name"></p>
                                        <button type="button" class="mt-2 text-xs text-red-600 hover:text-red-800" id="photo-remove">
                                            <span class="flex items-center justify-center">
                                                <i data-lucide="trash-2" class="h-3 w-3 mr-1"></i> Remove
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center" id="photo-icon">
                                    <i data-lucide="user" class="h-20 w-20 text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button Section -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <div class="p-4">
                        <?php if(Auth::user()->account_verify == 'Under review'): ?>
                            <div class="mb-4 p-4 bg-yellow-50 rounded-lg border border-yellow-200 text-yellow-700">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="alert-triangle" class="h-5 w-5 text-yellow-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm">Your previous application is under review, please wait</p>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 opacity-50 cursor-not-allowed" disabled>
                                Submit Application
                            </button>
                        <?php else: ?>
                            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200">
                                <div class="flex items-center justify-center">
                                    <i data-lucide="check-circle" class="h-5 w-5 mr-2"></i>
                                    Submit Application
                                </div>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Help Section -->
    <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
        <div class="p-6">
            <div class="flex flex-col md:flex-row gap-6 items-center">
                <div class="flex-shrink-0">
                    <div class="h-16 w-16 bg-primary-50 rounded-full flex items-center justify-center">
                        <i data-lucide="life-buoy" class="h-8 w-8 text-primary-600"></i>
                    </div>
                </div>
                <div class="flex-grow text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Need help with verification?</h3>
                    <p class="text-gray-600">Our support team is available 24/7 to assist you with the verification process. Reach out with any questions.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="<?php echo e(route('support')); ?>" class="inline-flex items-center justify-center px-4 py-2 border border-primary-600 rounded-md shadow-sm text-sm font-medium text-primary-600 bg-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200">
                        <i data-lucide="message-square" class="h-4 w-4 mr-2"></i>
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this modal HTML right before the closing </div> of the main container -->
<div id="fileSizeModal" class="fixed inset-0 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal container -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <i data-lucide="alert-triangle" class="h-6 w-6 text-red-600"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modalTitle">
                            File Too Large
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="modalMessage">
                                The file you selected exceeds the 2MB limit. Please choose a smaller file.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" id="modalConfirmBtn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-600 text-base font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:ml-3 sm:w-auto sm:text-sm">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Lucide icons
    lucide.createIcons();
    
    // Modal Control Functions
    const fileSizeModal = document.getElementById('fileSizeModal');
    const modalConfirmBtn = document.getElementById('modalConfirmBtn');
    
    function showModal() {
        fileSizeModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }
    
    function hideModal() {
        fileSizeModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
    
    modalConfirmBtn.addEventListener('click', hideModal);

    // Document Type Selection Logic
    window.selectDocType = function(docType) {
        // Update radio buttons
        document.getElementById('passport-radio').checked = docType === "Int'l Passport";
        document.getElementById('national-id-radio').checked = docType === "National ID";
        document.getElementById('drivers-license-radio').checked = docType === "Drivers License";
        
        // Reset all borders
        document.getElementById('passport-border').classList.remove('border-primary-500');
        document.getElementById('passport-border').classList.add('border-transparent');
        document.getElementById('national-id-border').classList.remove('border-primary-500');
        document.getElementById('national-id-border').classList.add('border-transparent');
        document.getElementById('drivers-license-border').classList.remove('border-primary-500');
        document.getElementById('drivers-license-border').classList.add('border-transparent');
        
        // Activate selected border
        if (docType === "Int'l Passport") {
            document.getElementById('passport-border').classList.remove('border-transparent');
            document.getElementById('passport-border').classList.add('border-primary-500');
        } else if (docType === "National ID") {
            document.getElementById('national-id-border').classList.remove('border-transparent');
            document.getElementById('national-id-border').classList.add('border-primary-500');
        } else if (docType === "Drivers License") {
            document.getElementById('drivers-license-border').classList.remove('border-transparent');
            document.getElementById('drivers-license-border').classList.add('border-primary-500');
        }
    };

    // Document Type Card Click Handlers
    document.querySelectorAll('.document-type-card').forEach(card => {
        card.addEventListener('click', function() {
            const docType = this.getAttribute('data-doctype');
            window.selectDocType(docType);
        });
    });

    // File Upload Handling Function
    function setupFileUpload(fileId, previewId, nameId, previewContainerId, removeId, labelId, iconId) {
        const fileInput = document.getElementById(fileId);
        const preview = document.getElementById(previewId);
        const nameElement = document.getElementById(nameId);
        const previewContainer = document.getElementById(previewContainerId);
        const removeButton = document.getElementById(removeId);
        const label = document.getElementById(labelId);
        const iconContainer = document.getElementById(iconId);
        const maxSize = 2 * 1024 * 1024; // 2MB

        // File Input Change Handler
        fileInput.addEventListener('change', function(e) {
            if (this.files && this.files[0]) {
                const file = this.files[0];
                
                if (file.size > maxSize) {
                    showModal();
                    this.value = '';
                    return;
                }

                nameElement.textContent = file.name;

                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                        label.classList.add('hidden');
                        if (iconContainer) iconContainer.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewContainer.classList.remove('hidden');
                    label.classList.add('hidden');
                }
            }
        });

        // Remove File Handler
        removeButton.addEventListener('click', function(e) {
            e.preventDefault();
            fileInput.value = '';
            preview.src = '';
            nameElement.textContent = '';
            previewContainer.classList.add('hidden');
            label.classList.remove('hidden');
            if (iconContainer) iconContainer.classList.remove('hidden');
        });

        // Drag and Drop Handlers
        const container = fileInput.closest('div');
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            container.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            container.addEventListener(eventName, function() {
                container.classList.add('border-primary-500', 'bg-primary-50');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            container.addEventListener(eventName, function() {
                container.classList.remove('border-primary-500', 'bg-primary-50');
            });
        });

        container.addEventListener('drop', function(e) {
            const file = e.dataTransfer.files[0];
            if (file) {
                if (file.size > maxSize) {
                    showModal();
                    return;
                }
                fileInput.files = e.dataTransfer.files;
                const event = new Event('change');
                fileInput.dispatchEvent(event);
            }
        });
    }

    // Initialize File Uploads
    setupFileUpload('frontimg', 'frontimg-preview', 'frontimg-name', 'frontimg-preview-container', 'frontimg-remove', 'frontimg-label', 'frontimg-icon');
    setupFileUpload('backimg', 'backimg-preview', 'backimg-name', 'backimg-preview-container', 'backimg-remove', 'backimg-label', 'backimg-icon');
    setupFileUpload('photo', 'photo-preview', 'photo-name', 'photo-preview-container', 'photo-remove', 'photo-label', 'photo-icon');

    // Set Initial Document Type
    window.selectDocType("Int'l Passport");
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nexatrus/public_html/resources/views/user/verification.blade.php ENDPATH**/ ?>