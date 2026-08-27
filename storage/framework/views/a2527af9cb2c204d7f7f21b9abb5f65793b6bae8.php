
<?php echo $__env->renderWhen(true, 'partials._dashboard_account_stats', [
    'limit' => $limit, 
    'pending_deposits' => $pending_deposits, 
    'pending_withdrawals' => $pending_withdrawals, 
    'total_volume' => $total_volume, 
    'currency_symbol' => $currency_symbol
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/dashboard/account-stats.blade.php ENDPATH**/ ?>