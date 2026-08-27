
<div class="lg:hidden mb-2">
    <?php echo $__env->make('partials._mobile_header', [
        'title' => 'Local Transfer',
        'showBackButton' => true,
        'backUrl' => route('dashboard'),
        'showNotifications' => true,
        'showDarkMode' => true,
        'financeUser' => $financeUser
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<div class="hidden lg:block mb-4">
    <div class="flex items-center space-x-3 mb-2">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
            <i class="fas fa-paper-plane text-white text-lg"></i>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Local Transfer</h1>
    </div>
    <p class="text-gray-600 dark:text-gray-400 ml-13">Send money to any local bank account securely and instantly</p>
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/local_transfer/header.blade.php ENDPATH**/ ?>