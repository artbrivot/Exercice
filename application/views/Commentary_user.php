
<?php $title = "Commentaires"; ?>

<?php ob_start(); ?>
 <h1 class="text-center">commentaire(s)</h1>
<hr>
<br>
<br>
<div class="container">
    <br>
    <div class='row uselist title'>
        <div class='col-4'>Nom de l'auteur du commentaire</div>
        <div class='col-4'>Mail de l'auteur du commentaire</div>
        <div class='col-4'>commentaire</div>
    </div>
    <?php foreach ($coms as $com){ ?>
    <div class='row uselist'>
        <div class='col-4'><?php echo $com->writername;?></div>
        <div class='col-4'><?php echo $com->writermail;?></div>
        <div class='col-4'><?php echo $com->commentaire;?></div>
    </div> 
    <?php
    }
    ?>
</div>
<span style="font-weight: bold; position: fixed; bottom: 70px; right: 15px;"><button type="submit" class="btn btn-primary">se déconnecter</button></span>

<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>



