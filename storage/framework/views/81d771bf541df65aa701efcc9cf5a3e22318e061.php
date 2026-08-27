<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('dash2/css/style.css')); ?>" id="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div class="mb-3 col-md-6 mb-md-0">
                <h5 class="mb-0 text-white h3 font-weight-400">Get started with your investment.</h5>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.investment-plan', [])->html();
} elseif ($_instance->childHasBeenRendered('BhXB3Yg')) {
    $componentId = $_instance->getRenderedChildComponentId('BhXB3Yg');
    $componentTag = $_instance->getRenderedChildComponentTagName('BhXB3Yg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BhXB3Yg');
} else {
    $response = \Livewire\Livewire::mount('user.investment-plan', []);
    $html = $response->html();
    $_instance->logRenderedChild('BhXB3Yg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedyfinance/public_html/account/resources/views/user/mplans.blade.php ENDPATH**/ ?>