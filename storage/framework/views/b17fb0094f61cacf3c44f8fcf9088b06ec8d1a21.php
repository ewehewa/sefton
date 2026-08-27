
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center">Disbursed Grant Applications</h1>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-3 shadow">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Disbursed Applications</h4>
                                    <div>
                                        <a href="<?php echo e(route('admin.grants.index')); ?>" class="btn btn-secondary btn-sm mr-2">
                                            <i class="fa fa-list"></i> All Applications
                                        </a>
                                        <a href="<?php echo e(route('admin.grants.pending')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-clock"></i> Processing
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Type</th>
                                                <th>Requested</th>
                                                <th>Disbursed</th>
                                                <th>Disbursed On</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($application->id); ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <?php if($application->user && $application->user->profile_photo_path): ?>
                                                                <img src="<?php echo e(asset('storage/app/public/photos/'.$application->user->profile_photo_path)); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('dash/images/profile/profile.png')); ?>" alt="profile" class="mr-2 rounded-circle" style="width: 30px; height: 30px;">
                                                            <?php endif; ?>
                                                            <div>
                                                                <span class="font-weight-bold"><?php echo e($application->user->name); ?> <?php echo e($application->user->lastname); ?></span>
                                                                <br>
                                                                <small class="text-muted"><?php echo e($application->user->email); ?></small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info"><?php echo e(ucfirst($application->application_type)); ?></span>
                                                    </td>
                                                    <td>$<?php echo e(number_format($application->requested_amount, 2)); ?></td>
                                                    <td>$<?php echo e(number_format($application->approved_amount, 2)); ?></td>
                                                    <td><?php echo e($application->disbursed_at ? $application->disbursed_at->format('M d, Y') : $application->updated_at->format('M d, Y')); ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton<?php echo e($application->id); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($application->id); ?>">
                                                                <a class="dropdown-item" href="<?php echo e(route('admin.grants.view', $application->id)); ?>">
                                                                    <i class="fa fa-eye"></i> View Details
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#deleteModal<?php echo e($application->id); ?>">
                                                                    <i class="fa fa-trash"></i> Delete Application
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo e($application->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($application->id); ?>" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel<?php echo e($application->id); ?>">Confirm Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this grant application? This action cannot be undone.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        <a href="<?php echo e(route('admin.grants.delete', $application->id)); ?>" class="btn btn-danger">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="7" class="text-center">No disbursed applications found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <?php echo e($applications->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aureviatrust/public_html/resources/views/admin/grant/disbursed.blade.php ENDPATH**/ ?>