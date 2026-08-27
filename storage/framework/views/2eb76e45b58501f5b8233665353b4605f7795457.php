
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo e($title); ?> User Dashboard |  <?php echo e($settings->site_name); ?></title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="" name="author">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport"> 
    <link href="<?php echo e(asset('storage/app/public/'.$settings->favicon)); ?>" rel="shortcut icon">
    <link href="<?php echo e(asset('dash2/custom/apple-touch-icon.png')); ?>" rel="apple-touch-icon">
    <link rel="stylesheet" href="<?php echo e(asset('dash2/css/argon.css?v=1.1.0')); ?>" type="text/css">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/css.css" rel="stylesheet')); ?>" type="text/css">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/dropzone.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/perfect-scrollbar.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dash2/custom/public/dashboard/css/main.css')); ?>" rel="stylesheet">
	
    
	
	<link href="<?php echo e(asset('dash2/custom/spry/textfieldvalidation/SpryValidationTextField.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('dash2/custom/spry/textfieldvalidation/SpryValidationTextField.js')); ?>" type="text/javascript"></script> 
<link href="<?php echo e(asset('dash2/custom/spry/textareavalidation/SpryValidationTextarea.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('dash2/custom/spry/textareavalidation/SpryValidationTextarea.js')); ?>" type="text/javascript"></script> 
<link href="<?php echo e(asset('dash2/custom/spry/selectvalidation/SpryValidationSelect.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('dash2/custom/spry/selectvalidation/SpryValidationSelect.js')); ?>" type="text/javascript"></script>




<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<style type="text/css">
  .preloader {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-image: url("");
    background-repeat: no-repeat;
    background-color: #FFF;
    background-position: center;
  }
</style>
  <style>
  @import    url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700&display=swap');
</style>
<style>




@font-face{
  font-family:'HKGroteskPro';
  font-weight:400;
  src:url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Regular.woff2')); ?>") format("woff2"),
  url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Regular.woff')); ?>") format("woff")
}
@font-face{
  font-family:'HKGroteskPro';
  font-weight:500;
  src:url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Medium.woff2')); ?>") format("woff2"),
  url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Medium.woff')); ?>") format("woff")
}
@font-face{
  font-family:'HKGroteskPro';
  font-weight:700;
  src:url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Bold.woff2')); ?>") format("woff2"),
  url("<?php echo e(asset('dash2/fonts/HKGroteskPro-Bold.woff')); ?>") format("woff")
}  
@font-face{
  font-family:'HKGroteskPro';
  font-weight:600;
  src:url("<?php echo e(asset('dash2/fonts/HKGroteskPro-SemiBold.woff2')); ?>") format("woff2"),
  url("<?php echo e(asset('dash2/fonts/HKGroteskPro-SemiBold.woff')); ?>") format("woff")
}

body
{
  font-family: "Lato", sans-serif;
}
pre,code,kbd,samp
{
  font-family: "Lato", Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}
.tooltip
{
  font-family: "Lato", sans-serif;
}
.popover
{
  font-family: "Lato", sans-serif;
}
.text-monospace
{
  font-family: "Lato", Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace !important;
}
.btn-group-colors > .btn:before
{
  font-family: "Lato", sans-serif;
}
.has-danger:after
{
  font-family: 'Lato';
}
.fc-icon
{
  font-family: "Lato", sans-serif;
}
.ql-container
{
  font-family: "Lato", sans-serif;
}
</style>
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes  chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style>.cke{visibility:hidden;}</style></head>

