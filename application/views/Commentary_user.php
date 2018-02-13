
<?php $title = "Commentaires"; ?>

<?php ob_start(); ?>
 <h1 class="text-center">commentaire(s)</h1>
<hr>
<br>
<br>
<p class="text-center">commentaire sur ...</p>
<div class="container">
    <br>
    <div class='row uselist title'>
        <div class='col-4'>Nom de l'auteur du commentaire</div>
        <div class='col-4'>Prénom de l'auteur du commentaire</div>
        <div class='col-4'>commentaire</div>
    </div>
    <?php foreach ($uselog as $use){ ?>
    <div class='row uselist'>
        <div class='col-4'><?php echo $use['date'];?></div>
        <div class='col-4'><?php echo $use['heure_debut'];?></div>
        <div class='col-4'><?php echo $use['heure_debut'];?></div>
    </div> 
    <?php
    }
    ?>
</div>
<span style="font-weight: bold; position: fixed; bottom: 70px; right: 15px;"><button type="submit" class="btn btn-primary">se déconnecter</button></span>

<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>



