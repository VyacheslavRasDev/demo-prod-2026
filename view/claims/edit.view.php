<?php require 'view/partials/head.php'; ?>

	<div class="container">
		<form action="/claim" class="form-container" method="POST">
			<label for="description">Описание</label>
			<textarea name="description" id="" cols="30" rows="10" placeholder="put you`re description there"><?= $claim['description'] ?? '' ?></textarea>
			<?php if (isset($errors['description'])) { ?>
				<p style="color: red">
					<?= $errors['description'] ?>
				</p>
			<?php } ?>
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="id" value="<?= $claim['id'] ?>">
			<button class="submit">Отправить</button>
		</form>
		<div>
			<a href="/claim?id=<?= $claim['id'] ?>">Cancel</a>
		</div>
	</div>
<?php require 'view/partials/footer.php'; ?>