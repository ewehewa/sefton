<!-- Processing Modal (Hidden by default) -->
<div id="processingModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900/75 dark:bg-gray-900/75 backdrop-blur-sm"></div>
        
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
                            <p class="text-gray-500 dark:text-gray-400">Method</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalMethod"></p>
                        </div>
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Recipient</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalRecipient"></p>
                        </div>
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Country</p>
                            <p class="font-medium text-gray-900 dark:text-white" id="modalCountry"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Security message -->
                <div class="flex items-center justify-center text-sm text-gray-500 dark:text-gray-400">
                    <i class="fa-solid fa-shield-halved h-4 w-4 mr-2 text-primary-500 dark:text-primary-400"></i>
                    <span>Secured by bank-level encryption</span>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/processing_modal.blade.php ENDPATH**/ ?>