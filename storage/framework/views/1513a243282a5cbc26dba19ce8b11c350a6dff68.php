<div>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="title1 ">Fund your wallet</h1>
                        </div>
                        <div>
                            <a href="<?php echo e(route('tsettings')); ?>" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-arrow-left"></i>
                                Back</a>
                        </div>
                    </div>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="mt-2 mb-5 row">
                    <div class="col-12">
                        <div class="card p-3">
                            <div class="row">
                                <?php if(!$toPay): ?>
                                    <div class="col-md-8 offset-md-2">
                                        <form wire:submit.prevent='setToPay'>
                                            <div class="form-group">
                                                <label for="">Enter Amount ($)</label>
                                                <input type="number" wire:model.defer='amount' class="form-control"
                                                    required>
                                            </div>
                                            <div class="my-2">
                                                <label for="" class="mb-2">Payment Method</label>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div style="cursor:pointer;"
                                                        class="p-3 m-2 bg-light rounded-lg text-center shadow align-items-center border border-primary">
                                                        <img src="<?php echo e(asset('dash/tether-usdt-logo.png')); ?>"
                                                            alt="" style="width: 25px;">
                                                        <h5>Tether(USDT)</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Continue to
                                                    Payment</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php endif; ?>
                                <?php if($toPay): ?>
                                    <div class="col-12 text-right">
                                        <button type="button" class="btn btn-sm btn-warning"
                                            wire:click='unSetToPay'>back</button>
                                    </div>
                                    <div class="col-md-8 offset-md-2 mt-3">
                                        <form action="" wire:submit.prevent='completePayment'>
                                            <div class="form-group p-2 bg-light">
                                                <p>
                                                    Please send $<?php echo e($amount); ?> of <?php echo e($method); ?> to the
                                                    wallet address below
                                                </p>
                                                <h2 class=" font-weight-bold"><?php echo e($walletAddress); ?></h2>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Complete Payment</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/remedyfinance/public_html/resources/views/livewire/admin/trading-payment.blade.php ENDPATH**/ ?>