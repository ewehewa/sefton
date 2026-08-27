
    <?php if(Session::has('success')): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-group alert-success bg-success alert-icon alert-dismissible fade show" role="alert">
                
                <div class="alert-content">
                    <?php echo e(Session::get('success')); ?>

                </div>
               
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php /**PATH /home/hebkghti/public_html/ciitesonline.com/resources/views/components/success-alert.blade.php ENDPATH**/ ?>