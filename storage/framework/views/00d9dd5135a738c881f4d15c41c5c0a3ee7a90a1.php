<?php $__env->startSection('title','PromoTR - Home'); ?>
<?php $__env->startSection('title_header','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <p>
                        Hi <strong><?php echo e(auth()->user()->name); ?></strong>, 
                        Anda login sebagai 
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                            <span class="btn    btn-success">Admin</span>
                        <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isManager')): ?>
                            <span class="btn btn-info">Manager</span>
                        <?php else: ?>
                            <span class="btn btn-warning">User</span>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/home.blade.php ENDPATH**/ ?>