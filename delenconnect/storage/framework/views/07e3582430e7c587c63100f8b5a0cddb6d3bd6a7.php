<?php if(!empty(Auth::user()) && !empty($customer)): ?>
    ID => <?php echo e($customer->id ?: '# EMPTY ID #'); ?>

    <br>
    ROLE => <?php echo e($customer->role ?: '# EMPTY ROLE #'); ?>

    <br>
    NAME => <?php echo e($customer->name ?: '# EMPTY NAME #'); ?>

    <br>
    E-MAIL => <?php echo e($customer->email ?: '# EMPTY EMAIL #'); ?>

<?php endif; ?>
