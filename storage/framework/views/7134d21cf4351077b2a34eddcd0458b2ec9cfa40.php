

<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page title --> 
    <div class="content-w">
        
        <div><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
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
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Loan
                </h6>
                <div class="element-box">
                
            <h5 class="form-header">
                        Loan Request
                    </h5>
                    <div class="table-responsive">
                        <table  style="width: 100%;" class="table table-striped table-hover table-lightfont">
                            <thead>
                            <tr>
                                <th>Amount</th>
                              
                                <th>Purpose</th>
        
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Credit Facility</th>
                                <th>Date Applied</th>
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                           
                                                                    <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
                              <tr>
<td><?php echo e($settings->currency); ?><?php echo e($loan->amount); ?></td>
<td><?php echo e($loan->purpose); ?></td>
<td><?php echo e($loan->duration); ?></td>

<?php if($loan->active =='Pending'): ?>
<td class='badge badge-warning'><?php echo e($loan->active); ?></td>
<?php else: ?>
<td class='badge badge-success'><?php echo e($loan->active); ?></td>
<?php endif; ?>
<td><?php echo e($loan->facility); ?></td>
<td class=''><?php echo e(\Carbon\Carbon::parse($loan->created_at)->toDayDateTimeString()); ?></td>
                             </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                 
                            
                            <tbody>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div>
  <div class="display-type"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dash2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bank\resources\views/user/loans.blade.php ENDPATH**/ ?>