<body class="menu-position-side menu-side-left full-screen">
  <div class="all-wrapper solid-bg-all">
    <!--------------------
    START - Top Bar
    -------------------->
    <div class="top-bar color-scheme-bright">
      <div class="logo-w menu-size">
        <a class="logo" href="">
          <img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" alt="">
          <div class="logo-label">
            
          </div>
        </a>
      </div>
      <div class="fancy-selector-w">
        <div class="fancy-selector-current">
          <div class="fs-img">
            <img alt="" src="<?php echo e(asset('dash2/custom/public/images/card1.png')); ?>">
          </div>
          <div class="fs-main-info">
            <div class="fs-name">
               <?php echo e($settings->site_name); ?>            </div>
            <div class="fs-sub">
              <span>Available Balance:</span><strong><?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?></strong>
            </div>
          </div>
         
           <div class="fs-selector-trigger">
             <i class="os-icon os-icon-arrow-down4"></i>
            </div>
        </div>
      </div>
      <!--------------------
      START - Top Menu Controls
      -------------------->
      <div class="top-menu-controls">
        <!--------------------
        START - User avatar and menu in secondary top menu
        -------------------->
        <div class="element-search autosuggest-search-activato">
          <input value="Welcome  <?php echo e(Auth::user()->name); ?>" type="text" disabled="disabled">
        </div>
        <div class="logged-user-w">
          <div class="logged-user-i">
            <div class="avatar-w">
              <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e(Auth::user()->profile_photo_path); ?>">
            </div>
            <div class="logged-user-menu color-style-bright">
              <div class="logged-user-avatar-info">
                <div class="avatar-w">
                  <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e(Auth::user()->profile_photo_path); ?>">
                </div>
                <div class="logged-user-info-w">
                  <div class="logged-user-name">
                        <?php echo e(Auth::user()->name); ?>                  </div>
                  <div class="logged-user-role">
                    <?php echo e(Auth::user()->usernumber); ?>                  </div>
                </div>
              </div>
              <div class="bg-icon">
                <i class="os-icon os-icon-wallet-loaded"></i>
              </div>
              <ul>
                <li>
                  <a href="<?php echo e(route('profile')); ?>"   ><i class="os-icon os-icon-user-male-circle2">
                    	
                  </i><span>Profile Details</span></a>
                </li>
                <li>
                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                  style="display: none;">
                  <?php echo e(csrf_field()); ?>

                </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--------------------
        END - User avatar and menu in secondary top menu
        -------------------->
      </div>
      <!--------------------
      END - Top Menu Controls
      -------------------->
    </div>
    <!--------------------
    END - Top Bar
    -------------------->
     <div class="layout-w">
      <!--------------------
      START - Mobile Menu
      -------------------->
      <div class="menu-mobile menu-activated-on-click color-scheme-dark">
        <div class="mm-logo-buttons-w">
          <a class="mm-logo" href=""><img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" style="width:80px !important;" width="80"><span></span></a>
          <div class="mm-buttons">
            <div class="content-panel-open">
              <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
              <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
          </div>
        </div>
        <div class="menu-and-user">
          <div class="logged-user-w">
            <div class="avatar-w">
              <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e(Auth::user()->profile_photo_path); ?>">
            </div>
            <div class="logged-user-info-w">
              <div class="logged-user-name">
                    <?php echo e(Auth::user()->name); ?>              </div>
              <div class="logged-user-role">
                <?php echo e(Auth::user()->usernumber); ?>             </div>
            </div>
          </div>
          <!--------------------
          START - Mobile Menu List
          -------------------->
          <ul class="main-menu">
            <li>
              <a href="<?php echo e(route('dashboard')); ?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-home"></div>
                </div>
                <span>Home</span></a>
            </li>
            <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Account History</span></a>
              <ul class="sub-menu">
                <li>
                  <a href="<?php echo e(route('accounthistory')); ?>">Recent</a>
                </li>
                <li>
                  <a href="<?php echo e(route('accounthistory')); ?>">Summary</a>
                </li>
              </ul>
            </li>
            <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-send"></div>
                </div>
                <span>Transfer</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('internationaltransfer')); ?>">International Transfer</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('localtransfer')); ?>">Local Transfer </a>
                  </li>
                  
                </ul>
            </li>

            <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-send"></div>
                </div>
                <span>Loan</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('loan')); ?>">Loan Request</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('veiwloan')); ?>">View Loan</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('deposits')); ?>">Deposit</a>
                  </li>
                  
                </ul>
            </li>
            
          

            <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-user"></div>
                </div>
                <span>Profile</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('profile')); ?>">View Profile </a>
                  </li>
                  </ul>
            </li>
            
             <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-user"></div>
                </div>
                <span>Support Ticket</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('support')); ?>">Open Ticket </a>
                  </li>
                  </ul>
            </li>
            <li>
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
              style="display: none;">
              <?php echo e(csrf_field()); ?>

            </form>
                <div class="icon-w">
                  <div class="os-icon os-icon-signs-11"></div>
                </div>
                <span>Logout</span></a>
            </li>
          </ul>
          <!--------------------
          END - Mobile Menu List
          -------------------->
        </div>
      </div>
      <!--------------------
      END - Mobile Menu
      --------------------><!--------------------
      START - Main Menu
      -------------------->
      <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
        <div class="logged-user-w avatar-inline">
          <div class="logged-user-i">
            <div class="avatar-w">
              <img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e(Auth::user()->profile_photo_path); ?>">
            </div>
            <div class="logged-user-info-w">
              <div class="logged-user-name">
                    <?php echo e(Auth::user()->name); ?>              </div>
              <div class="logged-user-role">
                <?php echo e(Auth::user()->usernumber); ?>           </div>
            </div>
          </div>
        </div>
        <div class="menu-actions">
          Date:  28 Jun 2023 <br>
          Time: 06:21 AM  UTC        </div>
        
        <ul class="main-menu">
          <li class="sub-header">
            <span>Account</span>
          </li>
          <li class="selected">
            <a href="<?php echo e(route('dashboard')); ?>">
              <div class="icon-w">
                <div class="os-icon os-icon-home"></div>
              </div>
              <span>Home</span></a>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-layers"></div>
              </div>
              <span>Account History</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Account History
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-layers"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('accounthistory')); ?>">Recent</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('accounthistory')); ?>">Summary</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="sub-header">
            <span>Fund Transfer</span>
          </li>
          <li class="selecte">
            <a href="<?php echo e(route('localtransfer')); ?>">
              <div class="icon-w">
                <div class="os-icon os-icon-coins-4"></div>
              </div>
              <span>Local Transfer</span>
            </a>
          </li>
          <li class="selecte">
            <a href="<?php echo e(route('internationaltransfer')); ?>">
              <div class="icon-w">
                <div class="os-icon os-icon-send"></div>
              </div>
              <span>International Transfer</span>
            </a>
          </li>
          

          <li class="sub-header">
            <span>Loan</span>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-coins-4"></div>
              </div>
              <span>Loan</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Loan
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-coins-4"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('loan')); ?>">Request Loan</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('veiwloan')); ?>">View Loan</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          
          <li class="selecte">
            <a href="<?php echo e(route('deposits')); ?>">
              <div class="icon-w">
                <div class="os-icon os-icon-download"></div>
              </div>
              <span>Deposit</span>
            </a>
          </li>
          
          
          <li class="sub-header">
            <span>User</span>
          </li>
          
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-user-check"></div>
              </div>
              <span>Profile</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Profile
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-user-check"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('profile')); ?>">View Profile </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          
           <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-user-check"></div>
              </div>
              <span>Support Ticket</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Support Ticket
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-user-check"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo e(route('support')); ?>">Open Ticket </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          
          
          <li class="sub-header">
            <span>Authentication</span>
          </li>
          <li class="">
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
            style="display: none;">
            <?php echo e(csrf_field()); ?>

          </form>
              <div class="icon-w">
                <div class="os-icon os-icon-log-out"></div>
              </div>
              <span>Logout</span></a>
          </li>
          <li class="">
            <a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
            style="display: none;">
            <?php echo e(csrf_field()); ?>

          </form>
              <div class="icon-w">
                <div class=""></div>
              </div>
              <span>&nbsp;</span></a>
          </li>
          <li class="">
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
            style="display: none;">
            <?php echo e(csrf_field()); ?>

          </form>
              <div class="icon-w">
                <div class=""></div>
              </div>
              <span>&nbsp;</span></a>
          </li>
          <li class="">
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
            style="display: none;">
            <?php echo e(csrf_field()); ?>

          </form>
              <div class="icon-w">
                <div class=""></div>
              </div>
              <span>&nbsp;</span></a>
          </li>
        </ul>
      </div>
      
      <?php echo $__env->yieldContent('content'); ?>

      <div class="display-type"></div>
    </div>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/jquery.barrating.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/dropzone.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/mindmup-editabletable.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/util.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/alert.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/button.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/dropdown.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/modal.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/tab.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/popover.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/demo_customizer.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/custom/public/dashboard/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/konanauth/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/konanauth/public/dashboard/js/scripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/konanauth/public/asset/fonts/fontawesome/js/all.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/konanauth/public/dashboard/js/custom/general.js')); ?>"></script>
    <script src="<?php echo e(asset('dash2/konanauth/public/public/dashboard/js/custom/authentication/sign-up/general.js')); ?>"></script>


