
<h3 class="text-center mb-3">


	<?= ($leTypePresta != null ? "Modification" : "Insertion"); ?> d'un type</h3>
<form method="post" action="">
	<div class="mb-3">
		<label for="nomtypepresta" class="form-label">Nom du type :</label>
		<input type="text" name="nomtypepresta" id="nomtypepresta" placeholder="Ex : Garderie" 
		class="form-control" value="<?= ($leTypePresta != null ? $leTypePresta['nomtypepresta'] : null); ?>">
	</div>
	<div class="d-flex justify-content-center mb-5">
		<button type="reset" class="btn btn-danger me-2">Annuler</button>
		<button type="submit" <?= ($leTypePresta != null ? 'name="subeditclass"' : 'name="subaddclass"'); ?> class="btn btn-primary"><?= ($leTypePresta != null ? "Modifier" : "Ajouter"); ?></button>
	</div>
</form>
