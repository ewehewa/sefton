 <!-- Top Up Modal -->
 <div id="topupModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e($user->profile_photo_path); ?>" width="60" height="60" style='border-radius: 50%;'> <h4 class="modal-title pl-1">Fund/Debit Account.</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <form method="post" action="<?php echo e(route('topup')); ?>">
                     <?php echo csrf_field(); ?>
                     <div class="form-group">
                        <h4 class="">Amount</h4>
                         <input class="form-control" placeholder="Enter amount" type="number" name="amount"
                             required>
                     </div>
                     <div class="form-group">
                         <h5 class="">Select where to Fund/Debit</h5>
                         <select class="form-control" name="type" required>
                
                             
                             <option value="balance">Account Balance</option>
                             <option value="btc_balance">Bitcoin Balance</option>
                             
                             
                            
                             
                         </select>
                     </div>
                     <div class="form-group">
                         <h5 class="">Select Fund to add, debit to subtract.</h5>
                         <select class="form-control  " name="t_type" required>
                             <option value="">Select type</option>
                             <option value="Credit">Fund </option>
                             <option value="Debit">Debit</option>
                         </select>
                         
                     </div>
                     <div class="form-group">
                        <h5 class="">Transfer Scope.</h5>
                        <select class="form-control  " name="scope" required>
                            <option value="">Select type</option>
                            <option value="International transfer">International transfer</option>
                            <option value="Local transfer">Local transfer</option>
                            <option value="Crypto Deposit">Crypto Deposit</option>
                            <option value="Check Deposit">Check Deposit</option>
                        </select>
                        
                    </div>
                     <div class="form-group">
                        <h5 class="">Description </h5>
                        <input class="form-control" name="Description" type='text' >
                            
                        
                    </div>
                     <div class="form-group">
                        <h5 class="">Date (You can back date transction here)</h5>
                        <input class="form-control" name="date" type='datetime-local' >
                            
                        
                    </div>

                    <div class="form-group">
                        <h5 class="">Send Email and SMS to User</h5>
                        <select class="form-control" name="notifymailuser" type='text' >
                        <option value='0'>No</option>
                        <option value='1'>Yes</option>
                        </select>

                            
                        
                    </div>
                     <div class="form-group">
                         <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                         <input type="submit" class="btn btn-primary" value="Fund Account">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- /deposit for a plan Modal -->
<!--user action mode-->
<div id="userAction" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e($bg); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Action amount  for<?php echo e($user->name); ?> account.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e($bg); ?>">
                    <form method="post" action="<?php echo e(route('action')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">On or Off Action</h5>
                            <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="type" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Yes">On upgrade action</option>
                                <option value="No">Off upgrade action</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" placeholder="Enter actoin amount" type="text" name="amount">
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--user action modal end-->
<!--signal action model-->


<div id="userActionsignal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e($bg); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Signal action for <?php echo e($user->name); ?> account.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e($bg); ?>">
                    <form method="post" action="<?php echo e(route('signalaction')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">On or Off signal action</h5>
                            <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="signalstatus" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Yes">On signal</option>
                                <option value="No">Off signal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" placeholder="Enter actoin amount" type="text" name="signalamount" >
                        </div>
                         <div class="form-group">
                            <input class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" placeholder="Enter signal name" type="text" name="signalname" >
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--user action modal end-->

 <!-- send a single user email Modal-->
 <div id="sendmailtooneuserModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">Send Email</h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <p class="">This message will be sent to <?php echo e($user->name); ?></p>
                 <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('sendmailtooneuser')); ?>">
                     <?php echo csrf_field(); ?>
                     <div class=" form-group">
                         <input type="text" name="subject" class="form-control  " placeholder="Subject" required>
                     </div>
                     <div class=" form-group">
                         <textarea placeholder="Type your message here" class="form-control  " name="message" row="8"
                             placeholder="Type your message here" required></textarea>
                     </div>
                     <div class=" form-group">
                         <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                         <input type="submit" class="btn " value="Send">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- /Trading History Modal -->

 <div id="TradingModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">  <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e($user->profile_photo_path); ?>" width="60" height="60" style='border-radius: 50%;'><h1 class="d-inline text-primary"> <?php echo e($user->name); ?> <?php echo e($user->l_name); ?> </h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <form role="form" method="post" action="<?php echo e(route('profileimage')); ?>" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <div class="form-group">
                         <h5 class=" ">Change <?php echo e($user->name); ?> profile image</h5>
                         
                     </div>
                     <div class="form-group">
                         <h5 class=" ">Profile image</h5>
                         <input type="file" name="photo" class="form-control  ">
                     </div>
                     
                     <div class="form-group">
                         <input type="submit" class="btn btn-primary" value="Change Profile Image">
                         <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- /send a single user email Modal -->

 <!-- Edit user Modal -->
