<h1>edit</h1>

        
<form method="POST" action="<?php echo e(route('client.update', [$client])); ?>">

Name <input type="text" name="client_name" value='<?php echo e($client->name); ?>'/>
Surname <input type="text" name="client_surname" value='<?php echo e($client->surname); ?>' />
username <input type="text" name="client_username" value='<?php echo e($client->username); ?>'/>
company_id <input type="text" name="client_company_id" value='<?php echo e($client->company_id); ?>'/>
image_url <input type="text" name="client_image_url" value='<?php echo e($client->image_url); ?>'/>

<?php echo csrf_field(); ?>

<button type="submit">Edit</button>
</form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/clients/edit.blade.php ENDPATH**/ ?>