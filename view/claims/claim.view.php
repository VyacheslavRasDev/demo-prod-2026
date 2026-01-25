<?php require 'view/partials/head.php'; ?>
	<div>
	<?= htmlspecialchars($claim['description']); ?>
	</div>
<div>
	<form action="/claim" method="post">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="id" value="<?= $claim['id'] ?>">
		<button type="submit">Delete</button>
	</form>
</div>

<?php require 'view/partials/footer.php'; ?>