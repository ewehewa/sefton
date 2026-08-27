<div class="my-3">
    <?php if(isset($links->current_page)): ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start pagination-sm">
                <?php $__currentLoopData = $links->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        parse_str(parse_url($link->url)['query'], $params);
                        $page = $params['page'];
                    ?>

                    <?php if($link->url == null): ?>
                        <li class="page-item disabled">
                            <a class="page-link"><?php echo e(html_entity_decode($link->label)); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="page-item <?php echo e($link->active ? 'active' : ''); ?>">
                            <a class="page-link"
                                href="<?php echo e(route('signals', ['page' => $page])); ?>"><?php echo e(html_entity_decode($link->label)); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/components/paginator.blade.php ENDPATH**/ ?>