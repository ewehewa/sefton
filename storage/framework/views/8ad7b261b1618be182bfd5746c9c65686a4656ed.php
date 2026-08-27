<?php $__env->startSection('title', 'Reset your password'); ?>



<?php $__env->startSection('content'); ?>
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                  
                      <!--begin::Main-->
                      <div class="d-flex flex-column flex-root">
                        <!--begin::Authentication - Sign-in -->
                        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                
                          <div class="d-flex flex-column flex-lg-row-fluid py-10">
                      <div class="d-flex flex-center flex-column flex-column-fluid">
                       
                        <div class="w-lg-600px w-100 w-100 p-10 p-lg-15 mx-auto">
                          <?php if(Session::has('message')): ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <?php echo e(Session::get('message')); ?>

                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                         
                          <?php endif; ?>
                    
                          <?php if(session('status')): ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <?php echo e(session('status')); ?>

                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <?php endif; ?>   
                       
                          <div >
                        
                    
                    
                        <div class="card-body">
                            <h4 class="text-center card-title">Create new password</h4>
                            <form method="POST" action="<?php echo e(route('password.update')); ?>"  class="mt-4 login-form">
                                 <?php echo csrf_field(); ?>
                                 <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
                                <div class="row">
                                    <div class="fv-row mb-6">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control form-control-lg form-control-solid" name ="email" value="<?php echo e($email or old('email')); ?>"  id="email" placeholder="name@example.com" required>
                                            </div>
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block text-danger">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                     <div class="fv-row mb-6">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control form-control-lg form-control-solid" name="password" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                            
                                            <?php if($errors->has('password')): ?>
                                            <span class="help-block text-danger">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="fv-row mb-6">
                                        <div class="form-group">
                                            <label>Password Confirmation<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                            
                                            <?php if($errors->has('password_confirmation')): ?>
                                            <span class="help-block text-danger">
                                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2" type="submit">Reset Password</button>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  <?php echo e(date('Y')); ?> &nbsp; <?php echo e($settings->site_name); ?> &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.guest2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215313542/domains/remedycodes.site/public_html/resources/views/auth/reset-password.blade.php ENDPATH**/ ?>