
<?php $__env->startSection('title', 'Appearance Settings'); ?>

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

                <?php if(session('message')): ?>
                    <div class="alert alert-<?php echo e(session('type')); ?> alert-dismissible fade show" role="alert">
                        <strong><?php echo e(session('type') == 'success' ? 'Success!' : 'Error!'); ?></strong> <?php echo e(session('message')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-5">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Appearance Preview</h4>
                            </div>
                            <div class="card-body">
                                <!-- Preview Card -->
                                <div class="card mb-4 text-white" style="background: linear-gradient(<?php echo e($appearanceSettings->gradient_direction); ?>, <?php echo e($appearanceSettings->primary_color); ?>, <?php echo e($appearanceSettings->primary_color_700); ?>); border-radius: 15px;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <i class="fa fa-palette fa-2x"></i>
                                            </div>
                                            <div>
                                                <h5 class="text-white mb-0">Theme Preview</h5>
                                            </div>
                                        </div>
                                        <h5 class="text-white mb-3">
                                            Primary Color: <?php echo e($appearanceSettings->primary_color); ?>

                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <small class="text-white-50">LAST UPDATED</small>
                                                <p class="text-white mb-0"><?php echo e($appearanceSettings->updated_at->format('M d, Y h:i A')); ?></p>
                                            </div>
                                            <div>
                                                <small class="text-white-50">CREATED</small>
                                                <p class="text-white mb-0"><?php echo e($appearanceSettings->created_at->format('M d, Y')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Color Swatches -->
                                <h5 class="mb-3">Color Palette</h5>
                                <div class="row mb-4">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->primary_color); ?>; border-radius: 5px;"></div>
                                                <small>Primary</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->secondary_color); ?>; border-radius: 5px;"></div>
                                                <small>Secondary</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->accent_color); ?>; border-radius: 5px;"></div>
                                                <small>Accent</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->background_color); ?>; border-radius: 5px; border: 1px solid #eee;"></div>
                                                <small>Background</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->card_color); ?>; border-radius: 5px; border: 1px solid #eee;"></div>
                                                <small>Card</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->foreground_color); ?>; border-radius: 5px;"></div>
                                                <small>Foreground</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Configuration Summary -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Gradient</td>
                                                <td>
                                                    <?php if($appearanceSettings->use_gradient): ?>
                                                        <span class="badge badge-success">Enabled</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Disabled</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Gradient Direction</td>
                                                <td><?php echo e(ucwords(str_replace(['to ', '_'], ['', ' '], $appearanceSettings->gradient_direction))); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Animations</td>
                                                <td>
                                                    <?php if(!$appearanceSettings->disable_animations): ?>
                                                        <span class="badge badge-success">Enabled</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Disabled</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-arrow-left"></i> Back to Dashboard
                                        </a>
                                    </div>
                                    <div>
                                        <a href="<?php echo e(route('admin.appearance.reset')); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to reset all appearance settings to default?');">
                                            <i class="fa fa-sync"></i> Reset to Default
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CSS Preview Card -->
                        <div class="card shadow mt-4">
                            <div class="card-header">
                                <h4 class="card-title">Custom CSS & Notes</h4>
                            </div>
                            <div class="card-body">
                                <?php if($appearanceSettings->custom_css): ?>
                                    <div class="alert alert-info">
                                        <h5><i class="fa fa-info-circle mr-2"></i> Custom CSS Enabled</h5>
                                        <p class="mb-0">The following custom CSS is currently applied to your site:</p>
                                    </div>
                                    <div class="code-preview p-3 bg-light rounded">
                                        <pre style="max-height: 200px; overflow-y: auto;"><?php echo e($appearanceSettings->custom_css); ?></pre>
                                    </div>
                                <?php else: ?>
                                    <div class="alert alert-secondary">
                                        <h5><i class="fa fa-info-circle mr-2"></i> No Custom CSS</h5>
                                        <p class="mb-0">No custom CSS has been added yet. You can add custom CSS in the form on the right.</p>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="mt-3">
                                    <h5>Admin Notes</h5>
                                    <p class="text-muted"><?php echo e($appearanceSettings->notes ?: 'No admin notes available.'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <!-- Appearance Settings Form -->
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Appearance Settings</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.appearance.update')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    
                                    <!-- Primary Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Primary Colors</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="primary_color">Primary Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="primary_color" name="primary_color" value="<?php echo e($appearanceSettings->primary_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="primary_color_foreground">Primary Foreground</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="primary_color_foreground" name="primary_color_foreground" value="<?php echo e($appearanceSettings->primary_color_foreground); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_foreground); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="primary_color_50">Primary 50</label>
                                                        <input type="color" class="form-control" id="primary_color_50" name="primary_color_50" value="<?php echo e($appearanceSettings->primary_color_50); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_50); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="primary_color_100">Primary 100</label>
                                                        <input type="color" class="form-control" id="primary_color_100" name="primary_color_100" value="<?php echo e($appearanceSettings->primary_color_100); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_100); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="primary_color_200">Primary 200</label>
                                                        <input type="color" class="form-control" id="primary_color_200" name="primary_color_200" value="<?php echo e($appearanceSettings->primary_color_200); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_200); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="primary_color_300">Primary 300</label>
                                                        <input type="color" class="form-control" id="primary_color_300" name="primary_color_300" value="<?php echo e($appearanceSettings->primary_color_300); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_300); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="primary_color_400">Primary 400</label>
                                                        <input type="color" class="form-control" id="primary_color_400" name="primary_color_400" value="<?php echo e($appearanceSettings->primary_color_400); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_400); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="primary_color_600">Primary 600</label>
                                                        <input type="color" class="form-control" id="primary_color_600" name="primary_color_600" value="<?php echo e($appearanceSettings->primary_color_600); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_600); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="primary_color_700">Primary 700</label>
                                                        <input type="color" class="form-control" id="primary_color_700" name="primary_color_700" value="<?php echo e($appearanceSettings->primary_color_700); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_700); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Secondary Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Secondary Colors</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="secondary_color">Secondary Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="secondary_color" name="secondary_color" value="<?php echo e($appearanceSettings->secondary_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="secondary_color_foreground">Secondary Foreground</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="secondary_color_foreground" name="secondary_color_foreground" value="<?php echo e($appearanceSettings->secondary_color_foreground); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_foreground); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_50">Secondary 50</label>
                                                        <input type="color" class="form-control" id="secondary_color_50" name="secondary_color_50" value="<?php echo e($appearanceSettings->secondary_color_50); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_50); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_100">Secondary 100</label>
                                                        <input type="color" class="form-control" id="secondary_color_100" name="secondary_color_100" value="<?php echo e($appearanceSettings->secondary_color_100); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_100); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_200">Secondary 200</label>
                                                        <input type="color" class="form-control" id="secondary_color_200" name="secondary_color_200" value="<?php echo e($appearanceSettings->secondary_color_200); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_200); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_300">Secondary 300</label>
                                                        <input type="color" class="form-control" id="secondary_color_300" name="secondary_color_300" value="<?php echo e($appearanceSettings->secondary_color_300); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_300); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_400">Secondary 400</label>
                                                        <input type="color" class="form-control" id="secondary_color_400" name="secondary_color_400" value="<?php echo e($appearanceSettings->secondary_color_400); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_400); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_600">Secondary 600</label>
                                                        <input type="color" class="form-control" id="secondary_color_600" name="secondary_color_600" value="<?php echo e($appearanceSettings->secondary_color_600); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_600); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_700">Secondary 700</label>
                                                        <input type="color" class="form-control" id="secondary_color_700" name="secondary_color_700" value="<?php echo e($appearanceSettings->secondary_color_700); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_700); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Accent Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Accent Colors</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="accent_color">Accent Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="accent_color" name="accent_color" value="<?php echo e($appearanceSettings->accent_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="accent_color_foreground">Accent Foreground</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="accent_color_foreground" name="accent_color_foreground" value="<?php echo e($appearanceSettings->accent_color_foreground); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_foreground); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="accent_color_50">Accent 50</label>
                                                        <input type="color" class="form-control" id="accent_color_50" name="accent_color_50" value="<?php echo e($appearanceSettings->accent_color_50); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_50); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="accent_color_100">Accent 100</label>
                                                        <input type="color" class="form-control" id="accent_color_100" name="accent_color_100" value="<?php echo e($appearanceSettings->accent_color_100); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_100); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="accent_color_200">Accent 200</label>
                                                        <input type="color" class="form-control" id="accent_color_200" name="accent_color_200" value="<?php echo e($appearanceSettings->accent_color_200); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_200); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="accent_color_300">Accent 300</label>
                                                        <input type="color" class="form-control" id="accent_color_300" name="accent_color_300" value="<?php echo e($appearanceSettings->accent_color_300); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_300); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="accent_color_400">Accent 400</label>
                                                        <input type="color" class="form-control" id="accent_color_400" name="accent_color_400" value="<?php echo e($appearanceSettings->accent_color_400); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_400); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="accent_color_600">Accent 600</label>
                                                        <input type="color" class="form-control" id="accent_color_600" name="accent_color_600" value="<?php echo e($appearanceSettings->accent_color_600); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_600); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="accent_color_700">Accent 700</label>
                                                        <input type="color" class="form-control" id="accent_color_700" name="accent_color_700" value="<?php echo e($appearanceSettings->accent_color_700); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->accent_color_700); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- UI Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">UI Element Colors</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="background_color">Background Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-layer-group"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="background_color" name="background_color" value="<?php echo e($appearanceSettings->background_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->background_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="foreground_color">Foreground Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="foreground_color" name="foreground_color" value="<?php echo e($appearanceSettings->foreground_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->foreground_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="card_color">Card Background</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="card_color" name="card_color" value="<?php echo e($appearanceSettings->card_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->card_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="card_foreground_color">Card Foreground</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="card_foreground_color" name="card_foreground_color" value="<?php echo e($appearanceSettings->card_foreground_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->card_foreground_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="border_color">Border Color</label>
                                                        <input type="color" class="form-control" id="border_color" name="border_color" value="<?php echo e($appearanceSettings->border_color); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->border_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="input_color">Input Color</label>
                                                        <input type="color" class="form-control" id="input_color" name="input_color" value="<?php echo e($appearanceSettings->input_color); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->input_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="ring_color">Ring Color</label>
                                                        <input type="color" class="form-control" id="ring_color" name="ring_color" value="<?php echo e($appearanceSettings->ring_color); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->ring_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="muted_color">Muted Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-adjust"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="muted_color" name="muted_color" value="<?php echo e($appearanceSettings->muted_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->muted_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="muted_foreground_color">Muted Foreground</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="muted_foreground_color" name="muted_foreground_color" value="<?php echo e($appearanceSettings->muted_foreground_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->muted_foreground_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Action Colors</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="yellow_action">Warning/Action</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-exclamation-triangle"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="yellow_action" name="yellow_action" value="<?php echo e($appearanceSettings->yellow_action); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->yellow_action); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="green_positive">Success/Positive</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-check-circle"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="green_positive" name="green_positive" value="<?php echo e($appearanceSettings->green_positive); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->green_positive); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="red_negative">Error/Negative</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-times-circle"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="red_negative" name="red_negative" value="<?php echo e($appearanceSettings->red_negative); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->red_negative); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Gradient Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Gradient Colors</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="gradient_pink_from">Gradient From</label>
                                                        <input type="color" class="form-control" id="gradient_pink_from" name="gradient_pink_from" value="<?php echo e($appearanceSettings->gradient_pink_from); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->gradient_pink_from); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="gradient_purple_via">Gradient Via</label>
                                                        <input type="color" class="form-control" id="gradient_purple_via" name="gradient_purple_via" value="<?php echo e($appearanceSettings->gradient_purple_via); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->gradient_purple_via); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="gradient_indigo_to">Gradient To</label>
                                                        <input type="color" class="form-control" id="gradient_indigo_to" name="gradient_indigo_to" value="<?php echo e($appearanceSettings->gradient_indigo_to); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->gradient_indigo_to); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Preloader Colors -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Preloader Colors</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="preloader_text_color">Preloader Text</label>
                                                        <input type="color" class="form-control" id="preloader_text_color" name="preloader_text_color" value="<?php echo e($appearanceSettings->preloader_text_color); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->preloader_text_color); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="preloader_accent_color">Preloader Accent</label>
                                                        <input type="color" class="form-control" id="preloader_accent_color" name="preloader_accent_color" value="<?php echo e($appearanceSettings->preloader_accent_color); ?>">
                                                        <small class="text-muted"><?php echo e($appearanceSettings->preloader_accent_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="preloader_background">Preloader Background</label>
                                                <textarea class="form-control" id="preloader_background" name="preloader_background" rows="2"><?php echo e($appearanceSettings->preloader_background); ?></textarea>
                                                <small class="text-muted">CSS background value (color or gradient)</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="preloader_background_dark">Preloader Background Dark</label>
                                                <textarea class="form-control" id="preloader_background_dark" name="preloader_background_dark" rows="2"><?php echo e($appearanceSettings->preloader_background_dark); ?></textarea>
                                                <small class="text-muted">CSS background value for dark mode</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Additional Settings -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Additional Settings</h5>
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="use_gradient" name="use_gradient" <?php echo e($appearanceSettings->use_gradient ? 'checked' : ''); ?>>
                                                    <label class="custom-control-label" for="use_gradient">Enable Gradient Effects</label>
                                                </div>
                                                <small class="text-muted">Apply gradient effects to buttons and cards</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="gradient_direction">Gradient Direction</label>
                                                <select class="form-control" id="gradient_direction" name="gradient_direction">
                                                    <option value="to right" <?php echo e($appearanceSettings->gradient_direction == 'to right' ? 'selected' : ''); ?>>Left to Right</option>
                                                    <option value="to left" <?php echo e($appearanceSettings->gradient_direction == 'to left' ? 'selected' : ''); ?>>Right to Left</option>
                                                    <option value="to bottom" <?php echo e($appearanceSettings->gradient_direction == 'to bottom' ? 'selected' : ''); ?>>Top to Bottom</option>
                                                    <option value="to top" <?php echo e($appearanceSettings->gradient_direction == 'to top' ? 'selected' : ''); ?>>Bottom to Top</option>
                                                    <option value="to bottom right" <?php echo e($appearanceSettings->gradient_direction == 'to bottom right' ? 'selected' : ''); ?>>Top Left to Bottom Right</option>
                                                    <option value="to bottom left" <?php echo e($appearanceSettings->gradient_direction == 'to bottom left' ? 'selected' : ''); ?>>Top Right to Bottom Left</option>
                                                </select>
                                                <small class="text-muted">Direction of gradient effects</small>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="disable_animations" name="disable_animations" <?php echo e($appearanceSettings->disable_animations ? 'checked' : ''); ?>>
                                                    <label class="custom-control-label" for="disable_animations">Disable Animations</label>
                                                </div>
                                                <small class="text-muted">Turn off animations for better performance on slower devices</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Custom CSS -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Custom CSS</h5>
                                            <div class="form-group mb-0">
                                                <textarea class="form-control" id="custom_css" name="custom_css" rows="8" placeholder="Enter custom CSS rules here"><?php echo e($appearanceSettings->custom_css); ?></textarea>
                                                <small class="text-muted">Advanced: Add custom CSS styles to override default styling</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Admin Notes -->
                                    <div class="card bg-light mb-4">
                                        <div class="card-body">
                                            <h5 class="mb-3">Admin Notes</h5>
                                            <div class="form-group mb-0">
                                                <textarea class="form-control" name="notes" rows="3" placeholder="Add notes about current configuration (only visible to admins)"><?php echo e($appearanceSettings->notes); ?></textarea>
                                                <small class="text-muted">These notes are only visible to administrators</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fa fa-save mr-1"></i> Save Settings
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Update color input value displays
        const colorInputs = document.querySelectorAll('input[type="color"]');
        colorInputs.forEach(input => {
            // Check if the input is inside an input-group
            const isInInputGroup = input.closest('.input-group') !== null;
            
            let smallTag;
            if (isInInputGroup) {
                // For inputs inside input-group, look for small tag after the parent input-group
                smallTag = input.closest('.input-group').nextElementSibling;
            } else {
                // For direct inputs, look for small tag immediately after the input
                smallTag = input.nextElementSibling;
            }
            
            if (smallTag && smallTag.tagName === 'SMALL') {
                input.addEventListener('input', function() {
                    smallTag.textContent = this.value;
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tidetrus/public_html/resources/views/admin/appearance/index.blade.php ENDPATH**/ ?>