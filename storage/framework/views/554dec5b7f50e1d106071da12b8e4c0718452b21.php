<?php $__env->startSection('title', 'Create an Account'); ?>

<?php $__env->startSection('content'); ?>
   
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--begin::Aside-->
      <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative d-none d-xl-block">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
          <!--begin::Header-->
          <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
            <!--begin::Logo-->
            <a href="/" class="py-9 pt-lg-20">
              <img alt="Logo" src="<?php echo e(asset('storage/app/public/' . $settings->logo)); ?>" style="height:auto; max-width:30%;"/>
            </a>
            <!--end::Logo-->
            <!--begin::Title-->
            <h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Swift Money Transfer</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <p class="fw-bold fs-2 text-white">Swift and Secure Money Transfer to any  bank account will become a breeze with <?php echo e($settings->site_name); ?>

            </p>
            <!--end::Description-->
          </div>
          <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-300px" style="background-image: url(https://nothingdevelopers.xyz/konan/public/dashboard/media/illustrations/sport.png)"></div>
          <!--end::Header-->
        </div>
        <!--end::Wrapper-->
      </div>
      <div class="d-flex flex-column flex-lg-row-fluid py-10">
  <div class="d-flex flex-center flex-column flex-column-fluid">
    <?php if(Session::has('status')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('status')); ?>

        <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

    <div class="w-lg-600px w-100 p-10 p-lg-15 mx-auto">
            <form class="form w-100" action="<?php echo e(route('register')); ?>" method="post" id="kt_sign_up_form" novalidate="novalidate">
              <?php echo csrf_field(); ?>
              <div class="text-center mb-10">
                <h1 class="text-dark mb-3">Create an Account</h1>
                <div class="text-gray-600 fw-bold fs-4">Already have an account?
                  <a href="<?php echo e(route('login')); ?>" class="link-primary fw-bolder">Sign in here</a>
                </div>
              </div>
              <div class="row fv-row mb-6">
                <div class="col-xl-6">
                  <label class="form-label fw-bolder text-dark fs-6">Legal First Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="name"
                  value="<?php echo e(old('name')); ?>"  autocomplete="off" value="" required placeholder="Full name" />
                        
                  <?php if($errors->has('name')): ?>
                  <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
              <?php endif; ?>   
                </div>
                <div class="col-xl-6">
                  <label class="form-label fw-bolder text-dark fs-6"> Middle Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="middlename" autocomplete="off" value="" required placeholder="Enter your middle name" />
                         
                </div>
               
              </div>

              <div class="row fv-row mb-6">
                <div class="col-xl-6">
                  <label class="form-label fw-bolder text-dark fs-6">Legal Last Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="lastname"
                  value="<?php echo e(old('name')); ?>"  autocomplete="off" value="" required placeholder=" Last name" />
                        
                  
                </div>
                <div class="col-xl-6">
                  <label class="form-label fw-bolder text-dark fs-6"> User Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" value="" required placeholder="Enter Unique Username" />
                  <?php if($errors->has('username')): ?>
                  <small
                      class="text-danger"><?php echo e($errors->first('username')); ?></small>
              <?php endif; ?>         
                </div>
               
              </div>
              <div class="fv-row mb-6">
                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="email" value="" required placeholder="name@email.com" />
                <?php if($errors->has('email')): ?>
                <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
            <?php endif; ?>     
              </div>
              <div class="fv-row mb-6">
                <label class="form-label fs-6 fw-bolder text-dark">Phone</label>
                <div class="input-group mb-3">
                  
                  <input class="form-control form-control-lg form-control-solid" type="tel" name="phone" autocomplete="phone" value="" required placeholder="+123456789" />
                </div>
                <?php if($errors->has('phone')): ?>
                <small
                    class="text-danger"><?php echo e($errors->first('phone')); ?></small>
            <?php endif; ?>
                        </div>

                        <div class="fv-row mb-6">
                            <label class="form-label fs-6 fw-bolder text-dark">Country</label>
                            <div class="input-group mb-3">
                              
                                <select class="form-control form-control-lg form-control-solid" name="country" id="country"  required  />
                                <option selected disabled>Choose Country</option>
                                <?php echo $__env->make('auth.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                            </div>
                            <?php if($errors->has('country')): ?>
                            <small class="text-danger"><?php echo e($errors->first('country')); ?></small>
                        <?php endif; ?>
                                    </div>


                                    <div class="fv-row mb-6">
                                      <label class="form-label fs-6 fw-bolder text-dark">Account Type</label>
                                      <div class="input-group mb-3">
                                        
                                        <select class="form-control form-control-lg form-control-solid" name="accounttype"   required />
                                
                                        <option value="">Please select Account Type</option> 
                                                                   <option value="Checking Account">Checking Account</option>
                                                                   <option value="Savings Account">Saving Account</option>
                                                                   <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                                                   <option value="Current Account">Current Account</option>
                                                                   <option value="Crypto Currency Account">Crypto Currency Account</option>
                                                                   <option value="Business Account">Business Account</option>
                                                                   <option value="Non Resident Account">Non Resident Account</option>
                                                                   <option value="Cooperate Business Account">Cooperate Business Account</option>
                                                                   <option value="Investment Account">Investment Account</option>
                            </select>
                                      </div>
                                      
                                              </div>
                                              <div class="fv-row mb-6">
                                                <label class="form-label fs-6 fw-bolder text-dark">4 Digit Transaction Pin</label>
                                                <div class="input-group mb-3">
                                                  
                                                  <input class="form-control form-control-lg form-control-solid"  name="pin"  type='password' required placeholder="Transaction Pin " />
                                                </div>
                                                
                                                        </div>
                                                      


              <div class="fv-row mb-10" data-kt-password-meter="true">
                <div class="d-flex flex-stack mb-2">
                  <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                </div>
                <div class="position-relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" required data-toggle="password" id="password" />
                  <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 input-password" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye fs-2 text-dark"></i>
                  </span>
      
                  <?php if($errors->has('password')): ?>
                  <small
                      class="text-danger"><?php echo e($errors->first('password')); ?></small>
              <?php endif; ?>
                </div>
                <div class="fv-row mb-10" data-kt-password-meter="true">
                  <div class="d-flex flex-stack mb-2">
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Comfirm Password</label>
                  </div>
                  <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password_confirmation"
                    value="<?php echo e(old('password_confirmation')); ?>" autocomplete="off" required data-toggle="password" id="password_confirmation" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 input-password" data-kt-password-meter-control="visibility">
                      <i class="bi bi-eye fs-2 text-dark"></i>
                    </span>
        
                    <?php if($errors->has('password')): ?>
                    <small
                        class="text-danger"><?php echo e($errors->first('password')); ?></small>
                <?php endif; ?>
                  </div>

          

          
        <div class="form-check form-check-custom form-check-solid mb-6">
          <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="terms" required />
          <label class="form-check-label" for="flexCheckDefault">I agree to our <a href="#">terms &amp; conditions</a></label>
        </div>
                <div class="text-center">
          <button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2" id="kt_sign_up_submit">
            <span class="indicator-label">Submit</span>
          </button>
                    
                  </div>
      </form>
    </div>
  </div>
  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script>
        $('#input1').on('keypress', function(e) {
            return e.which !== 32;
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bank\resources\views/auth/register.blade.php ENDPATH**/ ?>