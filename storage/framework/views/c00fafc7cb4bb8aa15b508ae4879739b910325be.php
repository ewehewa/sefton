<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.trading-payment', [])->html();
} elseif ($_instance->childHasBeenRendered('P7n3IO8')) {
    $componentId = $_instance->getRenderedChildComponentId('P7n3IO8');
    $componentTag = $_instance->getRenderedChildComponentTagName('P7n3IO8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('P7n3IO8');
} else {
    $response = \Livewire\Livewire::mount('admin.trading-payment', []);
    $html = $response->html();
    $_instance->logRenderedChild('P7n3IO8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/admin/subscription/payment.blade.php ENDPATH**/ ?>