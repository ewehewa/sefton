<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.system-courses', [])->html();
} elseif ($_instance->childHasBeenRendered('RWS0lh1')) {
    $componentId = $_instance->getRenderedChildComponentId('RWS0lh1');
    $componentTag = $_instance->getRenderedChildComponentTagName('RWS0lh1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RWS0lh1');
} else {
    $response = \Livewire\Livewire::mount('user.system-courses', []);
    $html = $response->html();
    $_instance->logRenderedChild('RWS0lh1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/user/membership/courses.blade.php ENDPATH**/ ?>