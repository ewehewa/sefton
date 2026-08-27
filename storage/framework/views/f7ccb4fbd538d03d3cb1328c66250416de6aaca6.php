
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
                                    <h4 class="card-title">Pending Card Applications</h4>
                                    <a href="<?php echo e(route('admin.cards')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-credit-card"></i> All Cards
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Application ID</th>
                                                <th>User</th>
                                                <th>Card Type</th>
                                                <th>Level</th>
                                                <th>Applied On</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td>#<?php echo e($card->id); ?></td>
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
                                                    <td><?php echo e($card->created_at->format('M d, Y h:i A')); ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo e(route('admin.cards.view', $card->id)); ?>" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-eye"></i> View
                                                            </a>
                                                            <a href="<?php echo e(route('admin.cards.approve', $card->id)); ?>" class="btn btn-success btn-sm">
                                                                <i class="fa fa-check-circle"></i> Approve
                                                            </a>
                                                            <a href="<?php echo e(route('admin.cards.reject', $card->id)); ?>" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-times-circle"></i> Reject
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No pending card applications found.</td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home8/globalch/public_html/auth/resources/views/admin/cards/pending.blade.php ENDPATH**/ ?>