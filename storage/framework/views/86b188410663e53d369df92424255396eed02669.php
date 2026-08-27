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
    <div class="main-panel ">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2">
                    <h1 class="title1 ">View My Task</h1> <br> <br>
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
                <div class="row mb-5">
                    <div class="col-lg-12 card p-4  shadow">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th>Task Title</th>
                                        <th>Assigned To</th>
                                        <th>Note</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($task->title); ?></td>
                                            <td><?php echo e($task->tuser->firstName); ?> <?php echo e($task->tuser->lastName); ?></td>
                                            <td><?php echo e($task->note); ?></td>
                                            <td><?php echo e($task->start_date); ?></td>
                                            <td><?php echo e($task->end_date); ?></td>
                                            <td>
                                                <?php if($task->status == 'Pending'): ?>
                                                    <span class="badge badge-danger"><?php echo e($task->status); ?></span>
                                                <?php else: ?>
                                                    <span class=" badge badge-success"><?php echo e($task->status); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($task->created_at->toDayDateTimeString()); ?></td>
                                            <td>
                                                <?php if($task->status == 'Pending'): ?>
                                                    <a href="<?php echo e(url('admin/dashboard/markdone')); ?>/<?php echo e($task->id); ?>"
                                                        class="btn btn-primary btn-sm m-1">Mark as Done</a>
                                                <?php else: ?>
                                                    <a class="btn btn-success btn-sm m-1">No Action Needed</a>
                                                <?php endif; ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedyfinance/public_html/resources/views/admin/vtask.blade.php ENDPATH**/ ?>