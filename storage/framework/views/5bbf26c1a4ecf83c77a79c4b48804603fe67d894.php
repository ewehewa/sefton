 <div class="col-lg-12">
             <?php if(Auth::user()->action =='Yes'): ?>
            <div class="alert alert-warning ">
                
                <i class="fa fa-info-circle"></i> YOU ARE REQUIRED TO MAKE AN ACCOUNT UPGRADE OF ( <?php echo e($settings->currency); ?><?php echo e(Auth::user()->amount); ?>) IMMEDIATELY!!!
            </div>
            <?php endif; ?>
        </div><?php /**PATH /home/remedyfinance/public_html/demo3.remedyfinance.online/resources/views/components/pay-alert.blade.php ENDPATH**/ ?>