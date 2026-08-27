
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
        const statusColor = status === 'on-hold' ? 'amber' : 'red';
        const statusIcon = status === 'on-hold' ? 'fa-triangle-exclamation' : 'fa-shield-xmark';
        const statusTitle = status === 'on-hold' ? 'Account On Hold' : 'Account Suspended';
        
        // Update icon container color
        const iconContainer = statusModal.querySelector('.rounded-2xl');
        if (status === 'on-hold') {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-amber-100 dark:bg-amber-900/50';
        } else {
            iconContainer.className = 'mx-auto w-16 h-16 mb-6 flex items-center justify-center rounded-2xl bg-red-100 dark:bg-red-900/50';
        }
        
        // Update icon
        const icon = statusModal.querySelector('i');
        icon.className = `fa-solid ${statusIcon} text-2xl ${status === 'on-hold' ? 'text-amber-600 dark:text-amber-400' : 'text-red-600 dark:text-red-400'}`;
        
        // Update text content
        statusModal.querySelector('#accountStatusTitle').textContent = statusTitle;
        statusModal.querySelector('#accountStatusMessage').textContent = message;
        
        // Show modal
        statusModal.classList.remove('hidden');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        // Processing modal functionality
        window.showProcessingModal = showProcessingModalFunction = function() {
            const processingModal = document.getElementById('processingModal');
            const progressBar = document.getElementById('progressBar');
            const processingMessage = document.getElementById('processingMessage');
            const form = document.getElementById('internationalTransferForm');
            
            // Get form data for display in modal
            const amountInput = document.querySelector('[name="amount"]');
            const methodElement = document.querySelector('[x-model="withdrawMethod"]') || { value: document.querySelector('[x-text="withdrawMethod"]')?.textContent || 'International Transfer' };
            const recipientInput = document.querySelector('[name="accountName"]') || document.querySelector('[name="paypalEmail"]') || document.querySelector('[name="walletAddress"]');
            const countryInput = document.querySelector('[name="country"]');
            
            // Update modal with form data
            document.getElementById('modalAmount').textContent = parseFloat(amountInput?.value || 0).toFixed(2);
            document.getElementById('modalMethod').textContent = methodElement.value || 'International Transfer';
            document.getElementById('modalRecipient').textContent = recipientInput?.value || 'Recipient';
            document.getElementById('modalCountry').textContent = countryInput?.value || '';
            document.getElementById('cardHolderName').textContent = recipientInput?.value?.substring(0, 20) || 'Recipient';
            
            // Processing messages for different stages
            const processingMessages = [
                'Initiating transfer...',
                'Verifying account details...',
                'Processing transaction...',
                'Confirming with bank...',
                'Finalizing transfer...'
            ];
            
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
                                form.method = 'post';
                                form.submit();
                            }, 200);
                        }
                    })
                    .catch(error => {
                        console.error('Error checking account status:', error);
                        // Proceed with form submission anyway if there's an error checking status
                        setTimeout(function() {
                            form.method = 'post';
                            form.submit();
                        }, 200);
                    });
                }
            }, interval);
        };
    });
    
    // Script to auto-select cryptocurrency when directed from dashboard
    document.addEventListener('DOMContentLoaded', function() {
        // Check if cryptocurrency was pre-selected via URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const method = urlParams.get('method');
        
        if (method === 'cryptocurrency') {
            // Scroll to the form section after Alpine.js has initialized
            setTimeout(function() {
                const formSection = document.querySelector('.max-w-4xl.mx-auto');
                if (formSection) {
                    window.scrollTo({
                        top: formSection.offsetTop - 50,
                        behavior: 'smooth'
                    });
                }
            }, 500);
        }
    });
</script> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/styles_and_scripts.blade.php ENDPATH**/ ?>