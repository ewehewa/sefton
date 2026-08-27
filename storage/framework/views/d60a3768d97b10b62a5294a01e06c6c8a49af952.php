

    
    <?php echo $__env->make('partials._bank_account_modal', ['settings' => $settings, 'user' => Auth::user()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._send_money_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._receive_btc_modal', ['btc_address' => Auth::user()->btc_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
</div>
</div>





<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/section3.blade.php ENDPATH**/ ?>