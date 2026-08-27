
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Grant Applications</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="<?php echo e(url('/admin/dashboard')); ?>">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Grant Applications</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">All Grant Applications</h4>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card card-stats card-primary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Processing</p>
                                                <h4 class="card-title"><?php echo e($applications->where('status', 'processing')->count()); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('admin.grants.pending')); ?>" class="card-footer text-center text-white">
                                    <span>View All</span>
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-stats card-success card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Approved</p>
                                                <h4 class="card-title"><?php echo e($applications->where('status', 'approved')->count()); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('admin.grants.approved')); ?>" class="card-footer text-center text-white">
                                    <span>View All</span>
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-stats card-danger card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-times-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Rejected</p>
                                                <h4 class="card-title"><?php echo e($applications->where('status', 'rejected')->count()); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('admin.grants.rejected')); ?>" class="card-footer text-center text-white">
                                    <span>View All</span>
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-money-bill-wave"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Disbursed</p>
                                                <h4 class="card-title"><?php echo e($applications->where('status', 'disbursed')->count()); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('admin.grants.disbursed')); ?>" class="card-footer text-center text-white">
                                    <span>View All</span>
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="grant-applications" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Requested</th>
                                    <th>Approved</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($application->id); ?></td>
                                    <td><?php echo e($application->user->name); ?> <?php echo e($application->user->lastname); ?></td>
                                    <td><?php echo e(ucfirst($application->application_type)); ?></td>
                                    <td>
                                        <?php if($application->status == 'processing'): ?>
                                            <span class="badge badge-primary">Processing</span>
                                        <?php elseif($application->status == 'approved'): ?>
                                            <span class="badge badge-success">Approved</span>
                                        <?php elseif($application->status == 'rejected'): ?>
                                            <span class="badge badge-danger">Rejected</span>
                                        <?php elseif($application->status == 'disbursed'): ?>
                                            <span class="badge badge-secondary">Disbursed</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>$<?php echo e(number_format($application->requested_amount, 2)); ?></td>
                                    <td>
                                        <?php if($application->approved_amount): ?>
                                            $<?php echo e(number_format($application->approved_amount, 2)); ?>

                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($application->created_at->format('M d, Y')); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('admin.grants.view', $application->id)); ?>" class="btn btn-sm btn-primary">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo e($application->id); ?>)">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <?php echo e($applications->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#grant-applications').DataTable({
            "pageLength": 25,
            "order": [[ 0, "desc" ]],
            "searching": true,
            "paging": false
        });
    });
    
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this application? This action cannot be undone.')) {
            window.location.href = "<?php echo e(url('admin/grants/delete')); ?>/" + id;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/grant/index.blade.php ENDPATH**/ ?>