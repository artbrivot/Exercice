
<?php $title = "Affichage utilisateurs"; ?>

<?php ob_start(); ?>
 <h1 class=text-center>Liste des utilisateurs</h1>
<hr>
<div class="container">
    <br>
    <div class='row uselist title'>
        <div class='col-2'>Nom</div>
        <div class='col-2'>Prénom</div>
        <div class='col-2'>mail</div>
        <div class='col-2'>commenter</div>
        <div class='col-4'>Voir tout les commentaires sur cette personne</div>
    </div>
    <?php
    foreach ($users as $user){ ?>
    <div class='row uselist'>
        <div class='col-2'><?php echo $user->nom;?></div>
        <div class='col-2'><?php echo $user->prenom;?></div>
        <div class='col-2'><?php echo $user->email;?></div>
        <?php $segments = array('logged', 'comment', $user->id); ?>
        <?php $segfault = array('logged', 'commentary_user', $user->id); ?>
        <div class='col-2'><a href= <?php echo site_url($segments); ?>> <i class="material-icons">commenter</i></a></div>
        <div class='col-4'><a href=<?php echo site_url($segfault); ?>> <i class="material-icons">Voir tout les commentaires sur cette personne</i></a></div>
    </div> 
    <?php
    }
    ?>
</div>
<span style="font-weight: bold; position: fixed; bottom: 70px; right: 15px;"><button type="submit" class="btn btn-primary">se déconnecter</button></span>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>



