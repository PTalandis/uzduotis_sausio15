<h1>index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>surname</th>
        <th>username</th>
        <th>company_id</th>
        <th>image_url</th>
        <th>Actions</th>
</tr>
<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($client->id); ?></td>
        <td><?php echo e($client->name); ?></td>
        <td><?php echo e($client->surname); ?></td>
        <td><?php echo e($client->username); ?></td>
        <td><?php echo e($client->company_id); ?></td>
        <td><?php echo e($client->image_url); ?></td>
        <td>
            <a href="<?php echo e(route('client.edit', [$client])); ?>">Edit</a>
            <a href="<?php echo e(route('client.show', [$client])); ?>">Show</a>
            <form method="post" action="<?php echo e(route('client.destroy',[$client])); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/clients/index.blade.php ENDPATH**/ ?>