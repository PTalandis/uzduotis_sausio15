<h1>show1</h1>

    <p>Id : <?php echo e($company->id); ?></p>
    <p>Name : <?php echo e($company->name); ?></p>
    <p>Type : <?php echo e($company->type); ?></p>
    <p>Description : <?php echo e($company->description); ?></p>

    <a href="<?php echo e(route('company.destroy', [$company])); ?>">Delete</a>
    <form method="post" action="<?php echo e(route('company.destroy',[$company])); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit">Delete</button>
    </form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/company/show.blade.php ENDPATH**/ ?>