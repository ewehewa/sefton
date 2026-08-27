<!-- Card Header with Method Icon -->
<div class="relative bg-gradient-to-r from-primary-600 to-primary-700 dark:from-primary-500 dark:to-primary-600 p-6">
    <!-- Back Button -->
    <button 
        @click="withdrawMethod = ''" 
        class="absolute top-4 left-4 bg-white/20 dark:bg-white/10 rounded-full p-2 text-white hover:bg-white/30 dark:hover:bg-white/20 transition-colors"
    >
        <i class="fa-solid fa-arrow-left text-sm"></i>
    </button>
    
    <div class="flex flex-col items-center">
        <div class="bg-white/20 dark:bg-white/10 backdrop-blur-sm p-3 rounded-2xl mb-3">
            <template x-if="withdrawMethod === 'Wire Transfer'">
                <i class="fa-solid fa-building-columns text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Cryptocurrency'">
                <i class="fa-brands fa-bitcoin text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'PayPal'">
                <i class="fa-brands fa-paypal text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Wise Transfer'">
                <i class="fa-solid fa-money-bill-transfer text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Skrill'">
                <i class="fa-solid fa-wallet text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Venmo'">
                <i class="fa-solid fa-mobile-screen text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Zelle'">
                <i class="fa-solid fa-bolt text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Cash App'">
                <i class="fa-solid fa-dollar-sign text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Revolut'">
                <i class="fa-solid fa-credit-card text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'Alipay'">
                <i class="fa-solid fa-mobile-screen-button text-white text-2xl"></i>
            </template>
            <template x-if="withdrawMethod === 'WeChat Pay'">
                <i class="fa-brands fa-weixin text-white text-2xl"></i>
            </template>
        </div>
        
        <h2 class="text-2xl font-bold text-white mb-1" x-text="formTitle"></h2>
        <p class="text-white/90 text-sm text-center" x-text="formDescription" x-show="formDescription"></p>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/form_header.blade.php ENDPATH**/ ?>