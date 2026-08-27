<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.trading-payment', [])->html();
} elseif ($_instance->childHasBeenRendered('klVXvdB')) {
    $componentId = $_instance->getRenderedChildComponentId('klVXvdB');
    $componentTag = $_instance->getRenderedChildComponentTagName('klVXvdB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('klVXvdB');
} else {
    $response = \Livewire\Livewire::mount('admin.trading-payment', []);
    $html = $response->html();
    $_instance->logRenderedChild('klVXvdB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedyfinance/public_html/account/resources/views/admin/subscription/payment.blade.php ENDPATH**/ ?>