<?= $this->extend('layout/frontend/template.php') ?>

<?= $this->section('content') ?>

<h1 class="text-center">Přihlášení</h1>

<?php

echo form_open('login-complete');

$dataLogin = array(
    'name' => 'login',
    'id' => 'login'
);

$inputGroupLogin = "<i class=\"fa-regular fa-user\"></i>";

$dataPassword = array(
    'name' => 'password',
    'id' => 'password'
);

$inputGroupPassword = "<i class=\"fa-regular fa-lock\"></i>";

$dataButton = array(
    'type' => 'submit',
    'content' => 'Odeslat',
    'class' => 'btn btn-primary'
);
echo div(['class' => 'row']);
echo div(['class' => 'col-lg-4 offset-lg-4 col-12 col-md-8 offset-md-2']);
//echo form_input_bs($dataLogin, 'Přihlašovací jméno');
//echo form_input_bs($dataPassword, 'Heslo', 'password');

echo form_input_group_bs($dataLogin, 'Přihlašovací jméno', '<i class="fa-solid fa-user"></i>', true);
echo form_input_group_bs($dataPassword, "Heslo", '<i class="fa-solid fa-lock"></i>', true, 'password');
echo form_button($dataButton);
echo form_close();
//echo "<hr>\n";

//echo form_input_vyuka($dataLogin, 'Přihlášení');
//echo form_input_vyuka($dataPassword, 'Heslo', 'password');
//echo form_button($dataButton);

echo endDiv();
echo endDiv();


?>
<!--
<form method="POST" action="" needs-validation novalidate>
<div class="input-group mb-3">
<span class="input-group-text"><i class="fa-regular fa-user"></i></span>
    <div class="form-floating">
       
        <input class="form-control" type="text" name="login2" id="login2" placeholder="a"/>
        <label for="login2" class="form-label">Přihlašovací jméno</label>
    </div>
<div class="valid-feedback">Valid.</div>
<div class="invalid-feedback">Please fill out this field.</div>  
</div>

<div class="input-group mb-3">

    <div class="form-floating">
        <input class="form-control" type="text" name="login2" id="login2" placeholder="a"/>
        <label for="login2" class="form-label">Přihlašovací jméno</label>
    </div>

    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
</div>
</form>
-->
<script>

</script>

<?= $this->endSection() ?>