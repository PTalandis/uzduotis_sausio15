<h1>create</h1>
<form method="POST" action="<?php echo e(route('client.store')); ?>">

Name <input type="text" name="client_name"/>
Surname <input type="text" name="client_surname"/>
username <input type="text" name="client_username"/>
company_id <input type="text" name="client_company_id"/>
image_url <input type="text" name="client_image_url"/>

<?php echo csrf_field(); ?>

<button type="submit">Add</button>
</form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/clients/create.blade.php ENDPATH**/ ?>