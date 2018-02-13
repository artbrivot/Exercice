
<?php $title = "Gestion utilisateurs"; ?>

<?php ob_start(); ?>
 <h1 class=text-center>Liste des utilisateurs</h1>
<hr>
<div class="container">
    <br>
    <div class='row uselist title'>
        <div class='col-1'>Nom</div>
        <div class='col-1'>Prénom</div>
        <div class='col-2'>email</div>
        <div class='col-2'>commenter</div>
        <div class='col-2'>Voir tout les commentaires sur cette personne</div>
        <div class='col-2'>Modifier</div>
        <div class='col-2'>Supprimer</div>
    </div>
    <?php     
    $this->load->database();
    $query = $this->db->query('SELECT id, Nom, Prenom, Email FROM comptes');
    foreach ($query->result_array() as $use){ ?>
    <div class='row uselist'>
        <div class='col-1'><?php echo $use['Nom'];?></div>
        <div class='col-1'><?php echo $use['Prenom'];?></div>
        <div class='col-2'><?php echo $use['Email'];?></div>
        <div class='col-2'><a href=index.php?action=useEdit&id=<?= $use['id']; ?>> <i class="material-icons">commenter</i></a></div>
        <div class='col-2'><a href=index.php?action=useEdit&id=<?= $use['id']; ?>> <i class="material-icons">Voir tout les commentaires sur cette personne</i></a></div>
        <div class='col-2'><a href=index.php?action=useEdit&id=<?= $use['id']; ?>> <i class="material-icons">Modifier les informations de cette personne</i></a></div>
        <div class='col-2'><a href=index.php?action=useEdit&id=<?= $use['id']; ?>> <i class="material-icons">Supprimer le compte de cette personne</i></a></div>
    </div> 
    <?php
    }
    ?>
</div>
<span style="font-weight: bold; position: fixed; bottom: 70px; right: 15px;"><button type="submit" class="btn btn-primary">se déconnecter</button></span>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>



