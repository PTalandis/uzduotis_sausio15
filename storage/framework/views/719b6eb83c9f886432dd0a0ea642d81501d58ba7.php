<h1>index1</h1>

<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>type</th>
        <th>description</th>
        <th>Actions</th>
</tr>
<?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($company->id); ?></td>
        <td><?php echo e($company->name); ?></td>
        <td><?php echo e($company->type); ?></td>
        <td><?php echo e($company->description); ?></td>
        <td>
            <a href="<?php echo e(route('company.edit', [$company])); ?>">Edit</a>
            <a href="<?php echo e(route('company.show', [$company])); ?>">Show</a>
            <form method="post" action="<?php echo e(route('company.destroy',[$company])); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/company/index.blade.php ENDPATH**/ ?>