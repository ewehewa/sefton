
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center"><?php echo e($title); ?></h1>
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
                                    <h4 class="card-title">All Virtual Cards</h4>
                                    <a href="<?php echo e(route('admin.cards.pending')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-clock"></i> Pending Applications
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Card Number</th>
                                                <th>User</th>
                                                <th>Card Type</th>
                                                <th>Level</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td>
                                                        <span class="mask-card-number">
                                                            **** **** **** <?php echo e(substr($card->card_number, -4)); ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <?php if($card->user && $card->user->profile_photo_path): ?>
                                                                <img src="<?php echo e(asset('storage/app/public/photos/'.$card->user->profile_photo_path)); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('dash/images/profile/profile.png')); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php endif; ?>
                                                            <div>
                                                                <?php echo e($card->user ? $card->user->name : 'N/A'); ?>

                                                                <div class="small text-muted"><?php echo e($card->user ? $card->user->email : 'N/A'); ?></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e(ucfirst(str_replace('_', ' ', $card->card_type))); ?></td>
                                                    <td><?php echo e(ucfirst($card->card_level)); ?></td>
                                                    <td><?php echo e($card->currency); ?><?php echo e(number_format($card->balance, 2)); ?></td>
                                                    <td>
                                                        <?php if($card->status == 'active'): ?>
                                                            <span class="badge badge-success">Active</span>
                                                        <?php elseif($card->status == 'inactive'): ?>
                                                            <span class="badge badge-warning">Inactive</span>
                                                        <?php elseif($card->status == 'pending'): ?>
                                                            <span class="badge badge-info">Pending</span>
                                                        <?php elseif($card->status == 'blocked'): ?>
                                                            <span class="badge badge-danger">Blocked</span>
                                                        <?php elseif($card->status == 'rejected'): ?>
                                                            <span class="badge badge-danger">Rejected</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-secondary"><?php echo e($card->status); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($card->created_at->format('M d, Y')); ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton<?php echo e($card->id); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($card->id); ?>">
                                                                <a class="dropdown-item" href="<?php echo e(route('admin.cards.view', $card->id)); ?>">
                                                                    <i class="fa fa-eye"></i> View Details
                                                                </a>
                                                                
                                                                <?php if($card->status == 'pending'): ?>
                                                                    <a class="dropdown-item text-success" href="<?php echo e(route('admin.cards.approve', $card->id)); ?>">
                                                                        <i class="fa fa-check-circle"></i> Approve
                                                                    </a>
                                                                    <a class="dropdown-item text-danger" href="<?php echo e(route('admin.cards.reject', $card->id)); ?>">
                                                                        <i class="fa fa-times-circle"></i> Reject
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                                <?php if($card->status == 'active'): ?>
                                                                    <a class="dropdown-item text-warning" href="<?php echo e(route('admin.cards.block', $card->id)); ?>">
                                                                        <i class="fa fa-lock"></i> Block Card
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                                <?php if($card->status == 'blocked' || $card->status == 'inactive'): ?>
                                                                    <a class="dropdown-item text-success" href="<?php echo e(route('admin.cards.unblock', $card->id)); ?>">
                                                                        <i class="fa fa-unlock"></i> Unblock Card
                                                                    </a>
                                                                <?php endif; ?>
                                                                
                                                                <div class="dropdown-divider"></div>
                                                                
                                                                <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#deleteModal<?php echo e($card->id); ?>">
                                                                    <i class="fa fa-trash"></i> Delete Card
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo e($card->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($card->id); ?>" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel<?php echo e($card->id); ?>">Confirm Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this card? This action cannot be undone.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        <a href="<?php echo e(route('admin.cards.delete', $card->id)); ?>" class="btn btn-danger">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="8" class="text-center">No virtual cards found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <?php echo e($cards->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/cards/index.blade.php ENDPATH**/ ?>