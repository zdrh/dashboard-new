<?= $this->extend('layout/frontend/template.php') ?>

<?= $this->section('content') ?>



<?php
$divRow = array(
    'class' => "row"
);

$divGrid = array(
    'class' => 'col-lg-12'
);

$dataName = array(
    'name' => "name",
);
$iconName = "<i class=\"fa-solid fa-square-plus\"></i>";

$dataTextarea = array(
    'name' => "description",
    'id' => 'description',
    'rows' => 10,
    'class' => 'form-control mb-3',
    'value' => "Vlož popisek kategorie"

);

$dataValue = array(
    'name' => 'value',
    'class' => 'form-control'
);

$iconValue = "<i class=\"fa-solid fa-circle-dollar-to-slot\"></i>";

$dataButton = array(
    'type' => 'submit',
    'class' => 'btn btn-primary'
);
echo div($divRow);
echo div($divGrid);
?>
<h1>Přidat kategorii</h1>
<?php
echo form_open('pridat-kategorii-complete');
echo form_input_group_bs($dataName, 'Název kategorie', $iconName);
echo form_textarea($dataTextarea);
echo form_input_group_bs($dataValue, 'Hodnota kategorie', $iconValue, true, "number", true);
echo form_button($dataButton, 'Odeslat');
echo form_close();
echo endDiv();
echo endDiv();
?>

<script>
    $(document).ready(function() {
        tinymce.init({
            selector: 'textarea#description',
            license_key: 'c2ytf5msqagf0zntao63b0k6zom8zl30vweth5f5xnutlik0',
            promotion : false,
            branding : false,
            plugins: 'table link',
            toolbar: 'undo redo styles bold italic underline alignleft aligncenter alignright alignjustify link table'
        });
    });
</script>

<?= $this->endSection() ?>