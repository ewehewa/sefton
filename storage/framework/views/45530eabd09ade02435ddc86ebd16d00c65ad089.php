<!-- Preview Modal -->
<div 
    x-show="showPreview" 
    x-cloak 
    class="fixed inset-0 z-50 overflow-y-auto"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div 
            class="fixed inset-0 transition-opacity bg-gray-900/75 backdrop-blur-sm" 
            aria-hidden="true"
            @click="showPreview = false"
        ></div>
        
        <!-- Modal panel -->
        <div 
            class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 dark:border-gray-700/50 sm:align-middle sm:max-w-lg"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
            <!-- Modal header -->
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200 dark:border-gray-600">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                        <i class="fas fa-file-check text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Confirm Transfer</h3>
                </div>
                <button 
                    type="button" 
                    class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 focus:outline-none transition-colors"
                    @click="showPreview = false"
                >
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>
            
            <!-- Modal content -->
            <div class="space-y-6">
                <!-- Transfer summary -->
                <div class="bg-gradient-to-br from-gray-50/80 to-white/80 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-2xl p-6 border border-gray-200/50 dark:border-gray-600/50">
                    <div class="flex items-center space-x-3 mb-4 pb-3 border-b border-gray-200 dark:border-gray-600">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                            <i class="fas fa-receipt text-white text-sm"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Transfer Summary</h4>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Transfer Amount</span>
                            <template x-if="balanceType === 'fiat'">
                                <span class="font-bold text-gray-900 dark:text-white text-lg"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount).toFixed(2)"></span></span>
                            </template>
                            <template x-if="balanceType === 'btc'">
                                <span class="font-bold text-gray-900 dark:text-white text-lg"><span x-text="parseFloat(amount).toFixed(8)"></span> BTC</span>
                            </template>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Recipient</span>
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="accountname"></span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Account Number</span>
                            <span class="font-semibold text-gray-900 dark:text-white font-mono" x-text="accountnumber"></span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Bank</span>
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="bankname"></span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Account Type</span>
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="Accounttype"></span>
                        </div>
                        
                        <div class="flex justify-between items-center" x-show="Description && Description.trim() !== ''">
                            <span class="text-gray-600 dark:text-gray-400 font-medium">Description</span>
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="Description"></span>
                        </div>
                        
                        <div class="border-t border-gray-200 dark:border-gray-600 pt-4 mt-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900 dark:text-white font-bold text-lg">Total Amount</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-bold text-2xl text-primary-600 dark:text-primary-400"><?php echo e(Auth::user()->s_curr); ?><span x-text="parseFloat(amount).toFixed(2)"></span></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-bold text-2xl text-primary-600 dark:text-primary-400"><span x-text="parseFloat(amount).toFixed(8)"></span> BTC</span>
                                </template>
                            </div>
                            
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600 dark:text-gray-400 font-medium">Remaining Balance</span>
                                <template x-if="balanceType === 'fiat'">
                                    <span class="font-semibold text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><span x-text="(<?php echo e(Auth::user()->account_bal); ?> - parseFloat(amount)).toFixed(2)"></span></span>
                                </template>
                                <template x-if="balanceType === 'btc'">
                                    <span class="font-semibold text-gray-900 dark:text-white"><span x-text="(<?php echo e(Auth::user()->btc_balance ?? 0); ?> - parseFloat(amount)).toFixed(8)"></span> BTC</span>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Security notice -->
                <div class="flex items-start p-4 bg-amber-50/80 dark:bg-amber-900/20 border-l-4 border-amber-400 dark:border-amber-500 rounded-r-xl backdrop-blur-sm">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-lg bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-amber-600 dark:text-amber-400"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <h5 class="font-semibold text-amber-800 dark:text-amber-200 mb-1">Important Notice</h5>
                        <p class="text-amber-700 dark:text-amber-300 text-sm">
                            Please verify all transfer details carefully before proceeding. Once confirmed, transfers cannot be reversed.
                        </p>
                    </div>
                </div>
                
                <!-- Action buttons -->
                <div class="flex flex-col-reverse sm:flex-row sm:space-x-4">
                    <button 
                        type="button" 
                        class="w-full mt-3 sm:mt-0 inline-flex justify-center items-center px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-base font-semibold text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-gray-700/70 backdrop-blur-sm hover:bg-gray-50 dark:hover:bg-gray-600/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200"
                        @click="showPreview = false"
                    >
                        <i class="fas fa-times mr-2 text-gray-400 dark:text-gray-500"></i>
                        Cancel
                    </button>
                    
                    <form action="<?php echo e(route('localtransfer')); ?>" method="POST" class="w-full" id="confirmTransferForm">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="amount" :value="amount">
                        <input type="hidden" name="accountname" :value="accountname">
                        <input type="hidden" name="accountnumber" :value="accountnumber">
                        <input type="hidden" name="bankname" :value="bankname">
                        <input type="hidden" name="Accounttype" :value="Accounttype">
                        <input type="hidden" name="Description" :value="Description">
                        <input type="hidden" name="pin" :value="pin">
                        <input type="hidden" name="balance_type" :value="balanceType">
                        
                        <button 
                            type="button" 
                            id="confirmTransferBtn"
                            class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent rounded-xl shadow-lg text-base font-semibold text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]"
                        >
                            <i class="fas fa-check-circle mr-2"></i>
                            Confirm Transfer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Processing Modal (Hidden by default) -->
