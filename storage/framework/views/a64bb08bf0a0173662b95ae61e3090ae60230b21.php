
<?php $__env->startComponent('mail::message'); ?>
# Hi <?php echo e($user->name); ?> <?php echo e($user->middlename); ?> <?php echo e($user->lastname); ?> , 

Thank you so much for allowing us to help you with your recent account opening.
<br>We are committed to providing our customers with the highest level of service and the most innovative banking products possible.
<br>We are very glad you chose us as your financial institution and hope you will take advantage of our wide variety of savings, investment and loan products, all designed to meet your specific needs.

<p><b style="text-center">Details of your new account are shown below;</b></p>
<b>Account name: <?php echo e($user->name); ?> <?php echo e($user->middlename); ?> <?php echo e($user->lastname); ?></b><br>
<b>Account Number: <?php echo e($user->usernumber); ?></b><br>
<b>Account Type: <?php echo e($user->	accounttype); ?></b><br>
<b>Country: <?php echo e($user->country); ?></b><br>
<b>Date : <?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?></b><br>
<hr>
<p><b style="text-center">Online banking credentials</b></p>
<b>Email: <?php echo e($user->email); ?></b><br>
<b>Password: Your password</b><br>
                            
                          
                               
<p>For more detailed information about any of our products or services, please refer to our website or visit any of our convenient locations. You may contact us on email <?php echo e($settings->contact_email); ?>.</p> 
                          
<p> <?php echo e($settings->site_name); ?> is a full service, local and International financial institution. Our decisions are made right here, with the community’s members best interest in mind. We are concerned about what is best for you!</p>


Thanks, and welcome.
<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home/hebkghti/public_html/ciitesonline.com/resources/views/emails/welcome.blade.php ENDPATH**/ ?>