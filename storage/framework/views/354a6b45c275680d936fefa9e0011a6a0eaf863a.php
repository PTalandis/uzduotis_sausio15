<h1>show</h1>

    <p>Id : <?php echo e($client->id); ?></p>
    <p>Name : <?php echo e($client->name); ?></p>
    <p>Surname : <?php echo e($client->surname); ?></p>
    <p>Username : <?php echo e($client->username); ?></p>
    <p>Company_id : <?php echo e($client->company_id); ?></p>
    <p>Image_url : <?php echo e($client->image_url); ?></p>

    <a href="<?php echo e(route('client.destroy', [$client])); ?>">Delete</a>
    <form method="post" action="<?php echo e(route('client.destroy',[$client])); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit">Delete</button>
    </form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/clients/show.blade.php ENDPATH**/ ?>