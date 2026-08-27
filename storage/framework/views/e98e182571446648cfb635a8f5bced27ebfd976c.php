 
  <!-- Top Up Modal -->
 <div id="credit" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                <?php if(!empty($user->profile_photo_path)): ?>
    <img
        alt="<?php echo e($user->name); ?>"
        src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
        width="40" height="40"
        style="border-radius: 50%;">
<?php else: ?>
    <?php
        $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
    ?>
    <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
         style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
        <?php echo e($initials); ?>

    </div>
<?php endif; ?>

                 <h4 class="modal-title pl-1">Credit Account.</strong></h4>
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

                     <input type='hidden' name="t_type" value="Credit" required >
                     
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
                        <h5 class="">Sender </h5>
                        <input class="form-control" name="name" placeholder="Sender Name" type='text' >


                    </div>

                     <div class="form-group">
                        <h5 class="">Description </h5>
                        <input class="form-control" name="Description" type='text' >


                    </div>


                    <div class="form-group">
                        <h5 class="">Bank Address</h5>
                        <input class="form-control" name="bankaddress" value = "<?php echo e($settings->address); ?>" placeholder="Sender Name" type='text' >


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

 

<!-- Top Up Modal -->
<div id="debit" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <?php if(!empty($user->profile_photo_path)): ?>
                <img
                    alt="<?php echo e($user->name); ?>"
                    src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
                    width="40" height="40"
                    style="border-radius: 50%;">
            <?php else: ?>
                <?php
                    $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
                ?>
                <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
                     style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
                    <?php echo e($initials); ?>

                </div>
            <?php endif; ?>

               <h4 class="modal-title pl-1">Debit <?php echo e($user->username); ?> Account.</strong></h4>
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

                     <input type='hidden' name="t_type" value="Debit" required >

                    
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
                       <h5 class="">Reciver's Bank </h5>
                       <input class="form-control" name="bank" placeholder="Enter receivers's bank" type='text' >


                   </div>
                   <div class="form-group">
                       <h5 class="">Reciver's Name </h5>
                       <input class="form-control" name="name" placeholder="Enter receiver's name" type='text' >


                   </div>

                   <div class="form-group">
                       <h5 class="">Reciver's Account number </h5>
                       <input class="form-control" placeholder="Enter receiver's account number" name="account_number" type='text' >


                   </div>

                   <div class="form-group">
                       <h5 class="">Bank Address </h5>
                       <input class="form-control" name="bankaddress" placeholder="Enter receiver's bank address" type='text' >


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
<!-- /deposit for a


 
 
 <!-- Top Up Modal -->
 <div id="topupModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                <?php if(!empty($user->profile_photo_path)): ?>
    <img
        alt="<?php echo e($user->name); ?>"
        src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
        width="40" height="40"
        style="border-radius: 50%;">
<?php else: ?>
    <?php
        $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
    ?>
    <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
         style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
        <?php echo e($initials); ?>

    </div>
<?php endif; ?>
               
                <h4 class="modal-title pl-1">Fund/Debit Account.</strong></h4>
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
  


    <div id="useages" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e($bg); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>"><?php echo e($user->name); ?> Useage Limits.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e($bg); ?>">
                    <form method="post" action="<?php echo e(route('useage')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Daily Limits</h5>
                            <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="dailyTotal" required>
                            <option value="<?php echo e($user->dailyTotal); ?>"> Daily Limits on</option>
                            <option value="1" <?php echo e($user->dailyTotal == 1 ? 'selected' : ''); ?>>ON</option>
                            <option value="0" <?php echo e($user->dailyTotal != 1 ? 'selected' : ''); ?>>OFF</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Weekly Limits</h5>
                            <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="weeklyTotal" required>

                            <option value="1" <?php echo e($user->weeklyTotal == 1 ? 'selected' : ''); ?>>ON</option>
                            <option value="0" <?php echo e($user->weeklyTotal != 1 ? 'selected' : ''); ?>>OFF</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Monthly Limits</h5>
                            <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="monthlyTotal" required>
                                <option value="1" <?php echo e($user->monthlyTotal == 1 ? 'selected' : ''); ?>>ON</option>
                                <option value="0" <?php echo e($user->monthlyTotal != 1 ? 'selected' : ''); ?>>OFF</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Minimum Transfer Amount (<?php echo e($user->s_currency ?? '$'); ?>)</h5>
                            <input type="number" step="0.01" min="0" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" 
                                   name="min_transfer_amount" value="<?php echo e($user->min_transfer_amount ?? 1.00); ?>" required>
                        </div>

                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Maximum Transfer Amount (<?php echo e($user->s_currency ?? '$'); ?>)</h5>
                            <input type="number" step="0.01" min="0" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" 
                                   name="max_transfer_amount" value="<?php echo e($user->max_transfer_amount ?? 500000.00); ?>" required>
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




    
    
    
    <div id="transferLimits" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e($bg); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>"><?php echo e($user->name); ?> Transfer Limits</h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e($bg); ?>">
                    <form method="post" action="<?php echo e(route('updateTransferLimits')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Minimum Transfer Amount (<?php echo e($user->s_currency ?? '$'); ?>)</h5>
                            <input type="number" step="0.01" min="0" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" 
                                   name="min_transfer_amount" value="<?php echo e($user->min_transfer_amount ?? 1.00); ?>" required>
                            <small class="text-muted">Users cannot transfer less than this amount</small>
                        </div>

                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Maximum Transfer Amount (<?php echo e($user->s_currency ?? '$'); ?>)</h5>
                            <input type="number" step="0.01" min="0" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" 
                                   name="max_transfer_amount" value="<?php echo e($user->max_transfer_amount ?? 500000.00); ?>" required>
                            <small class="text-muted">Users cannot transfer more than this amount</small>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Update Transfer Limits">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
    


    <div id="balance" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e($bg); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>"><?php echo e($user->name); ?> Balance.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e($bg); ?>">
                    <form method="post" action="<?php echo e(route('balanceupdate')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Update Balance</h5>
                            <input type="number" step="any" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="balance" value="<?php echo e($user->account_bal); ?>">

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




    
 <!-- /Trading History Modal -->

 <div id="TradingModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header ">
                 <h4 class="modal-title "> 
                 
                 <?php if(!empty($user->profile_photo_path)): ?>
    <img
        alt="<?php echo e($user->name); ?>"
        src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
        width="40" height="40"
        style="border-radius: 50%;">
