<?php
if ($alert->message != '') {
?>
    <div class="mt-3 text-center <?= $alert->class ?>">
        <?= $alert->message ?>
    </div>
<?php
}
?>