
<?php $title = "Connexion"; ?>

<?php ob_start(); ?>
 <h1 class=text-center>connexion</h1>
<hr>
<div class="form-row text-center" style='margin-top: 200px'>
	<div class='col-12'>
		<form methode="post" action="login">
			<p>Nom</p>
			<input required type="text" class="form-control" name="nom" id="InputUSER01" aria-describedby="User01" placeholder="Nom">
			<br>
			<p>Email</p>
			<input required stype="email" class="form-control" name="email" id="InputUSER01" aria-describedby="User01" placeholder="email">
			<br>
			<br>
			<button type="submit" class="btn btn-primary">se connecter</button>
		</form>
	</div>
</div>

<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>

