
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-center">Grant Application Details</h1>
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
                                    <h4 class="card-title">Application #<?php echo e($application->id); ?></h4>
                                    <div>
                                        <a href="<?php echo e(route('admin.grants.index')); ?>" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-arrow-left"></i> Back to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="card card-stats card-round">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="icon-big text-center">
                                                            <i class="fas fa-user text-primary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-stats">
                                                        <div class="numbers">
                                                            <p class="card-category">Applicant</p>
                                                            <h4 class="card-title"><?php echo e($application->user->name); ?> <?php echo e($application->user->lastname); ?></h4>
                                                            <p class="text-muted"><?php echo e($application->user->email); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="card card-stats card-round">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="icon-big text-center">
                                                            <i class="fas fa-money-bill-wave text-success"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-stats">
                                                        <div class="numbers">
                                                            <p class="card-category">Grant Amount</p>
                                                            <h4 class="card-title">$<?php echo e(number_format($application->requested_amount, 2)); ?></h4>
                                                            <p class="text-muted">Requested Amount</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Application Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <th width="40%">Application Type:</th>
                                                                <td><span class="badge badge-info"><?php echo e(ucfirst($application->application_type)); ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Status:</th>
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
                                                            </tr>
                                                            <tr>
                                                                <th>Submitted On:</th>
                                                                <td><?php echo e($application->created_at->format('M d, Y H:i:s')); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Updated:</th>
                                                                <td><?php echo e($application->updated_at->format('M d, Y H:i:s')); ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <th width="40%">Requested Amount:</th>
                                                                <td>$<?php echo e(number_format($application->requested_amount, 2)); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Approved Amount:</th>
                                                                <td>
                                                                    <?php if($application->approved_amount): ?>
                                                                        $<?php echo e(number_format($application->approved_amount, 2)); ?>

                                                                    <?php else: ?>
                                                                        <span class="text-muted">Not yet approved</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>User's Grant Limit:</th>
                                                                <td>$<?php echo e(number_format($application->user->grant_limit, 2)); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>User's Account Balance:</th>
                                                                <td>$<?php echo e(number_format($application->user->account_bal, 2)); ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <h6 class="font-weight-bold">Funding Categories:</h6>
                                                        <div class="d-flex flex-wrap">
                                                            <?php if($application->program_funding): ?>
                                                                <span class="badge badge-primary mr-2 mb-2 p-2">Program Funding</span>
                                                            <?php endif; ?>
                                                            <?php if($application->equipment_funding): ?>
                                                                <span class="badge badge-info mr-2 mb-2 p-2">Equipment/Capacity Funding</span>
                                                            <?php endif; ?>
                                                            <?php if($application->research_funding): ?>
                                                                <span class="badge badge-success mr-2 mb-2 p-2">Research Funding</span>
                                                            <?php endif; ?>
                                                            <?php if($application->community_outreach): ?>
                                                                <span class="badge badge-warning mr-2 mb-2 p-2">Community Outreach</span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php if($application->application_type == 'company'): ?>
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <h6 class="font-weight-bold">Company Information:</h6>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Legal Name:</th>
                                                                <td><?php echo e($application->legal_name); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>EIN/Tax ID:</th>
                                                                <td><?php echo e($application->ein); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Mailing Address:</th>
                                                                <td><?php echo e($application->mailing_address); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Incorporation Date:</th>
                                                                <td><?php echo e($application->incorporation_date ? $application->incorporation_date->format('M d, Y') : 'N/A'); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Mission Statement:</th>
                                                                <td><?php echo e($application->mission_statement); ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <h6 class="font-weight-bold">Notes & Application History:</h6>
                                                        <div class="p-3 bg-light rounded">
                                                            <?php if(trim($application->notes)): ?>
                                                                <?php echo nl2br(e($application->notes)); ?>

                                                            <?php else: ?>
                                                                <div class="text-center text-muted">
                                                                    <i class="fas fa-info-circle"></i> No notes have been added to this application.
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Admin Actions</h5>
                                            </div>
                                            <div class="card-body">
                                                <?php if($application->status == 'processing'): ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card border-success">
                                                            <div class="card-header bg-success text-white">
                                                                <h5 class="mb-0">Approve Application</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="<?php echo e(route('admin.grants.approve', $application->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="form-group">
                                                                        <label for="approved_amount">Approved Amount ($)</label>
                                                                        <input type="number" class="form-control" id="approved_amount" name="approved_amount" step="0.01" min="0" max="<?php echo e($application->user->grant_limit); ?>" value="<?php echo e($application->user->grant_limit); ?>" required>
                                                                        <small class="form-text text-muted">Maximum amount: $<?php echo e(number_format($application->user->grant_limit, 2)); ?></small>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="admin_note">Admin Note (Optional)</label>
                                                                        <textarea class="form-control" id="admin_note" name="admin_note" rows="3"></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success">Approve Application</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="card border-danger">
                                                            <div class="card-header bg-danger text-white">
                                                                <h5 class="mb-0">Reject Application</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="<?php echo e(route('admin.grants.reject', $application->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="form-group">
                                                                        <label for="rejection_reason">Rejection Reason</label>
                                                                        <textarea class="form-control" id="rejection_reason" name="rejection_reason" rows="3" required></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-danger">Reject Application</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php elseif($application->status == 'approved'): ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-primary">
                                                            <div class="card-header bg-primary text-white">
                                                                <h5 class="mb-0">Disburse Funds</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="alert alert-info">
                                                                    <i class="fas fa-info-circle"></i> Disbursing funds will add $<?php echo e(number_format($application->approved_amount, 2)); ?> to the user's account balance and mark this application as disbursed.
                                                                </div>
                                                                <form action="<?php echo e(route('admin.grants.disburse', $application->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <button type="submit" class="btn btn-primary">Disburse Funds to User Account</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php elseif($application->status == 'disbursed'): ?>
                                                <div class="alert alert-success">
                                                    <i class="fas fa-check-circle"></i> Funds have been disbursed to the user's account on <?php echo e($application->disbursed_at ? $application->disbursed_at->format('M d, Y H:i:s') : $application->updated_at->format('M d, Y H:i:s')); ?>.
                                                </div>
                                                <?php elseif($application->status == 'rejected'): ?>
                                                <div class="alert alert-danger">
                                                    <i class="fas fa-times-circle"></i> This application has been rejected.
                                                </div>
                                                <?php endif; ?>
                                                
                                                <div class="mt-4">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                                        <i class="fa fa-trash"></i> Delete Application
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Add Admin Note</h5>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?php echo e(route('admin.grants.add-note', $application->id)); ?>" method="POST" class="mb-4">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="admin_note">Add Note</label>
                                                        <textarea class="form-control" id="admin_note" name="admin_note" rows="3" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Note</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
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
            </div>
        </div>
    </div>

<style>
    /* Styling for notes */
    .notes-container {
        max-height: 400px;
        overflow-y: auto;
        font-family: monospace;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elitemaxpro/fintec.elitemaxpro.click/resources/views/admin/grant/view.blade.php ENDPATH**/ ?>