<?php else: ?>
    <?php
        $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
    ?>
    <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
         style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
        <?php echo e($initials); ?>

    </div>
<?php endif; ?>
                 
                 <h1 class="d-inline text-primary"> <?php echo e($user->name); ?> <?php echo e($user->l_name); ?> </h4>
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
               <?php if(!empty($user->profile_photo_path)): ?>
    <img
        alt="<?php echo e($user->name); ?>"
        src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
        width="40" height="40"
        style="border-radius: 50%;">
<?php else: ?>
    <?php
        $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
    ?>
    <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
         style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
        <?php echo e($initials); ?>

    </div>
<?php endif; ?>
               <h4 class="modal-title pl-1">Edit <?php echo e($user->name); ?> details.</strong></h4>
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
                       <input class="form-control" value="<?php echo e($user->code4); ?>" type="text" name="code4"
                           required>
                   </div>
                   <div class="form-group">
                       <h5 class=" "><?php echo e($settings->code5); ?></h5>
                       <input class="form-control" value="<?php echo e($user->code5); ?>" type="text" name="code5"
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
                     <h5 class=" ">Account Age/Date created (You  can back dateAccount age here)</h5>
                         <input class="form-control  " value="<?php echo e($user->created_at); ?>" type="datetime" name="created_at"
                             required>
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
 
 
 
<!-- Generate Transactions Starts -->
<div id="generate" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <?php if(!empty($user->profile_photo_path)): ?>
                <img
                    alt="<?php echo e($user->name); ?>"
                    src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>"
                    width="45" height="45"
                    style="border-radius: 50%;">
            <?php else: ?>
                <?php
                    $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
                ?>
                <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary"
                     style="width: 48px; height: 48px; background-color: #0d6efd; color: white;">
                    <?php echo e($initials); ?>

                </div>
            <?php endif; ?>

               <h4 class="modal-title pl-1">Generate Transaction for <?php echo e($user->username); ?> Account.</strong></h4>
                <button type="button" class="close " data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
                <form method="post" action="<?php echo e(route('generateTransactions')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                       <h4 class="">Min Amount</h4>
                        <input class="form-control" placeholder="Enter Min amount" type="number" name="min_amount"
                            required>
                    </div>

                    <div class="form-group">
                       <h4 class="">Max Amount</h4>
                        <input class="form-control" placeholder="Enter Max amount" type="number" name="max_amount"
                            required>
                    </div>

<div class="form-group">
    <h4 class="">Transaction Type</h4>
    <select name="type" class="form-control" required>
        <option value="" disabled selected>Select Type</option>
        <option value="credit">Credit</option>
        <option value="debit">Debit</option>
    </select>
</div>

                    <div class="form-group">
                       <h5 class="">From Date</h5>
                       <input class="form-control" name="from_date" type='datetime-local' >


                   </div>

                   <div class="form-group">
                       <h5 class="">To Date</h5>
                       <input class="form-control" name="to_date" type='datetime-local' >


                   </div>

                   <div class="form-group">
                       <h4 class="">Number Of Transactions to Generate</h4>
                        <input class="form-control" placeholder="Enter number transactions" type="number" name="number_of_transactions"
                            required>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                        <input type="submit" class="btn btn-primary" value="Generate Transactions">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Generate Transactions Ends -->


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