<div id="processingModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900/75 backdrop-blur-sm"></div>
        
        <!-- Modal panel -->
        <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 dark:border-gray-700/50 sm:align-middle sm:max-w-lg">
            <!-- Processing animation and content -->
            <div class="text-center py-6">
                <!-- Animated bank card with pulse effect -->
                <div class="relative mx-auto w-64 h-40 mb-8 perspective-500">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500 to-primary-700 rounded-xl shadow-lg transform rotate-y-10 rotate-x-5 animate-card-float">
                        <!-- Card chip -->
                        <div class="absolute top-6 left-6 w-10 h-8 bg-yellow-300 bg-opacity-80 rounded-md grid grid-cols-3 grid-rows-3 gap-px p-1">
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                            <div class="bg-yellow-600 rounded-sm"></div>
                        </div>
                        
                        <!-- Animated pulse circles -->
                        <div class="absolute bottom-6 right-8 w-8 h-8 rounded-full bg-blue-400 bg-opacity-70 flex items-center justify-center">
                            <div class="absolute w-full h-full rounded-full bg-blue-400 animate-ping opacity-75"></div>
                            <div class="absolute w-8 h-8 rounded-full border-2 border-white border-opacity-50"></div>
                            <div class="absolute w-6 h-6 rounded-full border-2 border-white border-opacity-50"></div>
                        </div>
                        
                        <!-- Card number dots -->
                        <div class="absolute bottom-14 left-6 right-6 flex justify-between">
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                            <div class="w-10 h-2 bg-white bg-opacity-50 rounded-full"></div>
                        </div>
                        
                        <!-- Card holder info -->
                        <div class="absolute bottom-6 left-6 text-white text-opacity-80 text-xs font-medium tracking-wider">
                            <span id="cardHolderName"></span>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2" id="processingMessage">Initiating transfer...</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Please do not close this window</p>
                
                <!-- Progress bar with percentage -->
                <div class="mb-6">
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div id="progressBar" class="bg-gradient-to-r from-primary-500 to-primary-600 h-3 rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
                    </div>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 mt-2"><span id="progressPercentage">0</span>% Complete</p>
                </div>
                
                <!-- Transaction details -->
                <div class="bg-gray-50/80 dark:bg-gray-700/50 backdrop-blur-sm rounded-xl p-4 text-left border border-gray-200/50 dark:border-gray-600/50 mb-4">
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Amount</p>
                            <p class="font-medium text-gray-900 dark:text-white"><?php echo e(Auth::user()->s_curr); ?><span id="modalAmount"></span></p>
                        </div>
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">To</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalRecipient"></p>
                        </div>
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Bank</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalBank"></p>
                        </div>
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Account</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalAccount"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Security message -->
                <div class="flex items-center justify-center text-sm text-gray-500 dark:text-gray-400">
                    <i class="fas fa-shield-alt mr-2 text-primary-500 dark:text-primary-400"></i>
                    <span>Secured by bank-level encryption</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Account Status Modal (Hidden by default) -->
<div id="accountStatusModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900/75 backdrop-blur-sm"></div>
        
        <!-- Modal panel -->
        <div class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 dark:border-gray-700/50 sm:align-middle sm:max-w-lg">
            <div class="text-center py-6">
                <div class="mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-amber-100 dark:bg-amber-900/50">
                    <i class="fas fa-exclamation-circle text-2xl text-amber-600 dark:text-amber-400"></i>
                </div>
                
                <h3 id="accountStatusTitle" class="text-xl font-bold text-gray-900 dark:text-white mb-2">Account Status</h3>
                <p id="accountStatusMessage" class="text-gray-500 dark:text-gray-400 mb-6">Your account status requires attention.</p>
                
                <div class="mt-6">
                    <button type="button" onclick="window.location.href='<?php echo e(route('dashboard')); ?>'" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl shadow-lg text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                        <i class="fas fa-home mr-2"></i>
                        Return to Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
    
    .perspective-500 {
        perspective: 500px;
    }
    
    .rotate-y-10 {
        transform: rotateY(10deg);
    }
    
    .rotate-x-5 {
        transform: rotateX(5deg);
    }
    
    @keyframes  card-float {
        0%, 100% { transform: translateY(0) rotateY(10deg) rotateX(5deg); }
        50% { transform: translateY(-10px) rotateY(15deg) rotateX(5deg); }
    }
    
    .animate-card-float {
        animation: card-float 3s ease-in-out infinite;
    }
