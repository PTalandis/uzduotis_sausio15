<h1>create1</h1>

<form method="POST" action="<?php echo e(route('company.store')); ?>">

Name <input type="text" name="company_name"/>
Type <input type="text" name="company_type"/>
Description <input type="text" name="company_description"/>

<?php echo csrf_field(); ?>

<button type="submit">Add</button>
</form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/company/create.blade.php ENDPATH**/ ?>