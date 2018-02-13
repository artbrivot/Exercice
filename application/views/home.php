<?php $title = "Accueil"; 
ob_start(); ?>
<h1 class=text-center>Accueil</h1>
<hr>
<div class="form-row text-center" style='margin-top: 200px'>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <a href= <?php echo site_url('home/inscription'); ?> type="button" class="btn btn-primary btn-lg">S'inscrire</a>
      <br>
      <br>
      <a href= <?php echo site_url('home/connection'); ?> type="button" class="btn btn-primary btn-lg">Se connecter</a>
      </div>
 </div>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>