<!-- Ban User Modal -->
<div id="banUserModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <?php if(!empty($user->profile_photo_path)): ?>
                    <img alt="<?php echo e($user->name); ?>" src="<?php echo e(asset('storage/app/public/photos/'.$user->profile_photo_path)); ?>" width="40" height="40" style="border-radius: 50%;">
                <?php else: ?>
                    <?php
                        $initials = strtoupper(substr($user->name, 0, 1) . substr($user->lastname, 0, 1));
                    ?>
                    <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold border border-secondary" style="width: 48px; height: 48px; background-color: #dc3545; color: white;">
                        <?php echo e($initials); ?>

                    </div>
                <?php endif; ?>
                <h4 class="modal-title pl-2">
                    <i class="fa fa-ban text-danger"></i> 
                    <?php if($user->isBanned()): ?>
                        Manage User Ban
                    <?php else: ?>
                        Ban User Account
                    <?php endif; ?>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php if($user->isBanned()): ?>
                    <!-- User is currently banned - show unban option -->
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>User is currently banned!</strong>
                        <p class="mt-2 mb-0">This user account has been suspended and cannot access the system.</p>
                    </div>
                    
                    <div class="card border-warning mb-3">
                        <div class="card-header bg-warning text-dark">
                            <i class="fa fa-info-circle"></i> Current Ban Details
                        </div>
                        <div class="card-body">
                            <p><strong>Ban Message:</strong></p>
                            <div class="bg-light p-3 rounded mb-3"><?php echo e($user->ban_message); ?></div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Banned On:</strong><br>
                                    <?php echo e($user->banned_at ? $user->banned_at->format('M j, Y \a\t g:i A') : 'N/A'); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Ban Expires:</strong><br>
                                    <?php if($user->ban_expires_at): ?>
                                        <?php echo e($user->ban_expires_at->format('M j, Y \a\t g:i A')); ?>

                                    <?php else: ?>
                                        <span class="text-danger">Permanent Ban</span>
                                    <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <form method="post" action="<?php echo e(route('admin.unban-user', $user->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Are you sure you want to unban this user? They will be able to access their account immediately.')">
                                <i class="fa fa-unlock"></i> Unban User
                            </button>
                        </div>
                    </form>
                <?php else: ?>
                    <!-- User is not banned - show ban options -->
                    <div class="alert alert-danger">
                        <i class="fa fa-warning"></i>
                        <strong>Warning!</strong> Banning this user will immediately log them out and prevent them from accessing their account.
                    </div>
                    
                    <form method="post" action="<?php echo e(route('admin.ban-user')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                        
                        <div class="form-group">
                            <label for="ban_message"><strong>Ban Message *</strong></label>
                            <textarea class="form-control" name="ban_message" id="ban_message" rows="4" placeholder="Enter the reason for banning this user. This message will be displayed to the user when they try to access their account." required></textarea>
                            <small class="text-muted">This message will be shown to the user explaining why their account was suspended.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="ban_duration"><strong>Ban Duration *</strong></label>
                            <select class="form-control" name="ban_duration" id="ban_duration" required onchange="toggleExpiryDate()">
                                <option value="">Select ban duration</option>
                                <option value="permanent">Permanent Ban</option>
                                <option value="temporary">Temporary Ban</option>
                            </select>
                        </div>
                        
                        <div class="form-group" id="expiry_date_group" style="display: none;">
                            <label for="ban_expires_at"><strong>Ban Expiry Date *</strong></label>
                            <input type="datetime-local" class="form-control" name="ban_expires_at" id="ban_expires_at" min="<?php echo e(date('Y-m-d\TH:i')); ?>">
                            <small class="text-muted">Select when this ban should automatically expire.</small>
                        </div>
                        
                        <hr>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to ban this user? This action will immediately log them out and prevent access to their account.')">
                                <i class="fa fa-ban"></i> Ban User
                            </button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- /Ban User Modal -->

<script>
function toggleExpiryDate() {
    const banDuration = document.getElementById('ban_duration').value;
    const expiryGroup = document.getElementById('expiry_date_group');
    const expiryInput = document.getElementById('ban_expires_at');
    
    if (banDuration === 'temporary') {
        expiryGroup.style.display = 'block';
        expiryInput.setAttribute('required', 'required');
    } else {
        expiryGroup.style.display = 'none';
        expiryInput.removeAttribute('required');
        expiryInput.value = '';
    }
}
</script>
<?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/Users/users_actions.blade.php ENDPATH**/ ?>