<div id="edituser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
               <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e($user->profile_photo_path); ?>" width="60" height="60" style='border-radius: 50%;'> <h4 class="modal-title pl-1">Edit <?php echo e($user->name); ?> details.</strong></h4>
                <button type="button" class="close " data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <form role="form" method="post" action="<?php echo e(route('edituser')); ?>">
                    <div class="form-group">
                        <h5 class=" ">Username</h5>
                        <input class="form-control  " id="input1" value="<?php echo e($user->username); ?>" type="text"
                            name="username" required>
                        
                    </div>
                    <div class="form-group">
                        <h5 class=" ">First Name</h5>
                        <input class="form-control  " value="<?php echo e($user->name); ?>" type="text" name="name"
                            required>
                    </div>
                    <div class="form-group">
                       <h5 class=" ">Middle Name</h5>
                       <input class="form-control  " value="<?php echo e($user->middlename); ?>" type="text" name="middlename"
                           required>
                   </div>

                   <div class="form-group">
                       <h5 class=" ">Last Name</h5>
                       <input class="form-control  " value="<?php echo e($user->lastname); ?>" type="text" name="lastname"
                           required>
                   </div>
                    <div class="form-group">
                        <h5 class=" ">Email</h5>
                        <input class="form-control  " value="<?php echo e($user->email); ?>" type="text" name="email"
                            required>
                    </div>
                    <div class="form-group">
                        <h5 class=" ">Phone Number</h5>
                        <input class="form-control  " value="<?php echo e($user->phone); ?>" type="text" name="phone"
                            required>
                    </div>

                    <div class="form-group">
                       <h5 class=" ">Date Of birth</h5>
                       <input class="form-control  " value="<?php echo e($user->dob); ?>" type="date" name="dob"
                           required>
                   </div>

            <div class="form-group">
                        <h5 class=" "> Address </h5>
                        <input class="form-control  " value="<?php echo e($user->address); ?>" type="text" name="address"
                            required>
                    </div>
                   <div class="form-group col-md-12">
                       <h6 class="text-<?php echo e($text); ?>">Nationality</h6>
                       <select type="text" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="country"  value='<?php echo e($user->country); ?>' required>
                           <option value='<?php echo e($user->country); ?>'><?php echo e($user->country); ?></option>
                           <?php echo $__env->make('auth.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       </select>
                   </div>

                   <!-- Currency (Added) -->
                   <div class="form-group col-md-12">
                       <h6 class="text-<?php echo e($text); ?>">Currency</h6>
                       <select id="currency-select" type="text" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="curr" required>
                           <option value='<?php echo e($user->curr); ?>'><?php echo e($user->curr); ?></option>
                           <?php echo $__env->make('partials.currencies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       </select>
                   </div>
                   
                   <!-- Currency Symbol (Added) -->
                   <div class="form-group">
                       <h6 class="text-<?php echo e($text); ?>">Currency Symbol</h6>
                       <input id="s_curr" class="form-control text-<?php echo e($text); ?>" value="<?php echo e($user->s_curr); ?>" type="text" name="s_curr" readonly>
                   </div>

                    <div class="form-group">
                       <h5 class=" ">Account  Number</h5>
                       <input class="form-control  " value="<?php echo e($user->usernumber); ?>" type="text" name="usernumber"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" ">Bitcoin Wallet Address</h5>
                       <input class="form-control  " value="<?php echo e($user->btc_address); ?>" type="text" name="btc_address"
                           required>
                   </div>
                    <div class="form-group">
                       <h5 class=" ">IRS Filing No.</h5>
                       <input class="form-control  " value="<?php echo e($user->irs_filing_id); ?>" type="text" name="irs_filing_id"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code1); ?></h5>
                       <input class="form-control  " value="<?php echo e($user->code1); ?>" type="text" name="code1"
                           required>
                   </div>

                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code2); ?></h5>
                       <input class="form-control  " value="<?php echo e($user->code2); ?>" type="text" name="code2"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code3); ?></h5>
                       <input class="form-control" value="<?php echo e($user->code3); ?>" type="text" name="code3"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code4); ?></h5>
                       <input class="form-control" value="<?php echo e($user->code4); ?>" type="text" name="code3"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code5); ?></h5>
                       <input class="form-control" value="<?php echo e($user->code5); ?>" type="text" name="code3"
                           required>
                   </div>
                   <div class="form-group col-md-12">
                       <h6 class="text-<?php echo e($text); ?>">Account Type</h6>
                       <select type="text" class="form-control  text-<?php echo e($text); ?>"
                           name="accounttype" value='<?php echo e($user->accounttype); ?>' required>
                           <option value="<?php echo e($user->accounttype); ?>"><?php echo e($user->accounttype); ?></option> 
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
                   
                    <div class="form-group">
                       <h6 class="text-<?php echo e($text); ?>">Account Limit (<?php echo e($user->s_curr); ?>) </h6>
                       <input type="number" class="form-control  text-<?php echo e($text); ?>"
                           name="limit" value='<?php echo e($user->limit); ?>' required>
                   </div>
                   <div class="form-group">
                       <h6 class="text-<?php echo e($text); ?>">Grant Limit (<?php echo e($user->s_curr); ?>) </h6>
                       <input type="number" class="form-control  text-<?php echo e($text); ?>"
                           name="grant_limit" value='<?php echo e($user->grant_limit); ?>' required>
                   </div>
                   <div class="form-group">
                       <h6 class="text-<?php echo e($text); ?>">4 Digit Transaction pin</h6>
                       <input type="text" class="form-control  text-<?php echo e($text); ?>"
                           name="pin" value='<?php echo e($user->pin); ?>' required>
                   </div>
                   
                   <div class="form-group col-md-12">
                       <h6 class="text-<?php echo e($text); ?>">Account Status</h6>
                       <select type="text" class="form-control text-<?php echo e($text); ?>"
                           name="account_status" required>
                           <option value="<?php echo e($user->account_status); ?>" selected><?php echo e(ucfirst($user->account_status)); ?></option>
                           <option value="active">Active</option>
                           <option value="inactive">Inactive</option>
                           <option value="on-hold">On Hold</option>
                           <option value="suspended">Suspended</option>
                       </select>
                   </div>
                   
                    
                    
                    <div class="form-group">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                        <input type="submit" class="btn  btn-primary" value="Update">
                    </div>
                </form>
            </div>
            <script>
                $('#input1').on('keypress', function(e) {
                    return e.which !== 32;
                });

                // Update currency symbol when currency is changed
                document.addEventListener('DOMContentLoaded', function() {
                    const currencySelect = document.getElementById('currency-select');
                    if (currencySelect) {
                        currencySelect.addEventListener('change', function() {
                            const selectedOption = currencySelect.options[currencySelect.selectedIndex];
                            const symbolField = document.getElementById('s_curr');
                            if (selectedOption && symbolField) {
                                symbolField.value = selectedOption.dataset.symbol || '';
                            }
                        });
                    }
                });
            </script>
        </div>
    </div>
