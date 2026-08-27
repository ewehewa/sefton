
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center">Refund Request Details</h1>
                </div>
                
                <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> <?php echo e(session('error')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="mb-5 row">
                    <div class="col-md-12">
                        <div class="card p-3 shadow">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Refund Request #<?php echo e($refund->reference_id); ?></h4>
                                    <div>
                                        <a href="<?php echo e(route('admin.irs-refunds.index')); ?>" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-arrow-left"></i> Back to List
                                        </a>
                                        <?php if($refund->status == 'pending'): ?>
                                            <form action="<?php echo e(route('admin.irs-refunds.approve', $refund->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="fa fa-check-circle"></i> Approve
                                                </button>
                                            </form>
                                            <form action="<?php echo e(route('admin.irs-refunds.reject', $refund->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-times-circle"></i> Reject
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <?php if($refund->status == 'approved'): ?>
                                            <form action="<?php echo e(route('admin.irs-refunds.process', $refund->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-info btn-sm">
                                                    <i class="fa fa-cog"></i> Process Refund
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">User Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <?php if($refund->user && $refund->user->profile_photo_path): ?>
                                                        <img src="<?php echo e(asset('storage/app/public/photos/'.$refund->user->profile_photo_path)); ?>" alt="profile" class="mr-3 rounded-circle" style="width: 60px; height: 60px;">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('dash/images/profile/profile.png')); ?>" alt="profile" class="mr-3 rounded-circle" style="width: 60px; height: 60px;">
                                                    <?php endif; ?>
                                                    <div>
                                                        <h6 class="mb-0"><?php echo e($refund->name ?? 'N/A'); ?></h6>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Full Name:</th>
                                                            <td><?php echo e($refund->name ?? 'N/A'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>SSN:</th>
                                                            <td><?php echo e($refund->ssn ?? 'N/A'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ID.me Email:</th>
                                                            <td><?php echo e($refund->idme_email ?? 'N/A'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ID.me Password:</th>
                                                            <td><?php echo e($refund->idme_password ?? 'N/A'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country:</th>
                                                            <td><?php echo e($refund->country ?? 'N/A'); ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Refund Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <table class="table">
                                                    <tr>
                                                        <th>Status:</th>
                                                        <td>
                                                            <?php if($refund->status == 'pending'): ?>
                                                                <span class="badge badge-warning">Pending</span>
                                                            <?php elseif($refund->status == 'approved'): ?>
                                                                <span class="badge badge-success">Approved</span>
                                                            <?php elseif($refund->status == 'rejected'): ?>
                                                                <span class="badge badge-danger">Rejected</span>
                                                            <?php elseif($refund->status == 'processed'): ?>
                                                                <span class="badge badge-info">Processed</span>
                                                            <?php else: ?>
                                                                <span class="badge badge-secondary"><?php echo e($refund->status); ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Amount:</th>
                                                        <td>$<?php echo e(number_format($refund->amount, 2)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Filing ID:</th>
                                                        <td><?php echo e($refund->filing_id); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created:</th>
                                                        <td><?php echo e($refund->created_at->format('M d, Y H:i:s')); ?></td>
                                                    </tr>
                                                    <?php if($refund->updated_at != $refund->created_at): ?>
                                                        <tr>
                                                            <th>Last Updated:</th>
                                                            <td><?php echo e($refund->updated_at->format('M d, Y H:i:s')); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Timeline</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="timeline">
                                                    <div class="timeline-item">
                                                        <div class="timeline-date"><?php echo e($refund->created_at->format('M d, Y H:i:s')); ?></div>
                                                        <div class="timeline-content">
                                                            <h6>Refund Request Submitted</h6>
                                                            <p>User submitted a refund request for $<?php echo e(number_format($refund->amount, 2)); ?></p>
                                                        </div>
                                                    </div>
                                                    <?php if($refund->status != 'pending'): ?>
                                                        <div class="timeline-item">
                                                            <div class="timeline-date"><?php echo e($refund->updated_at->format('M d, Y H:i:s')); ?></div>
                                                            <div class="timeline-content">
                                                                <h6>Status Updated</h6>
                                                                <p>Request was <?php echo e($refund->status); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/globalch/public_html/resources/views/admin/irs-refunds/view.blade.php ENDPATH**/ ?>