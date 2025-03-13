<?= $this->extend('layout/backend/template.php') ?>

<?= $this->section('content') ?>

<h1 class="text-center">Upravit profil</h1>
<?php

$dataFirstName = array(
    'name' => 'first_name',
    'value' => $user->first_name,
    'required' => 'required'
);

$dataLastName = array(
    'name' => 'last_name',
    'value' => $user->last_name,
    'required' => 'required'
);

$dataEmail = array(
    'name' => 'email',
    'value' => $user->email,
    'required' => 'required'
);

$dataButton = array(
    'type' => 'submit',
    'content' => 'Odeslat',
    'class' => 'btn btn-primary'
);

echo form_open('profil/edit/complete', ['id' => 'editForm', 'novalidate' => 'novalidate', 'class' => 'needs-validation']);
echo div(['class' => 'row']);
echo div(['class' => 'col-lg-8 offset-lg-2 col-12 col-md-10 offset-md-1']);
echo form_input_group_bs($dataFirstName, "Jméno", '<i class="fa-solid fa-user"></i>');
echo form_input_group_bs($dataLastName, 'Příjmení', '<i class="fa-solid fa-user"></i>');
echo form_input_group_bs($dataEmail, 'Email', '<i class="fa-solid fa-envelope"></i>', true, 'email');
echo form_button($dataButton);
echo form_hidden('method', 'PUT');
echo endDiv();
echo endDiv();
echo form_close();


?>
<script>
    $(document).ready(function() {
        $('#editForm').validate({
            rules: {
                first_name: "required",
                last_name: "required",
                email: {
                    required: true,
                    email: true,
                    remote: "email/validate",
                    method: "post"  
                    }
                
            },

            highlight: function(element){
                $(element).parent().parent().addClass('is-invalid').removeClass('is-valid');
            },

            unhighlight: function(element){
                $(element).parent().parent().addClass('is-valid').removeClass('is-invlid');
            },
            errorElement: "div",
            errorPlacement: function(error, element){
                error.appendTo(element.parent)
            },
            success: function ( label, element ) {
					// Add the i element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "i" )[ 0 ] ) {
						$( "<i class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
        });
    });
</script>
<script>
    $(document).ready(function() {
        $.validator.setDefaults({
            highlight: function(element) {
                $(element).parent().parent().addClass("is-invalid").removeClass("is-valid");
                $(".error").addClass("text-danger d-block");
            },
            unhighlight: function(element) {
                $(element).parent().parent().addClass("is-valid").removeClass("is-invalid");
                $(".error").addClass("text-success d-block");
            }
        });
/*
        $("#register").validate({
            rules: {
                username: {
                    required: true,
                    remote: {
                        url: "register-username",
                        method: "post"
                    }

                },
                name: "required",
                surname: "required",

                password: {
                    required: true,
                    minlength: <?php   $minPasswordLength; ?>
                },
                confirm: {
                    required: true,
                    minlength: <?php  $minPasswordLength; ?>,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "register-email",
                        method: "post"
                    }
                }

            },
            errorPlacement: function(error, element) {
                error.appendTo(element.parent().parent().parent());
            },
            errorElement: "div",
        })*/
    });
</script>

<?= $this->endSection() ?>