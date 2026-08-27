

<?php $__env->startSection('title', 'User Login'); ?>

<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <section style="height: 100vh;" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <a href="/"><img src="<?php echo e(asset('storage/app/public/photos/'.$settings->logo)); ?>" alt="" class="mb-3 img-fluid auth__logo"></a>
                    
                    <?php if(Session::has('success')): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> <?php echo e(Session::get('success')); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
                    <div class=" shadow card bg-black border login-page roundedd border-1 ">
                        <div class="card-body">
                            <h6 class='text-center text-white'>Please confirm you are not a Robot by verifying the auto-generated code below, this will enable you have access to Register. </h6>
                            <form method="POST" action="<?php echo e(route('codeverify')); ?>"  class="mt-4 login-form">
                                 <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            
                                            <div class="position-relative">
                                                
                                                <input type="text" class=" form-control text-center text-white" name ="email" value="<?php echo e($captcha); ?>" style="background-color:#05803a !important" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label style="color:#fff !important">Enter code<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="number" class="pl-5 form-control" name="code" id="password" placeholder="Enter Code" tabindex="1"
                                     autofocus required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad " style="background-color:#05803a !important" type="submit">Verify Code</button>
                                    </div>
                                    <!--end col-->

                                    
                                    <!--end col-->
                                    
                                    
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
       
    </section>
    <!--end section-->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fxproglobaltradi/public_html/resources/views/home/verify.blade.php ENDPATH**/ ?>