<script type="text/javascript">
<!--
var sprytf_bank_name = new Spry.Widget.ValidationTextField("sprytf_bank_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_acc_name = new Spry.Widget.ValidationTextField("sprytf_acc_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_acc_no = new Spry.Widget.ValidationTextField("sprytf_acc_no", 'integer', {minChars:8, maxChars: 15, validateOn:["blur", "change"]});


var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:10, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_routing = new Spry.Widget.ValidationTextField("sprytf_routing", 'none', {minChars:6, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amount = new Spry.Widget.ValidationTextField("sprytf_amount", "integer", {minChars:2, validateOn:["blur", "change"]});
var sprytf_remarks = new Spry.Widget.ValidationTextarea("sprytf_remarks", {isRequired:true, validateOn:["blur", "change"]});
var sprytf_type = new Spry.Widget.ValidationSelect("spryselect_type");


var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

<?php if($settings->tido): ?>
    <script src="//code.tidio.co/<?php echo e($settings->tido); ?>" async></script>
    <?php endif; ?>
    
     
     <?php if($settings->tawk_to): ?>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo e($settings->tawk_to); ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<?php endif; ?>
<?php if($settings->whatsapp): ?>
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "<?php echo e($settings->whatsapp); ?>", // WhatsApp number
            //telegram: "", // Telegram number
            call_to_action: "Contact us!", // Call to action
            position: "left", // Position may be "right" or "left"
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = url + "/widget-send-button/js/init.js";
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    })();
</script> 
<?php endif; ?>
</body></html>


<?php /**PATH C:\xampp\htdocs\bank\resources\views/layouts/dash1.blade.php ENDPATH**/ ?>