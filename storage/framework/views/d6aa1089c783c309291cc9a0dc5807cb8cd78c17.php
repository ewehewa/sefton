
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center">Pending IRS Refund Requests</h1>
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
                                    <h4 class="card-title">Pending Refund Requests</h4>
                                    <a href="<?php echo e(route('admin.irs-refunds.index')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-list"></i> All Requests
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Reference ID</th>
                                                <th>User</th>
                                                <th>Amount</th>
                                                <th>Filing ID</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($refund->id); ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <?php if($refund->user && $refund->user->profile_photo_path): ?>
                                                                <img src="<?php echo e(asset('storage/app/public/photos/'.$refund->user->profile_photo_path)); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('dash/images/profile/profile.png')); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php endif; ?>
                                                            <div>
                                                                <?php echo e($refund->user ? $refund->user->name : 'N/A'); ?>

                                                                <div class="small text-muted"><?php echo e($refund->user ? $refund->user->email : 'N/A'); ?></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$<?php echo e(number_format($refund->amount, 2)); ?></td>
                                                    <td><?php echo e($refund->filing_id); ?></td>
                                                    <td><?php echo e($refund->created_at->format('M d, Y')); ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton<?php echo e($refund->id); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($refund->id); ?>">
                                                                <a class="dropdown-item" href="<?php echo e(route('admin.irs-refunds.view', $refund->id)); ?>">
                                                                    <i class="fa fa-eye"></i> View Details
                                                                </a>
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('admin.irs-refunds.approve', $refund->id)); ?>">
                                                                    <i class="fa fa-check-circle"></i> Approve
                                                                </a>
                                                                <a class="dropdown-item text-danger" href="<?php echo e(route('admin.irs-refunds.reject', $refund->id)); ?>">
                                                                    <i class="fa fa-times-circle"></i> Reject
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No pending refund requests found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <?php echo e($refunds->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/admin/irs-refunds/pending.blade.php ENDPATH**/ ?>