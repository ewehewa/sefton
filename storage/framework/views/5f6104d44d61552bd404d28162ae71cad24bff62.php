
<div class="bg-desktop-card-bg rounded-xl shadow-soft p-6 lg:col-span-1">
    <h3 class="text-lg font-semibold text-desktop-text mb-4">Quick Transfer</h3>
    <div class="flex items-center space-x-3 overflow-x-auto pb-2 custom-scrollbar">
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#" class="flex-shrink-0 group text-center">
            <img src="<?php echo e($contact->avatarUrl); ?>" alt="<?php echo e($contact->name); ?>" class="w-10 h-10 rounded-full border-2 border-transparent group-hover:border-desktop-primary transition-colors object-cover">
            
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button class="flex-shrink-0 w-10 h-10 rounded-full border-2 border-dashed border-desktop-border text-desktop-text-muted hover:border-desktop-primary hover:text-desktop-primary flex items-center justify-center transition-colors">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    
</div>
<?php /**PATH /home/nezertechy/public_html/nexa.nezertechy.com/resources/views/partials/_dashboard_quick_transfer_desktop.blade.php ENDPATH**/ ?>