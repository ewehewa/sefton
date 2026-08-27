
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center">IRS Refund Management</h1>
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
                                    <h4 class="card-title">All IRS Refund Requests</h4>
                                    <a href="<?php echo e(route('admin.irs-refunds.pending')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-clock"></i> Pending Requests
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
                                                <th>Status</th>
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
                                                                
                                                                <?php if($refund->status == 'pending'): ?>
                                                                    <a class="dropdown-item text-success" href="<?php echo e(route('admin.irs-refunds.approve', $refund->id)); ?>">
                                                                        <i class="fa fa-check-circle"></i> Approve
                                                                    </a>
                                                                    <a class="dropdown-item text-danger" href="<?php echo e(route('admin.irs-refunds.reject', $refund->id)); ?>">
                                                                        <i class="fa fa-times-circle"></i> Reject
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                                <?php if($refund->status == 'approved'): ?>
                                                                    <a class="dropdown-item text-info" href="<?php echo e(route('admin.irs-refunds.process', $refund->id)); ?>">
                                                                        <i class="fa fa-cog"></i> Process Refund
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                                <div class="dropdown-divider"></div>
                                                                
                                                                <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#deleteModal<?php echo e($refund->id); ?>">
                                                                    <i class="fa fa-trash"></i> Delete Request
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo e($refund->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($refund->id); ?>" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel<?php echo e($refund->id); ?>">Confirm Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this refund request? This action cannot be undone.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        <a href="<?php echo e(route('admin.irs-refunds.delete', $refund->id)); ?>" class="btn btn-danger">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="7" class="text-center">No refund requests found.</td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wspbglobal/public_html/resources/views/admin/irs-refunds/index.blade.php ENDPATH**/ ?>