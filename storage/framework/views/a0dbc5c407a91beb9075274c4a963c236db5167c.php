
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
                                <div class="card mb-4 text-white" style="background-image: linear-gradient(45deg, <?php echo e($appearanceSettings->primary_color); ?>, <?php echo e($appearanceSettings->primary_color_dark); ?>); border-radius: 15px;">
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
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->primary_color_dark); ?>; border-radius: 5px;"></div>
                                                <small>Primary Dark</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->primary_color_light); ?>; border-radius: 5px;"></div>
                                                <small>Primary Light</small>
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
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->bg_color); ?>; border-radius: 5px; border: 1px solid #eee;"></div>
                                                <small>Background</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body p-2 text-center">
                                                <div class="color-swatch mb-2" style="height: 50px; background-color: <?php echo e($appearanceSettings->text_color); ?>; border-radius: 5px;"></div>
                                                <small>Text</small>
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
                                                <td><?php echo e($appearanceSettings->gradient_direction); ?></td>
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
                                <h4 class="card-title">Custom CSS</h4>
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
                                                <div class="col-md-4">
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
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="primary_color_dark">Primary Dark</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="primary_color_dark" name="primary_color_dark" value="<?php echo e($appearanceSettings->primary_color_dark); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_dark); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="primary_color_light">Primary Light</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="primary_color_light" name="primary_color_light" value="<?php echo e($appearanceSettings->primary_color_light); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->primary_color_light); ?></small>
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
                                                <div class="col-md-4">
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
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_dark">Secondary Dark</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="secondary_color_dark" name="secondary_color_dark" value="<?php echo e($appearanceSettings->secondary_color_dark); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_dark); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="secondary_color_light">Secondary Light</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-palette"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="secondary_color_light" name="secondary_color_light" value="<?php echo e($appearanceSettings->secondary_color_light); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->secondary_color_light); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- UI Elements Colors -->
                                            <div class="card bg-light mb-4">
                                                <div class="card-body">
                                                    <h5 class="mb-3">UI Element Colors</h5>
                                                    <div class="form-group">
                                                        <label for="text_color">Text Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="text_color" name="text_color" value="<?php echo e($appearanceSettings->text_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->text_color); ?></small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bg_color">Background Color</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-layer-group"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="bg_color" name="bg_color" value="<?php echo e($appearanceSettings->bg_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->bg_color); ?></small>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="card_bg_color">Card Background</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="card_bg_color" name="card_bg_color" value="<?php echo e($appearanceSettings->card_bg_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->card_bg_color); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Sidebar Colors -->
                                            <div class="card bg-light mb-4">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Sidebar Colors</h5>
                                                    <div class="form-group">
                                                        <label for="sidebar_bg_color">Sidebar Background</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-columns"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="sidebar_bg_color" name="sidebar_bg_color" value="<?php echo e($appearanceSettings->sidebar_bg_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->sidebar_bg_color); ?></small>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="sidebar_text_color">Sidebar Text</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                                                            </div>
                                                            <input type="color" class="form-control" id="sidebar_text_color" name="sidebar_text_color" value="<?php echo e($appearanceSettings->sidebar_text_color); ?>">
                                                        </div>
                                                        <small class="text-muted"><?php echo e($appearanceSettings->sidebar_text_color); ?></small>
                                                    </div>
                                                </div>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Update color input value displays
        const colorInputs = document.querySelectorAll('input[type="color"]');
        colorInputs.forEach(input => {
            const smallTag = input.parentElement.nextElementSibling;
            input.addEventListener('input', function() {
                smallTag.textContent = this.value;
            });
        });
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home8/globalch/public_html/auth/resources/views/admin/appearance/index.blade.php ENDPATH**/ ?>