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
                Recent
            </h6>
            <div class="element-box">
                <h5 class="form-header">
                    Recent Transactions
                </h5>
                <div class="form-desc">
                    My  transactions
                </div>
                <div class="table-responsive">
                    <table  style="width: 100%;" class="table table-striped table-hover table-lightfont">
                        <thead>
                        <tr>
                            <th>Reference ID</th>
                            <th>Beneficiary</th>
                            <th>Amount</th>
                            <th>Scope</th>
                            <th>Date</th>
                            <th>Decription</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Reference ID</th>
                            <th>Beneficiary</th>
                            <th>Amount</th>
                            <th>Scope</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                        <tbody>
                                                                                                                                                    
                                                          
     <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>										  <tr>
            <td>
                <?php echo e($withdrawal->txn_id); ?>

            </td>
            <td><?php echo e($withdrawal->accountname); ?></td>
            <td class="bolder nowrap"> <span class="text-danger"><?php echo e($settings->currency); ?><?php echo e($withdrawal->amount); ?> <i class="os-icon os-icon-arrow-down"></i></span>  </td>
            <td><?php echo e($withdrawal->payment_mode); ?></td>
             
            <td class="text"><?php echo e(\Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString()); ?></td>
            <td><?php echo e($withdrawal->Description); ?></td>
            <?php if($withdrawal->status!='Pending'): ?>
            <td class='badge badge-success'><?php echo e($withdrawal->status); ?></td>
        <?php else: ?>
        <td class='badge badge-warning'><?php echo e($withdrawal->status); ?></td>
        <?php endif; ?>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>									  <tr>
            <td>
                27442183**
            </td>
            <td>Deposit</td>
            <td class="bolder nowrap"> <span class="text-success badge badge-warning"><?php echo e($settings->currency); ?><?php echo e($deposit->amount); ?> <i class="os-icon os-icon-arrow-down"></i></span>  </td>
            <td><?php echo e($deposit->payment_mode); ?> Deposit</td>
             
            <td class="text"><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?></td>
            <td><?php echo e($deposit->payment_mode); ?> Fund Deposit</td>
            <?php if($deposit->status=='pending'): ?>
            <td class='badge badge-warning'><?php echo e($deposit->status); ?></td>
        <?php else: ?>
        <td class='badge badge-success'><?php echo e($deposit->status); ?></td>
        <?php endif; ?>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 
              
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

<?php echo $__env->make('layouts.dash1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bank\resources\views/user/transactions.blade.php ENDPATH**/ ?>