</div>
<!-- /Edit user Modal -->

 <!-- Reset user password Modal -->
 <div id="resetpswdModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">Reset Password</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <p class="">Are you sure you want to reset password for <?php echo e($user->name); ?> to <span
                         class="text-primary font-weight-bolder">user01236</span></p>
                 <a class="btn " href="<?php echo e(url('admin/dashboard/resetpswd')); ?>/<?php echo e($user->id); ?>">Reset Now</a>
             </div>
         </div>
     </div>
 </div>
 <!-- /Reset user password Modal -->

 <!-- Switch useraccount Modal -->
 <div id="switchuserModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">You are about to login as <?php echo e($user->name); ?>.</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <a class="btn btn-success"
                     href="<?php echo e(url('admin/dashboard/switchuser')); ?>/<?php echo e($user->id); ?>">Proceed</a>
             </div>
         </div>
     </div>
 </div>
 <!-- /Switch user account Modal -->

 <!-- Clear account Modal -->
 <div id="clearacctModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">Clear Account</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <p class="">You are clearing account for <?php echo e($user->name); ?> to <?php echo e($settings->currency); ?>0.00
                 </p>
                 <a class="btn " href="<?php echo e(url('admin/dashboard/clearacct')); ?>/<?php echo e($user->id); ?>">Proceed</a>
             </div>
         </div>
     </div>
 </div>
 <!-- /Clear account Modal -->
 
 <!-- Clear BTC account Modal -->
