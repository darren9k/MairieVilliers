<h3 class="text-center mb-3">
	<?= ($leTypeEvent != null ? "Modification" : "Insertion");
	 ?> d'un type d'evenement</h3>


<form method="post" action="">
	<div class="mb-3">
		<label for="nomtypeevent" class="form-label">Nom du type de l'evenement
		</label>
		<input type="text" name="nomtypeevent" id="nomtypeevent" placeholder="Ex : Concert" class="form-control" value="
		<?= ($leTypeEvent != null ? $leTypeEvent['nomtypeevent'] : null); ?>">
	</div>
	<div class="d-flex justify-content-center mb-5">
		<button type="reset" class="btn btn-danger me-2">Annuler</button>
		<button type="submit" <?= ($leTypeEvent != null ? 'name="subeditclass"' : 'name="subaddclass"'); ?> class="btn btn-primary"><?= ($leTypeEvent != null ? "Modifier" : "Ajouter"); ?></button>
	</div>
</form>
