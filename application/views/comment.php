<?php $title = "Commenter"; 


ob_start(); ?>
 <h1 class=text-center>inscription</h1>
<hr>
<div class="form-row text-center" style='margin-top: 200px'>
	<div class='col-12'>
		<?php
    $writerName = $this->session->userdata('username');
    $writerMail = $this->session->userdata('email');
      echo form_open('logged/commentAction');
      $com = array(
        'name'=>'com',
        'id'=>'com',
        'cols'=>'100',
        'raws'=>'10',
        'placeholder'=>'commentaire',
        'value'=>set_value('com')
      );
      echo form_textarea($com);
      $test = array(
        'test'=> $id
      );
      echo form_hidden($test);


      $name = array(
        'name'=> $writerName
      );
      echo form_hidden($name);


      $mail = array(
        'mail'=> $writerMail
      );
      echo form_hidden($mail);



      echo '<br>';
    echo form_submit('envoi', 'Valider');
 
    echo form_close();
 
?>
	</div>
</div>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>