<div id="clearBtcModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title ">Clear BTC Account</strong></h4>
                <button type="button" class="close " data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <p class="">You are clearing BTC account for <?php echo e($user->name); ?> to 0.00000000 BTC
                </p>
                <a class="btn btn-warning" href="<?php echo e(url('admin/dashboard/clearbtc')); ?>/<?php echo e($user->id); ?>">Proceed</a>
            </div>
        </div>
    </div>
</div>
<!-- /Clear BTC account Modal -->

 <!-- Delete user Modal -->
 <div id="deleteModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">

                 <h4 class="modal-title ">Delete User</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body  p-3">
                 <p class="">Are you sure you want to delete <?php echo e($user->name); ?> Account? Everything associated
                     with this account will be loss.</p>
                 <a class="btn btn-danger" href="<?php echo e(url('admin/dashboard/delsystemuser')); ?>/<?php echo e($user->id); ?>">Yes
                     i'm sure</a>
             </div>
         </div>
     </div>
 </div>
 <!-- /Delete user Modal -->

 <!-- Toggle 2FA Modal -->
 <div id="toggle2faModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title ">Two-Factor Authentication</strong></h4>
                 <button type="button" class="close " data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body ">
                 <div class="d-flex align-items-center mb-3">
                     <div class="mr-3">
                         <?php if($user->two_factor_enabled): ?>
                             <span class="badge badge-success">Enabled</span>
                         <?php else: ?>
                             <span class="badge badge-secondary">Disabled</span>
                         <?php endif; ?>
                     </div>
                     <div>
                         <h5 class="mb-1">Two-Factor Authentication Status</h5>
                         <p class="text-muted mb-0 small">When enabled, a 6-digit verification code will be sent to the user's email at login</p>
                     </div>
                 </div>
                 
                 <div class="alert alert-info">
                     <i class="fa fa-info-circle"></i>
                     <strong>How it works:</strong>
                     <ul class="mt-2">
                         <li>When enabled, users will need to enter a verification code sent to their email after login</li>
                         <li>This adds an extra layer of security to user accounts</li>
                         <li>You can toggle this feature on/off for users as needed</li>
                     </ul>
                 </div>
                 
                 <form method="post" action="<?php echo e(route('admin.toggle2fa')); ?>">
                     <?php echo csrf_field(); ?>
                     <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                     <button type="submit" class="btn <?php echo e($user->two_factor_enabled ? 'btn-danger' : 'btn-success'); ?>">
                         <?php if($user->two_factor_enabled): ?>
                             <i class="fa fa-toggle-off"></i> Disable Two-Factor Authentication
                         <?php else: ?>
                             <i class="fa fa-toggle-on"></i> Enable Two-Factor Authentication
                         <?php endif; ?>
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- /Toggle 2FA Modal -->
<?php /**PATH /home/aureviatrust/public_html/resources/views/admin/Users/users_actions.blade.php ENDPATH**/ ?>