<!-- WECHAT PAY FIELDS -->
<div x-show="withdrawMethod === 'WeChat Pay'" x-transition class="space-y-4 mt-4">
    <div>
        <label for="wechatId" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">WeChat ID</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-id-card text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="wechatId" 
                id="wechatId" 
                x-model="wechatId"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your WeChat ID"
                x-bind:required="withdrawMethod === 'WeChat Pay'"
            />
        </div>
    </div>
    
    <div>
        <label for="wechatName" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fa-solid fa-user text-gray-400 text-sm"></i>
            </div>
            <input 
                type="text" 
                name="wechatName" 
                id="wechatName" 
                x-model="wechatName"
                class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all text-sm"
                placeholder="Enter your full name"
                x-bind:required="withdrawMethod === 'WeChat Pay'"
            />
        </div>
    </div>
</div> <?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/international/wechat_pay.blade.php ENDPATH**/ ?>