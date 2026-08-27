
<?php $__env->startSection('title', 'PIN Verification'); ?>
<?php $__env->startSection('content'); ?>

<div x-data="{
    pin: '',
    maxLength: 4,
    isProcessing: false,
    errorMessage: '',
    successMessage: '',
    isMobile: window.innerWidth < 768,
    showKeypad: true,
    
    init() {
        window.addEventListener('resize', () => {
            this.isMobile = window.innerWidth < 768;
        });
        
        // Auto-submit when complete (for keypad entry)
        this.$watch('pin', value => {
            if (value.length === this.maxLength && this.isMobile) {
                setTimeout(() => this.submitPin(), 300);
            }
        });
    },
    
    addDigit(digit) {
        if (this.pin.length < this.maxLength) {
            this.pin += digit;
            // Add haptic feedback for mobile
            if (this.isMobile && window.navigator.vibrate) {
                window.navigator.vibrate(50);
            }
        }
    },
    
    removeDigit() {
        this.pin = this.pin.slice(0, -1);
    },
    
    clearPin() {
        this.pin = '';
    },
    
    async submitPin() {
        if (this.pin.length < this.maxLength) {
            this.errorMessage = 'Please enter all 4 digits';
            setTimeout(() => this.errorMessage = '', 3000);
            return;
        }
        
        this.isProcessing = true;
        
        try {
            const response = await fetch('<?php echo e(route('pinstatus')); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                body: JSON.stringify({ pin: this.pin })
            });
            
            const result = await response.json();
            
            if (result.success) {
                this.successMessage = result.message || 'PIN verified successfully!';
                
                // Success animation
                if (document.getElementById('success-checkmark')) {
                    document.getElementById('success-checkmark').classList.remove('hidden');
                    document.getElementById('success-checkmark').classList.add('animate-success');
                }
                
                setTimeout(() => window.location.href = result.redirect || '<?php echo e(route('dashboard')); ?>', 1500);
            } else {
                this.errorMessage = result.message || 'Invalid PIN. Please try again.';
                
                // Error animation with enhanced visual feedback
                if (this.isMobile) {
                    const pinDisplay = document.querySelector('.pin-display');
                    if (pinDisplay) {
                        pinDisplay.classList.add('animate-shake');
                        setTimeout(() => pinDisplay.classList.remove('animate-shake'), 500);
                    }
                } else {
                    const pinInput = document.getElementById('desktop-pin');
                    if (pinInput) {
                        pinInput.classList.add('border-red-500', 'animate-shake');
                        setTimeout(() => pinInput.classList.remove('border-red-500', 'animate-shake'), 500);
                    }
                }
                
                this.pin = '';
                setTimeout(() => this.errorMessage = '', 3000);
            }
        } catch (error) {
            this.errorMessage = 'An error occurred. Please try again.';
            setTimeout(() => this.errorMessage = '', 3000);
        } finally {
            this.isProcessing = false;
        }
    }
}" class="flex items-center justify-center min-h-screen w-full bg-gradient-to-br from-gray-50 to-gray-100 p-0 md:p-4">
    
    <!-- Card Container with Enhanced Shadow and Animation -->
    <div class="w-full h-full md:h-auto md:max-w-md bg-white md:rounded-3xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:shadow-3xl">
        
        <!-- Mobile-optimized Header -->
        <div class="relative">
            <!-- Simplified Background Pattern for Mobile -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 opacity-95"></div>
            
            <!-- Optimized Content -->
            <div class="relative py-4 px-6 flex flex-col items-center md:py-10">
                <div class="w-12 h-12 md:w-20 md:h-20 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center mb-3 md:mb-6 shadow-lg">
                    <i data-lucide="fingerprint" class="h-6 w-6 md:h-10 md:w-10 text-white"></i>
                </div>
                
                <h1 class="text-xl md:text-2xl font-bold text-white text-center mb-1">Verify Your Identity</h1>
                <p class="text-white/90 text-center text-sm md:text-base max-w-xs">
                    Enter your 4-digit PIN
                </p>
            </div>
        </div>
        
        <!-- Mobile-optimized User Section (Only Avatar) -->
        <div class="flex flex-col items-center pt-4 pb-2 md:pt-8 md:pb-4">
            <!-- Mobile-optimized User Avatar (smaller) -->
            <div class="relative md:transform md:transition-transform md:duration-300 md:hover:scale-105">
                <div class="w-16 h-16 md:w-24 md:h-24 rounded-full overflow-hidden border-2 md:border-4 border-white shadow-lg">
                    <img 
                        src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e(Auth::user()->profile_photo_path); ?>" 
                        alt="<?php echo e(Auth::user()->name); ?>" 
                        onerror="this.src='https://ui-avatars.com/api/?name=<?php echo e(urlencode(Auth::user()->name)); ?>&color=7F9CF5&background=EBF4FF';"
                        class="w-full h-full object-cover">
                </div>
                
                <!-- Enhanced Security Badge (smaller) -->
                <div class="absolute -right-1 -bottom-1 bg-primary-100 text-primary-700 p-1 rounded-full border-2 border-white shadow-md">
                    <i data-lucide="shield" class="h-4 w-4"></i>
                </div>
            </div>
            
            <!-- Enhanced User Status -->
            <?php if(Auth::user()->status == 'blocked'): ?>
                <div class="mt-4 w-full max-w-sm bg-red-50 border-l-4 border-red-500 p-3 rounded-r-lg">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i data-lucide="shield-alert" class="h-4 w-4 text-red-500"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-xs font-medium text-red-800">Account Blocked</h3>
                            <div class="text-xs text-red-700">
                                <p>Your account has been blocked for security reasons.</p>
                                <div class="mt-2">
                                    <a href="mailto:<?php echo e($settings->contact_email); ?>" class="inline-flex items-center text-xs font-medium text-red-700 hover:text-red-600">
                                        <i data-lucide="mail" class="h-3 w-3 mr-1"></i>
                                        Contact Support
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- Enhanced Success Animation -->
                <div id="success-checkmark" class="hidden absolute z-10 flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center text-green-500 shadow-lg">
                        <i data-lucide="check" class="h-10 w-10"></i>
                    </div>
                </div>
                
                <!-- Mobile-optimized PIN Entry -->
                <div class="px-6 py-3 w-full md:hidden">
                    
                    <!-- Compact Error/Success Messages inline with PIN dots -->
                    <div class="flex items-center justify-center mb-3">
                        <!-- Enhanced PIN Display Dots -->
                        <div class="pin-display flex justify-center space-x-3">
                            <template x-for="(digit, index) in Array.from({length: maxLength})">
                                <div 
                                    class="w-4 h-4 rounded-full transition-all duration-300"
                                    :class="index < pin.length ? 'bg-primary-600 scale-110 shadow-md' : 'bg-gray-200'">
                                </div>
                            </template>
                        </div>
                        
                        <!-- Inline Error Message -->
                        <div 
                            x-show="errorMessage" 
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="ml-3 text-red-600 text-xs font-medium">
                            <span x-text="errorMessage"></span>
                        </div>
                        
                        <!-- Success Popup with Icon (instead of inline message) -->
                        <div 
                            x-show="successMessage" 
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="fixed inset-x-0 top-1/4 flex items-center justify-center z-50 px-4">
                            <div class="bg-green-50 border border-green-100 rounded-lg shadow-lg px-4 py-3 flex items-center max-w-xs">
                                <div class="flex-shrink-0 bg-green-100 rounded-full p-2 mr-3">
                                    <i data-lucide="shield-check" class="h-5 w-5 text-green-600"></i>
                                </div>
                                <span class="text-green-800 text-sm font-medium" x-text="successMessage"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Optimized Mobile Numeric Keypad -->
                    <div class="keypad grid grid-cols-3 gap-3">
                        <!-- Numbers 1-9 -->
                        <template x-for="n in 9">
                            <button 
                                type="button"
                                @click="addDigit(n)"
                                :disabled="isProcessing || pin.length >= maxLength"
                                class="aspect-square rounded-lg bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary-100 hover:bg-primary-50 transition-all duration-200 text-lg font-semibold text-gray-700 flex items-center justify-center"
                                :class="{'opacity-50 cursor-not-allowed': isProcessing || pin.length >= maxLength}">
                                <span x-text="n"></span>
                            </button>
                        </template>
                        
                        <!-- Clear button -->
                        <button 
                            type="button"
                            @click="clearPin()"
                            :disabled="isProcessing || pin.length === 0"
                            class="aspect-square rounded-lg bg-white border border-yellow-100 shadow-sm hover:shadow-md hover:bg-yellow-50 transition-all duration-200 text-lg text-yellow-700 flex items-center justify-center"
                            :class="{'opacity-50 cursor-not-allowed': isProcessing || pin.length === 0}">
                            <i data-lucide="rotate-ccw" class="h-5 w-5"></i>
                        </button>
                        
                        <!-- Number 0 -->
                        <button 
                            type="button"
                            @click="addDigit(0)"
                            :disabled="isProcessing || pin.length >= maxLength"
                            class="aspect-square rounded-lg bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary-100 hover:bg-primary-50 transition-all duration-200 text-lg font-semibold text-gray-700 flex items-center justify-center"
                            :class="{'opacity-50 cursor-not-allowed': isProcessing || pin.length >= maxLength}">
                            0
                        </button>
                        
                        <!-- Backspace button -->
                        <button 
                            type="button"
                            @click="removeDigit()"
                            :disabled="isProcessing || pin.length === 0"
                            class="aspect-square rounded-lg bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary-100 hover:bg-primary-50 transition-all duration-200 text-lg text-gray-700 flex items-center justify-center"
                            :class="{'opacity-50 cursor-not-allowed': isProcessing || pin.length === 0}">
                            <i data-lucide="delete" class="h-5 w-5"></i>
                        </button>
                    </div>
                    
                    <!-- Optimized Compact Security Footer -->
                    <div class="flex items-center justify-center mt-4">
                        <i data-lucide="lock" class="h-3 w-3 text-primary-500 mr-1"></i>
                        <p class="text-xs text-gray-500">
                            Secure PIN verification protects your account
                        </p>
                    </div>
                </div>
                
                <!-- Desktop PIN Entry (unchanged) -->
                <div class="px-6 pb-6 w-full hidden md:block">
                    <div class="mb-6">
                        <label for="desktop-pin" class="block text-sm font-medium text-gray-700 mb-2">Enter your 4-digit verification PIN</label>
                        <input 
                            id="desktop-pin"
                            type="password" 
                            inputmode="numeric"
                            maxlength="4"
                            pattern="[0-9]*"
                            x-model="pin"
                            :disabled="isProcessing"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-center text-xl tracking-widest transition-all duration-300 hover:border-primary-300"
                            placeholder="••••">
                    </div>
                    
                    <!-- Desktop Error/Success Messages -->
                    <div 
                        x-show="errorMessage" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mb-4 text-center text-red-600 text-sm font-medium max-w-xs">
                        <span x-text="errorMessage"></span>
                    </div>
                    
                    <div 
                        x-show="successMessage" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="mb-4 text-center text-green-600 text-sm font-medium max-w-xs">
                        <span x-text="successMessage"></span>
                    </div>
                    
                    <!-- Enhanced Submit Button for Desktop -->
                    <button 
                        type="button"
                        @click="submitPin()"
                        :disabled="isProcessing || pin.length !== maxLength"
                        class="w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg"
                        :class="{'opacity-50 cursor-not-allowed': isProcessing || pin.length !== maxLength}">
                        <template x-if="!isProcessing">
                            <div class="flex items-center">
                                <i data-lucide="shield-check" class="h-5 w-5 mr-2"></i>
                                Verify PIN
                            </div>
                        </template>
                        <template x-if="isProcessing">
                            <div class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Processing...
                            </div>
                        </template>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Enhanced Footer Security Info (desktop only) -->
        <div class="px-6 pb-6 pt-2 hidden md:block">
            <div class="flex items-center justify-center p-3 bg-gray-50 rounded-xl transition-all duration-300 hover:bg-gray-100">
                <i data-lucide="lock" class="h-4 w-4 text-primary-500 mr-2"></i>
                <p class="text-xs text-gray-600">
                    Your security is our priority. PIN verification protects your account from unauthorized access.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Enhanced Animation classes */
    @keyframes  shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
    }
    
    @keyframes  success-scale {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
    
    @keyframes  pulse-slow {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.2; }
    }
    
    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }
    
    .animate-success {
        animation: success-scale 0.6s ease-in-out;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 3s infinite;
    }
    
    .delay-100 {
        animation-delay: 100ms;
    }
    
    .delay-200 {
        animation-delay: 200ms;
    }
    
    .delay-300 {
        animation-delay: 300ms;
    }
    
    .shadow-3xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add meta viewport to prevent scaling on mobile
        const metaViewport = document.createElement('meta');
        metaViewport.name = 'viewport';
        metaViewport.content = 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no';
        document.head.appendChild(metaViewport);
        
        // Focus the desktop PIN input field if visible
        const pinInput = document.getElementById('desktop-pin');
        if (pinInput && window.innerWidth >= 768) {
            pinInput.focus();
            
            // Only allow numbers in the PIN input
            pinInput.addEventListener('keypress', function(e) {
                const charCode = (e.which) ? e.which : e.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wspbglobal/public_html/resources/views/user/pin.blade.php ENDPATH**/ ?>