<?php
    if (Auth('admin')->User()->dashboard_style == 'light') {
        $text = 'dark';
        $bg = 'light';
    } else {
        $bg = 'dark';
        $text = 'light';
    }
?>
<div>
    <div class="main-panel">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?>"><?php echo e($settings->site_name); ?> users list</h1>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <div class="mb-5 row">
                    <div class="col-md-12 ">
                        <div class="card shadow p-4 ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 d-flex pe-0">
                                        <div>
                                            <form>
                                                <div class="input-group">
                                                    <input wire:model.debounce.500ms='searchvalue'
                                                        class="form-control form-control-sm shadow-none search  text-<?php echo e($text); ?>"
                                                        type="search" placeholder="name, username or email"
                                                        aria-label="search" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <?php if($checkrecord): ?>
                                            <div>
                                                <div class="d-flex">
                                                    <select wire:model='action'
                                                        class="form-control  text-<?php echo e($text); ?> form-select form-select-sm"
                                                        aria-label="Bulk actions">
                                                        <option value="Delete">Delete</option>
                                                        <option value="Clear">Clear Account</option>
                                                    </select>
                                                    <button class="btn btn-danger btn-sm ms-2"
                                                        wire:click='delsystemuser' type="button">Apply</button>
                                                    &nbsp;&nbsp;
                                                    <button class="btn btn-info btn-sm " data-toggle="modal"
                                                        data-target="#TradingModal" type="button">
                                                        <span class="fas fa-coins"
                                                            data-fa-transform="shrink-3 down-2"></span>
                                                        <span class="d-none d-sm-inline-block ms-1">Add ROI</span>
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <button data-toggle="modal" data-target="#topupModal"
                                                        class="btn btn-info btn-sm " type="button">
                                                        <span class="fas fa-plus"
                                                            data-fa-transform="shrink-3 down-2"></span>
                                                        <span class="d-none d-sm-inline-block ms-1">Topup</span>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div>
                                                

                                                <a class="btn btn-info btn-sm " href="<?php echo e(route('emailservices')); ?>">
                                                    <span class="fas fa-envelope"
                                                        data-fa-transform="shrink-3 down-2"></span>
                                                    <span class="d-none d-sm-inline-block ms-1">Send Message</span>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" data-example-id="hoverable-table">
                                    <table class="table table-hover text-<?php echo e($text); ?>">
                                        <thead>
                                            <tr>
                                                <th class="white-space-nowrap">
                                                    <input type="checkbox" wire:model='selectPage' />
                                                </th>
                                                <th>Client Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Date registered</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="userslisttbl">

                                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td class="align-middle">
                                                        <input type="checkbox" wire:model='checkrecord'
                                                            value="<?php echo e($user->id); ?>" />
                                                    </td>
                                                    <td><img alt="" src="<?php echo e($settings->site_address); ?>/storage/app/public/photos/<?php echo e($user->profile_photo_path); ?>" width="35" height="35" style='border-radius: 50%;'><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->username); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->phone); ?></td>
                                                    <td>
                                                        <?php if($user->status == 'active'): ?>
                                                            <span
                                                                class='badge badge-success'><?php echo e($user->status); ?></span>
                                                        <?php else: ?>
                                                            <span class='badge badge-danger'><?php echo e($user->status); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e($user->created_at->diffForHumans()); ?>

                                                    </td>
                                                    <td>
                                                        <a class='btn btn-secondary btn-sm'
                                                            href="<?php echo e(route('viewuser', $user->id)); ?>" role='button'>
                                                            Manage
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <td colspan="9">
                                                    No Data Available
                                                </td>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer  py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <select wire:model='pagenum' class="form-control  text-<?php echo e($text); ?>">
                                            <option>10</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                            <option>200</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select wire:model='orderby' class="form-control  text-<?php echo e($text); ?>">
                                            <option value="id">id</option>
                                            <option value="name">Name</option>
                                            <option value="email">Email</option>
                                            <option value="created_at">Sign up date</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select wire:model='orderdirection'
                                            class="form-control  text-<?php echo e($text); ?>">
                                            <option value="desc">Descending</option>
                                            <option value="asc">Ascending</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <?php echo $users->links(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" tabindex="-1" id="adduser" aria-h6ledby="exampleModalh6" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="mb-2 d-inline text-<?php echo e($text); ?>">Add User</h3>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal"
                        aria-h6="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div>
                        <form method="POST" wire:submit.prevent='saveUser'>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h6 class="text-<?php echo e($text); ?>">Username</h6>
                                    <input type="text" id="usernameinput"
                                        class="form-control  text-<?php echo e($text); ?>" name="username"
                                        wire:model.defer='username' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-<?php echo e($text); ?>">Fullname</h6>
                                    <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                        name="name" wire:model.defer='fullname' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-<?php echo e($text); ?>">Email</h6>
                                    <input type="email" class="form-control  text-<?php echo e($text); ?>"
                                        name="email" wire:model.defer='email' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-<?php echo e($text); ?>">Password</h6>
                                    <input type="text" class="form-control  text-<?php echo e($text); ?>"
                                        name="password" wire:model.defer='password' required>
                                </div>
                            </div>
                            <button type="submit" class="px-4 btn btn-primary">Add User</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

    <!-- /Trading History Modal -->

    <div id="TradingModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Add ROI to selected users<?php echo e($user->l_name); ?>

                    </h4>
                    <button type="button" class="close text-<?php echo e($text); ?>"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body ">
                    <form role="form" method="post" wire:submit.prevent='addRoi'>
                        <div class="form-group">
                            <h5 class=" text-<?php echo e($text); ?>">Select Investment Plan</h5>
                            <select class="form-control  text-<?php echo e($text); ?>" name="plan"
                                wire:model.defer='plan' required>
                                <option></option>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($plan->id); ?>"><?php echo e($plan->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class=" text-<?php echo e($text); ?>">Date</h5>
                            <input type="date" wire:model.defer='datecreated'
                                class="form-control  text-<?php echo e($text); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn " value="Add History">
                        </div>
                        <div class="form-group">
                            <small class="text-<?php echo e($text); ?>">The system will calculate the ROI base on users
                                invested amount and topup amount specified in this selected plan settings <br>
                                <strong>Also Note the plan must be using % as it's topup-type else the calculations will
                                    be wrong.</strong> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /send a single user email Modal -->

    <!-- Top Up Modal -->
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Credit/Debit Accounts.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body ">
                    <form method="post" wire:submit.prevent='topup'>
                        <div class="form-group">
                            <input class="form-control  text-<?php echo e($text); ?>" placeholder="Enter amount"
                                type="number" step="any" name="amount" wire:model.defer='topamount' required>
                            <small><?php echo e($topamount); ?></small>
                        </div>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Select where to Credit/Debit</h5>
                            <select class="form-control  text-<?php echo e($text); ?>" wire:model.defer='topcolumn'
                                name="type" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Bonus">Bonus</option>
                                <option value="balance">Account Balance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class="text-<?php echo e($text); ?>">Select credit to add, debit to subtract.</h5>
                            <select class="form-control  text-<?php echo e($text); ?>" wire:model.defer='toptype'
                                name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn " value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit for a plan Modal -->
</div>
<?php /**PATH C:\xampp\htdocs\remedybank\resources\views/livewire/admin/manage-users.blade.php ENDPATH**/ ?>