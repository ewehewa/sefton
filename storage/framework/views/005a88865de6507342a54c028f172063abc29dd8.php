<!-- Mobile Header -->
<div class="lg:hidden mb-2">
    <?php echo $__env->make('partials._mobile_header', [
        'title' => 'International Transfer',
        'showBackButton' => true,
        'backUrl' => route('dashboard'),
        'showNotifications' => true,
        'showDarkMode' => true,
        'financeUser' => Auth::user()
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!-- Desktop Header -->
<div class="hidden lg:block mb-4">
    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-2xl shadow-lg dark:shadow-gray-900/50 border border-white/20 dark:border-gray-700/50 p-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-primary-500 to-primary-600 rounded-2xl flex items-center justify-center">
                    <i class="fa-solid fa-globe text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">International Transfer</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Send money worldwide with multiple payment methods</p>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/headers.blade.php ENDPATH**/ ?>