</style>

<script>
    // Function to show account status modal
    function showAccountStatusModal(status, message) {
        // Get modal element
        const statusModal = document.getElementById('accountStatusModal');
        
        // Set modal content based on status
        const iconContainer = statusModal.querySelector('.rounded-2xl, .rounded-full');
        const icon = statusModal.querySelector('.fas');
        if (status === 'on-hold') {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-amber-100';
            icon.className = 'fas fa-exclamation-circle text-2xl text-amber-600 dark:text-amber-400';
            statusModal.querySelector('#accountStatusTitle').textContent = 'Account On Hold';
        } else {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-red-100';
            icon.className = 'fas fa-ban text-2xl text-red-600 dark:text-red-400';
            statusModal.querySelector('#accountStatusTitle').textContent = 'Account Suspended';
        }
        statusModal.querySelector('#accountStatusMessage').textContent = message;
        statusModal.classList.remove('hidden');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        
        // Get DOM elements
        const confirmBtn = document.getElementById('confirmTransferBtn');
        const processingModal = document.getElementById('processingModal');
        const progressBar = document.getElementById('progressBar');
        const processingMessage = document.getElementById('processingMessage');
        
        // Processing messages for different stages
        const processingMessages = [
            'Initiating transfer...',
            'Verifying account details...',
            'Processing transaction...',
            'Confirming with bank...',
            'Finalizing transfer...'
        ];
        
        // Add click event listener to confirm button
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get form data for display in modal
                const amountInput = document.querySelector('[name="amount"]');
                const accountnameInput = document.querySelector('[name="accountname"]');
                const accountnumberInput = document.querySelector('[name="accountnumber"]');
                const banknameInput = document.querySelector('[name="bankname"]');
                
                // Update modal with form data
                document.getElementById('modalAmount').textContent = parseFloat(amountInput.value).toFixed(2);
                document.getElementById('modalRecipient').textContent = accountnameInput.value;
                document.getElementById('modalBank').textContent = banknameInput.value;
                document.getElementById('modalAccount').textContent = accountnumberInput.value;
                document.getElementById('cardHolderName').textContent = accountnameInput.value.substring(0, 20);
                
                // Show processing modal
                processingModal.classList.remove('hidden');
                
                // Reset progress
                let progress = 0;
                let currentStage = 0;
                progressBar.style.width = '0%';
                processingMessage.textContent = processingMessages[0];
                
                // Simulate processing with progress updates
                const totalDuration = 5000; // 5 seconds minimum
                const interval = 50; // Update every 50ms for smooth animation
                const steps = totalDuration / interval;
                const progressIncrement = 100 / steps;
                
                const progressInterval = setInterval(function() {
                    progress += progressIncrement;
                    progressBar.style.width = progress + '%';
                    document.getElementById('progressPercentage').textContent = Math.min(Math.round(progress), 100);
                    
                    // Update message at certain progress points
                    if (progress >= 20 && currentStage < 1) {
                        currentStage = 1;
                        processingMessage.textContent = processingMessages[1];
                    } else if (progress >= 40 && currentStage < 2) {
                        currentStage = 2;
                        processingMessage.textContent = processingMessages[2];
                    } else if (progress >= 60 && currentStage < 3) {
                        currentStage = 3;
                        processingMessage.textContent = processingMessages[3];
                    } else if (progress >= 80 && currentStage < 4) {
                        currentStage = 4;
                        processingMessage.textContent = processingMessages[4];
                    }
                    
                    // When progress is complete
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                        
                        // Check account status before submitting the form
                        fetch('<?php echo e(route("check.account.status")); ?>', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ check_status: true }),
                            credentials: 'same-origin'
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'on-hold' || data.status === 'suspended') {
                                // Hide processing modal
                                processingModal.classList.add('hidden');
                                
                                // Show account status modal
                                showAccountStatusModal(data.status, data.message);
                            } else {
                                // Account is active, proceed with form submission
                                setTimeout(function() {
                                    // Ensure form is submitted as POST
                                    const form = document.getElementById('confirmTransferForm');
                                    form.method = 'post';
                                    form.submit();
                                }, 200);
                            }
                        })
                        .catch(error => {
                            console.error('Error checking account status:', error);
                            // Proceed with form submission anyway if there's an error checking status
                            setTimeout(function() {
                                const form = document.getElementById('confirmTransferForm');
                                form.method = 'post';
                                form.submit();
                            }, 200);
                        });
                    }
                }, interval);
            });
        }
    });
</script>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/local_transfer/modals_and_scripts.blade.php ENDPATH**/ ?>