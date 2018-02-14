
<?php $title = "Connexion"; ?>

<?php ob_start(); ?>
 <h1 class=text-center>connexion</h1>
<hr>
<div class="form-row text-center" style='margin-top: 200px'>
	<div class='col-12'>
		<?php
 
    echo form_open('home/connectionAction');
 
      $nom= array(
 
        'name'=>'nom',
 
        'id'=>'nom',
 
        'placeholder'=>'Nom',
 
        'value'=>set_value('nom')
 
      );
      echo form_input($nom);
      $mail= array(
 
        'name'=>'mail',
 
        'id'=>'mail',
 
        'placeholder'=>'Email',
 
        'value'=>set_value('mail')
 
      );
      echo form_input($mail);
    echo form_submit('envoi', 'Valider');
 
    echo form_close();
 
?>
	</div>
</div>

<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>

