
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

                <div class="row">
                    <div class="col-md-5">
                        <div class="card p-3 shadow">
                            <div class="card-header">
                                <h4 class="card-title">Card Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="card mb-4 text-white" style="background-image: linear-gradient(45deg, #7e57c2, #5e35b1); border-radius: 15px;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <img src="<?php echo e(asset('dash/images/cards/chip.png')); ?>" alt="Card Chip" height="40">
                                            </div>
                                            <div>
                                                <h5 class="text-white mb-0"><?php echo e(ucfirst($card->card_level)); ?></h5>
                                            </div>
                                        </div>
                                        <h5 class="text-white mb-3">
                                            **** **** **** <?php echo e(substr($card->card_number, -4)); ?>

                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <small class="text-white-50">CARD HOLDER</small>
                                                <p class="text-white mb-0"><?php echo e($card->user->name); ?></p>
                                            </div>
                                            <div>
                                                <small class="text-white-50">EXPIRES</small>
                                                <p class="text-white mb-0"><?php echo e($card->expiry_month); ?>/<?php echo e($card->expiry_year); ?></p>
                                            </div>
                                            <div>
                                                <?php if($card->card_type == 'visa' || strpos($card->card_type, 'visa') !== false): ?>
                                                    <img src="<?php echo e(asset('dash/images/cards/visa.png')); ?>" alt="Visa Card" height="30">
                                                <?php elseif($card->card_type == 'mastercard' || strpos($card->card_type, 'mastercard') !== false): ?>
                                                    <img src="<?php echo e(asset('dash/images/cards/mastercard.png')); ?>" alt="Mastercard" height="30">
                                                <?php elseif($card->card_type == 'amex' || strpos($card->card_type, 'american_express') !== false): ?>
                                                    <img src="<?php echo e(asset('dash/images/cards/amex.png')); ?>" alt="American Express" height="30">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('dash/images/cards/visa.png')); ?>" alt="Card" height="30">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Card ID</td>
                                                <td><?php echo e($card->id); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Card Number</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2">**** **** **** <?php echo e(substr($card->card_number, -4)); ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Card Type</td>
                                                <td><?php echo e(ucfirst(str_replace('_', ' ', $card->card_type))); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Card Level</td>
                                                <td><?php echo e(ucfirst($card->card_level)); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Balance</td>
                                                <td>
                                                    <h4 class="text-primary mb-0"><?php echo e($card->currency); ?><?php echo e(number_format($card->balance, 2)); ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Status</td>
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
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Created On</td>
                                                <td><?php echo e($card->created_at->format('M d, Y h:i A')); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Last Updated</td>
                                                <td><?php echo e($card->updated_at->format('M d, Y h:i A')); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <a href="<?php echo e(route('admin.cards')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-arrow-left"></i> Back to Cards
                                        </a>
                                    </div>
                                    <div>
                                        <?php if($card->status == 'pending'): ?>
                                            <a href="<?php echo e(route('admin.cards.approve', $card->id)); ?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-check-circle"></i> Approve
                                            </a>
                                            <a href="<?php echo e(route('admin.cards.reject', $card->id)); ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-times-circle"></i> Reject
                                            </a>
                                        <?php elseif($card->status == 'active'): ?>
                                            <a href="<?php echo e(route('admin.cards.block', $card->id)); ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-lock"></i> Block Card
                                            </a>
                                        <?php elseif($card->status == 'blocked' || $card->status == 'inactive'): ?>
                                            <a href="<?php echo e(route('admin.cards.unblock', $card->id)); ?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-unlock"></i> Unblock Card
                                            </a>
                                        <?php endif; ?>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fa fa-trash"></i> Delete Card
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Information -->
                        <div class="card p-3 shadow mt-4">
                            <div class="card-header">
                                <h4 class="card-title">Cardholder Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <?php if($card->user && $card->user->profile_photo_path): ?>
                                        <img src="<?php echo e(asset('storage/app/public/photos/'.$card->user->profile_photo_path)); ?>" alt="profile" class="mr-3 rounded-circle" style="width: 60px; height: 60px;">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('dash/images/profile/profile.png')); ?>" alt="profile" class="mr-3 rounded-circle" style="width: 60px; height: 60px;">
                                    <?php endif; ?>
                                    <div>
                                        <h5 class="mb-0"><?php echo e($card->user->name); ?></h5>
                                        <p class="text-muted mb-0"><?php echo e($card->user->email); ?></p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Account ID</td>
                                                <td><?php echo e($card->user->id); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Phone</td>
                                                <td><?php echo e($card->user->phone ?? 'N/A'); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Address</td>
                                                <td><?php echo e($card->user->address ?? 'N/A'); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Joined On</td>
                                                <td><?php echo e($card->user->created_at->format('M d, Y')); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="<?php echo e(route('viewuser', $card->user->id)); ?>" class="btn btn-primary btn-block">
                                    <i class="fa fa-user"></i> View User Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <!-- Card Balance Management -->
                        <div class="card p-3 shadow">
                            <div class="card-header">
                                <h4 class="card-title">Balance Management</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card bg-success text-white mb-4">
                                            <div class="card-body">
                                                <h5 class="mb-1">Top Up Card</h5>
                                                <form action="<?php echo e(route('admin.cards.topup', $card->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="amount">Amount (<?php echo e($card->currency); ?>)</label>
                                                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" min="1" step="0.01" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description (Optional)</label>
                                                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                                                    </div>
                                                    <button type="submit" class="btn btn-light btn-block">
                                                        <i class="fa fa-arrow-up"></i> Top Up
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-danger text-white mb-4">
                                            <div class="card-body">
                                                <h5 class="mb-1">Deduct from Card</h5>
                                                <form action="<?php echo e(route('admin.cards.deduct', $card->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="deduct_amount">Amount (<?php echo e($card->currency); ?>)</label>
                                                        <input type="number" class="form-control" id="deduct_amount" name="amount" placeholder="Enter amount" min="1" step="0.01" max="<?php echo e($card->balance); ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deduct_description">Description (Optional)</label>
                                                        <input type="text" class="form-control" id="deduct_description" name="description" placeholder="Enter description">
                                                    </div>
                                                    <button type="submit" class="btn btn-light btn-block">
                                                        <i class="fa fa-arrow-down"></i> Deduct
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Transaction History -->
                        <div class="card p-3 shadow mt-4">
                            <div class="card-header">
                                <h4 class="card-title">Transaction History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Merchant</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($transaction->transaction_reference); ?></td>
                                                    <td>
                                                        <?php if($transaction->transaction_type == 'purchase'): ?>
                                                            <span class="badge badge-info">Purchase</span>
                                                        <?php elseif($transaction->transaction_type == 'topup'): ?>
                                                            <span class="badge badge-success">Top-up</span>
                                                        <?php elseif($transaction->transaction_type == 'deduction'): ?>
                                                            <span class="badge badge-warning">Deduction</span>
                                                        <?php elseif($transaction->transaction_type == 'refund'): ?>
                                                            <span class="badge badge-primary">Refund</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-secondary"><?php echo e(ucfirst($transaction->transaction_type)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($transaction->amount > 0): ?>
                                                            <span class="text-success">
                                                                +<?php echo e($transaction->currency); ?><?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                                            </span>
                                                        <?php else: ?>
                                                            <span class="text-danger">
                                                                -<?php echo e($transaction->currency); ?><?php echo e(number_format(abs($transaction->amount), 2)); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($transaction->merchant_name); ?></td>
                                                    <td>
                                                        <?php if($transaction->status == 'completed'): ?>
                                                            <span class="badge badge-success">Completed</span>
                                                        <?php elseif($transaction->status == 'pending'): ?>
                                                            <span class="badge badge-warning">Pending</span>
                                                        <?php elseif($transaction->status == 'failed'): ?>
                                                            <span class="badge badge-danger">Failed</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-secondary"><?php echo e(ucfirst($transaction->status)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($transaction->transaction_date->format('M d, Y h:i A')); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No transactions found for this card.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <?php echo e($transactions->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Delete Card Modal -->
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
                    <p>Are you sure you want to delete this card? This action cannot be undone and will also delete all associated transaction records.</p>
                    <div class="alert alert-danger">
                        <strong>Warning:</strong> This will permanently remove the card and all its transaction history from the system.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo e(route('admin.cards.delete', $card->id)); ?>" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Delete Permanently
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/globalch/public_html/resources/views/admin/cards/view.blade.php ENDPATH**/ ?>