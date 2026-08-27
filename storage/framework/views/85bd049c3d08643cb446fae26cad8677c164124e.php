    <!--Delete master account Modal -->
    <div class="modal fade" id="copytrade<?php echo e($item['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Start Copy Trade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('cptrade')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="subscriberid" value="<?php echo e($item['id']); ?>">
                        <label for="">Select Master account to copy from.</label>
                        <select name="master" class="form-control mt-2 mb-4" required>
                            <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>">
                                    <?php echo e($item['account_name']); ?>/<?php echo e($item['login']); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button class="btn btn-sm btn-primary m-1">
                            Start Copy Trade
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/admin/subscription/subscriber/copytrade.blade.php ENDPATH**/ ?>