<h1>edit1</h1>

<form method="POST" action="<?php echo e(route('company.update', [$company])); ?>">

Name <input type="text" name="company_name" value='<?php echo e($company->name); ?>'/>
Type <input type="text" name="company_type" value='<?php echo e($company->type); ?>'/>
Description <input type="text" name="company_description" value='<?php echo e($company->description); ?>'/>

<?php echo csrf_field(); ?>

<button type="submit">Edit</button>
</form><?php /**PATH C:\xampp\htdocs\laravel_projektai\uzduotis_sausio15\resources\views/company/edit.blade.php ENDPATH**/ ?>