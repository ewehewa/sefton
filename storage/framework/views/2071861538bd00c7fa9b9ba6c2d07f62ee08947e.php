<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title><?php echo e($settings->site_name); ?>/preview</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 14px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 5px 12px !important;
		}
		.receipt-main th {
			padding: 7px 12px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
    </style>
</head>
<body>
<div class="col-md-12 col-sm-12">
<div class="row">
<div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
<div class="row">
<div class="receipt-header">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="receipt-left">
<img class="img-responsive" alt="iamgurdeeposahan" src="<?php echo e(asset('storage/app/public/' . $settings->logo)); ?>" style="width: 99px;">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 text-right">
<div class="receipt-right">
<h5><?php echo e($settings->site_name); ?></h5>
<!--<p><?php echo e($settings->contact_email); ?><i class="fa fa-phone"></i></p>-->

</div>
</div>
</div>
</div>
<div class="row">
<div class="receipt-header receipt-header-mid">
<div class="col-xs-8 col-sm-8 col-md-8 text-left">
<div class="receipt-right">
<h5>
    BENEFICIARY DETAILS </h5>
<p><b>Account Name:</b> <?php echo e($data['accountname']); ?></p>
<p><b>Account number :</b><?php echo e($data['accountnumber']); ?> </p>
<p><b>Routing/IBAN :</b> <?php echo e($data['iban']); ?></p>

<h5>
    Bank Details </h5>
<p><b>Bank Name:</b> <?php echo e($data['bankname']); ?></p>
<p><b>Account Type :</b> <?php echo e($data['Accounttype']); ?></p>
<p><b>Address :</b><?php echo e($data['bankaddress']); ?> </p>
<p><b>Country :</b> <?php echo e($data['country']); ?></p>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4">
<div class="receipt-left">
<h4 class='text-success'>Transaction successful!
   </h4>
   <h5>  You have successfully transfered <?php echo e($settings->currency); ?><?php echo e($data['amount']); ?> to <?php echo e($data['accountname']); ?> .</h5>
</div>
</div>
</div>
</div>
<div>
<table class="table table-bordered">
<thead>
<tr>
<th>
    YOUR TRANSFER WAS SUCCESSFUL</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td class="col-md-9">Transaction refrence:</td>
<td class="col-md-3 "><i class="fa fa-inr"></i> <?php echo e($data['txn_id']); ?></td>
</tr>
<tr>
    <td class="col-md-9">Date:</td>
    <td class="col-md-3 "><i class="fa fa-inr"></i><?php echo e(\Carbon\Carbon::parse($data['date'])->toDayDateTimeString()); ?></td>
    </tr>
<tr>
<td class="col-md-9">Amount Debited</td>
<td class="col-md-3"><i class="fa fa-inr"></i> <?php echo e($settings->currency); ?><?php echo e($data['amount']); ?></td>
</tr>
<tr>
<td class="col-md-9">Handling & Changres</td>
<td class="col-md-3"><i class="fa fa-inr"></i> <?php echo e($data['charges']); ?></td>
</tr>

<tr>
<td class="text-right"><h2><strong>Available Balance: </strong></h2></td>
<td class="text-left text-success"><h2><strong><i class="fa fa-inr"></i><?php echo e($settings->currency); ?><?php echo e(Auth::user()->account_bal- $data['amount']); ?></strong></h2></td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="receipt-header receipt-header-mid receipt-footer">
<div class="col-xs-8 col-sm-8 col-md-8 text-left">
<div class="receipt-right">

<a class='btn btn-primary' href="<?php echo e(route('internationaltransfer')); ?>"> New transaction</a>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4">
<div class="receipt-left">
<a class='btn btn-success' href="<?php echo e(route('dashboard')); ?>"> Back to home</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html><?php /**PATH /home/remedycodes/public_html/fin.remedycodes.online/resources/views/user/preview.blade.php ENDPATH**/ ?>