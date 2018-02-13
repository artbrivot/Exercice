
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
    $this->load->database();
    $query = $this->db->query('SELECT Nom, Prenom, Email FROM users');
    foreach ($query->result_array() as $use){ ?>
    <div class='row uselist'>
        <div class='col-2'><?php echo $use['nom'];?></div>
        <div class='col-2'><?php echo $use['prenom'];?></div>
        <div class='col-2'><?php echo $use['email'];?></div>
        <div class='col-2'><a href=index.php?action=useEdit&id=> <i class="material-icons">commenter</i></a></div>
        <div class='col-4'><a href=index.php?action=useEdit&id=> <i class="material-icons">Voir tout les commentaires sur cette personne</i></a></div>
    </div> 
    <?php
    }
    ?>
</div>
<span style="font-weight: bold; position: fixed; bottom: 70px; right: 15px;"><button type="submit" class="btn btn-primary">se déconnecter</button></span>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>



