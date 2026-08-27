<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
} else {
    $text = 'light';
}
?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 d-inline">Transaction History</h1>
                    <div class="d-inline">
                        <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('transaction.form')); ?>">
                                <i class="fa fa-plus"></i> Generate New Transaction
                            </a>
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
                <div class="mb-5 row">
                    <div class="col card p-3 shadow ">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <span style="margin:3px;">
                                <table id="TransactionTable" class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Transaction ID</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($transaction->id); ?></td>
                                                <td><?php echo e($transaction->txn_id); ?></td>
                                                <td><?php echo e($transaction->duser->name ?? 'N/A'); ?></td>
                                                <td><?php echo e($transaction->duser->s_curr); ?><?php echo e(number_format($transaction->amount)); ?></td>
                                                <td>
                                                    <?php if($transaction->type == 'Credit'): ?>
                                                        <span class="badge badge-success">Credit</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Debit</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($transaction->payment_mode); ?></td>
                                                <td>
                                                    <?php if($transaction->status == 'Processed'): ?>
                                                        <span class="badge badge-success"><?php echo e($transaction->status); ?></span>
                                                    <?php elseif($transaction->status == 'On-hold'): ?>
                                                        <span class="badge badge-warning"><?php echo e($transaction->status); ?></span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger"><?php echo e($transaction->status); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e(\Carbon\Carbon::parse($transaction->created_at)->toDayDateTimeString()); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('processwithdraw', $transaction->id)); ?>" class="btn btn-sm btn-info">
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#TransactionTable').DataTable({
                order: [[7, 'desc']], // Sort by date column (index 7) in descending order
                responsive: true,
                language: {
                    searchPlaceholder: "Search transaction...",
                    search: "",
                },
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/transaction-history/view.blade.php ENDPATH**/ ?>