<?= $this->extend('layout/backend/template.php') ?>

<?= $this->section('content') ?>

<h1 class="text-center">Změnit heslo</h1>
<?php

$dataPassword = array(
    'name' => 'password',
    'id' => 'password',
    'placeholder' => 'a'
);

$dataNewPassword = array(
    'name' => 'new_password',
    'id' => 'new_password',
    'placeholder' => 'a'
);

$dataRepeatPassword = array(
    'name' => 'repeat_password',
    'id' => 'repeat_password',
    'placeholder' => 'a'
);

$dataButton = array(
    'type' => 'submit',
    'content' => 'Odeslat',
    'class' => 'btn btn-primary'
);
echo div(['class' => 'row']);
echo div(['class' => 'col-lg-8 offset-lg-2 col-12 col-md-10 offset-md-1']);
echo form_input_bs($dataPassword, "Původní heslo", 'password');
echo form_input_bs($dataNewPassword, 'Nové heslo', 'password');
echo form_input_bs($dataRepeatPassword, 'Nové heslo ještě jednou', 'password');
echo form_button($dataButton);

echo endDiv();
echo endDiv();


?>
<?= $this->endSection() ?>